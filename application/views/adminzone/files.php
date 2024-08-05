<?php include('header.php'); ?>
<?php include('commonSidebar.php'); ?>

<div class="col-lg-10  my_information">

    <div class="employee_details " style="justify-content: space-between;">
        <span style=" font-size: 15px; margin-top: 3px!important;">Documents</span>
        
        <div data-toggle="modal" data-target="#myModal" style="background: #06adad;padding-left: 8px;padding-right: 8px;padding-bottom: 4px;border-radius: 3px;cursor:pointer;padding-top: 3px;">
            <span style="font-size: 11px;">Upload File</span>

            <button class="btnQd " style="background: none;outline: none; border: none;">
                <i class="fa fa-upload" aria-hidden="true" style=" color: white;"></i>
            </button>

        </div>
    </div>
    <div class="container mt-4">
        <div class="data_table col-lg-12">
            <?php if (!empty($this->session->flashdata('message'))) { ?>
                <div class="alert alert-info alert-dismissible">
                    <button type="button" class="close" data-bs-dismiss="alert">&times;</button>
                    <?= $this->session->flashdata('message'); ?>
                </div>
            <?php } ?>
            <table class="table">
                <thead class="courses">
                    <tr>
                        <th>S.no</th>
                        <th colspan="20">All Files</th>
                        <th colspan="3" class="text-center">Action</th>
                    </tr>

                </thead>

                <tbody>
                    <?php $Sno = 1; ?>
                    <?php
                    // echo $empgetUserId->UserId;
                    // print_r($empgetUserId);
                    // die;
                    if (count($empSingleDoc)) :  ?>

                        <?php

                        foreach ($empSingleDoc as $emp) : ?>

                            <tr>
                                <td><?php echo $Sno; ?></td>
                                </td>
                                <td colspan="20"><span><i class="fas fa-file-pdf"></i></i></span>&nbsp;
                                    <?php
                                    $filetmpPath = $emp->filePath;
                                    $fileCheck = explode(".", $filetmpPath);

                                    // echo print_r($fileCheck);die;
                                    if ($emp->fileName != "") {

                                        echo $emp->fileName;
                                    } else {
                                        echo $fileCheck[0];
                                    }




                                    ?></td>
                                <td class="text-center"><a href="<?= base_url('index.php/adminzone/DocFile/singleEmpView/' . $emp->Id); ?>" target="_blank"><i class=" fa fa-eye"></i></a> </td>
                                <td class="text-center"><a href="<?= base_url('index.php/hrzone/Employee/singleEmpDownload/' . $emp->Id); ?>"><i class=" fa fa-download"></i></a> </td>

                            </tr>


                        <?php
                            $Sno++;
                        endforeach;  ?>
                    <?php else : ?>
                        <tr>
                            <td colspan="3">Data is Not Available</td>
                        <?php endif; ?>

                        </tr>

                </tbody>

            </table>

        </div>
    </div>
    <div class="modal " id="myModal" role="dialog">
        <div class="modal-dialog">



            <!-- Modal content-->
            <div class="modal-content">

                <div class="modal-header">
                <h4 class="modal-title">Files</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                
                <div class="modal-body apply_forms">


                    <form id="Image-form">

                        <div class="row col-lg-12">

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>File name <span>*</span></label>
                                    <input type="text" class="empInput" name="filePath[]" style="border: 1px solid #858796;height: calc(1.5em + 0.75rem + 2px);">
                                </div>
                            </div>

                            <div class="col-lg-6">

                                <div class="form-group">
                                    <label>Upload</label>
                                    <input type="file" class="uploadInput" name="filePath[]" style="/* border: 1px solid #858796; */height: calc(1.5em + 0.75rem + 2px);">
                                </div>


                            </div>



                        </div>

                        <div class="text-center" style="padding-top:12px;padding-bottom:16px;">
                            <button type="submit" id="btnUploadPage" class="btn btn-default leaveApplySubmitBtn  ">Submit</button>
                        </div>
                        <!-- <input type="hidden" name="frmUserId" value=""> -->

                    </form>
                </div>
            </div>
        </div>
    </div>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {


            $("#btnUploadPage").click(function() {

                let frm = $("#Image-form")[0];
                let frmDt = new FormData(frm);


                $.ajax({
                    type: "post",
                    url: "<?= site_url('adminzone/DocFile/singleFileUpload'); ?>",
                    data: frmDt,
                    dataType: "json",
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: response => {
                        $("#myModal").hide('modal');
                        location.reload();

                    },
                    error: error => {
                        console.log("Error", error);
                    }
                });
            });



            $(".singleDoc").click(function() {
                var conf = 'Are you sure You have to delete this file';
                var id = $(this).attr('data-singleId');
                // var Yid = $(this).attr('data-yearID');
                alert(conf);
                var ajaxurl = "<?= site_url('adminzone/EmployeeInfo/singleEmpDelete'); ?>";
                $.ajax({
                    type: "get",
                    url: ajaxurl,
                    data: {
                        id: id
                    },
                    success: response => {

                        if (response.status === 1) {

                        }
                    },
                    error: error => {
                        console.log("Error", error);
                    }


                });

            });

        });
    </script>
    <footer class="fixed-bottom py-1 ">
        <p style="margin-bottom: 0px;">HR HELP 24x7</p>
    </footer>
</div>
</body>

</html>