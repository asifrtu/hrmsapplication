<?php

DROP PROCEDURE IF EXISTS generateAttendanceReport;
DELIMITER $$
CREATE PROCEDURE generateAttendanceReport(IN search_startdate date,IN search_enddate date,IN employeeRoleIds text,IN dayOffIds text,IN vacationIds text)
BEGIN

DROP TEMPORARY TABLE IF EXISTS tableEmployeeAttendance;
CREATE TEMPORARY TABLE tableEmployeeAttendance AS
SELECT emp.empId,emp.first_name,x.attendance_date,
CASE
  WHEN x.CheckIN ='0' and x.Checkout = '1' THEN '1'
  WHEN x.CheckIN ='0' and x.Checkout is null then '2'
  WHEN x.CheckIN is null and x.Checkout = '1' then '3'
  ELSE '0'
END AS Status
FROM employee emp INNER JOIN
(
SELECT staff.empId,staff.first_name,att.attendance_date,
   max(case when att.inorout ='0' then att.inorout end) as 'CheckIN',
  max(case when att.inorout ='1' then att.inorout end) as 'Checkout'
FROM employee staff
LEFT JOIN employee_attendance att
ON staff.empId = att.empId
WHERE att.attendance_date >= DATE_FORMAT(search_startdate, '%Y-%m-%d')
AND  att.attendance_date <= DATE_FORMAT(search_enddate, '%Y-%m-%d')
GROUP BY staff.empId,att.attendance_date
) x  ON emp.empId = x.empId
GROUP BY x.empId,x.attendance_date;

/* Start - track the employee who are on full day work and on leaves  */
BEGIN
DEClARE row_empId int;
DEClARE row_empcode varchar(20);
DEClARE row_name varchar(200);
DEClARE v_finished int DEFAULT 0;
DEClARE dayoff_count int DEFAULT 0;
DEClARE leave_count int DEFAULT 0;
DEClARE schedule_fullday int DEFAULT 0;
DEClARE joined_after int DEFAULT 0;
DEClARE left_before int DEFAULT 0;
DEClARE loop_startDate date;
DEClARE loop_endDate date;

DEClARE formatted_startDate date;
DEClARE formatted_endDate date;

SET formatted_startDate = DATE_FORMAT(search_startdate, '%Y-%m-%d');
SET formatted_endDate = DATE_FORMAT(search_enddate, '%Y-%m-%d');

SET loop_startDate = DATE_FORMAT(search_startdate, '%Y-%m-%d');
SET loop_endDate = DATE_FORMAT(search_enddate, '%Y-%m-%d');

    WHILE loop_startDate <= loop_endDate DO
      SET row_empId = null;
      SET row_empcode = null;
      SET row_name = null;
      SET v_finished = 0;
      SET dayoff_count = 0;
      SET leave_count = 0;
      SET schedule_fullday = 0;
      SET joined_after = 0;

      BEGIN
      DEClARE attendance_cursor CURSOR FOR
          SELECT empcursor.id AS staffId,empcursor.empId,empcursor.first_name
          FROM employee empcursor
          WHERE empcursor.hire_date <= formatted_endDate
          AND empcursor.leaving_date >= formatted_startDate
          AND empcursor.deleted_at IS NULL
          AND
          NOT EXISTS
          (
              SELECT NULL
              FROM tableEmployeeAttendance attcursor
              WHERE attcursor.empId = empcursor.empId
              AND attcursor.attendance_date = loop_startDate
          );

          DEClARE CONTINUE HANDLER FOR NOT FOUND SET v_finished = 1;
            OPEN attendance_cursor;
              get_attendance : LOOP
                FETCH attendance_cursor INTO row_empId,row_empcode,row_name;
                IF v_finished = 1 THEN  /* if the result is empty */
                LEAVE get_attendance;
                END IF;

                SELECT COUNT(*) INTO leave_count FROM employee_leave WHERE empId = row_empId AND start_date <= loop_startDate AND end_date >= loop_startDate AND deleted_at IS NULL AND FIND_IN_SET(leavetypeId,vacationIds);
                SELECT COUNT(*) INTO dayoff_count FROM employee_leave WHERE empId = row_empId AND start_date <= loop_startDate AND end_date >= loop_startDate AND deleted_at IS NULL AND FIND_IN_SET(leavetypeId,dayOffIds);
                SELECT COUNT(*) INTO schedule_fullday FROM employee_schedule WHERE empId = row_empId AND start_date <= loop_startDate AND end_date >= loop_startDate AND hours = 24 AND deleted_at IS NULL;
                SELECT COUNT(*) INTO joined_after FROM employee WHERE id = row_empId AND hire_date > loop_startDate AND deleted_at IS NULL;
                SELECT COUNT(*) INTO left_before FROM employee WHERE id = row_empId AND leaving_date < loop_startDate AND deleted_at IS NULL;

                IF(leave_count > 0) THEN
                  INSERT INTO tableEmployeeAttendance VALUES (row_empcode,row_name,loop_startDate,4);
                ELSEIF(dayoff_count > 0) THEN
                  INSERT INTO tableEmployeeAttendance VALUES (row_empcode,row_name,loop_startDate,5);
                ELSEIF(schedule_fullday > 0) THEN
                  INSERT INTO tableEmployeeAttendance VALUES (row_empcode,row_name,loop_startDate,6);
                ELSEIF(joined_after > 0) THEN
                  INSERT INTO tableEmployeeAttendance VALUES (row_empcode,row_name,loop_startDate,7);
                ELSEIF(left_before > 0)  THEN
                  INSERT INTO tableEmployeeAttendance VALUES (row_empcode,row_name,loop_startDate,8);
                END IF;

              END LOOP get_attendance;
            CLOSE attendance_cursor;
        END;
      SET loop_startDate = DATE_ADD(loop_startDate, INTERVAL 1 DAY);
    END WHILE;
END;
/* END - track the staff who are on full day work and on leaves  */


SET @@group_concat_max_len = 75000;
SET @sql = NULL;
SELECT
  GROUP_CONCAT(DISTINCT
    CONCAT(
      'max(CASE WHEN calendaremployee.calendarDate = ''',
      date_format(calendarDate, '%Y-%m-%d'),
      ''' THEN coalesce(att.Status, 0) END) AS `',
      date_format(calendarDate, '%Y-%m-%d'), '`'
    )
  ) INTO @sql
FROM yearly_date_calendar
where calendarDate >= DATE_FORMAT(search_startdate, '%Y-%m-%d')
  and calendarDate <= DATE_FORMAT(search_enddate, '%Y-%m-%d');

SET @query :=
  CONCAT('SELECT calendaremployee.employeeId,calendaremployee.first_name,calendaremployee.last_name,calendaremployee.empId, ', @sql, '
            FROM
            (
              SELECT emp.id AS employeeId,cal.calendarDate,emp.first_name,emp.last_name,emp.empId
              FROM yearly_date_calendar cal
              CROSS JOIN employee emp
              WHERE emp.hire_date <= ''',DATE_FORMAT(search_enddate, '%Y-%m-%d'),''' AND emp.leaving_date >= ''',DATE_FORMAT(search_startdate, '%Y-%m-%d'),''' AND emp.deleted_at IS NULL AND FIND_IN_SET(emp.roleIds, ''',employeeRoleIds,''' )
             ) calendaremployee
            LEFT JOIN tableEmployeeAttendance att
              on calendaremployee.empId = att.empId
              and calendaremployee.calendarDate = att.attendance_date
              WHERE calendaremployee.calendarDate >= ''',DATE_FORMAT(search_startdate, '%Y-%m-%d'), '''
               AND calendaremployee.calendarDate <= ''',DATE_FORMAT(search_enddate, '%Y-%m-%d'),'''
              group by calendaremployee.first_name, calendaremployee.empId
              order by calendaremployee.empId');


PREPARE statement FROM @query;
EXECUTE statement;
DEALLOCATE PREPARE statement;
DROP TABLE tableEmployeeAttendance;
SET @@group_concat_max_len = 1024;
END $$
DELIMITER ;

?>