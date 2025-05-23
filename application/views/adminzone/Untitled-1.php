<style>


    /* Global Styles */

@import url("//fonts.googleapis.com/css?family=Maven+Pro");

html,body {
background-color:#222;
font-family:"Maven Pro", sans-serif;
height:100%;
}

* {
-webkit-tap-highlight-color:rgba(0,0,0,0);
-webkit-tap-highlight-color:transparent;
}


/* Menu Controls */

.logo {
color:#fff;
font-size:2.1rem;
padding:.65rem 1rem;
position:absolute;
}

.menu-button {
color:#fff;
cursor:pointer;
font-size:2rem;
padding:.75rem 1.55rem;
position:fixed;
right:0;
}

.open-menu {
color:#fff;
cursor:pointer;
font-size:1rem;
padding:1rem;
position:absolute;
right:0;
top:0;
transition:transform 250ms ease;
}

.rotate { transform:rotate(135deg); }


/* Generated Overflow Element */

.overflow {
margin-top:57px;
overflow-x:hidden;
overflow-y:auto;
}


/* Menu Styles */

#mobile-nav {
background-color:#60babb;
position:fixed;
width:100%;
z-index:1;
}

#mobile-nav ul {
background-color:rgba(0,0,0,.1);
display:none;
margin:0 1rem;
padding:0;
position:relative;
}

#mobile-nav ul:first-child {
background-color:transparent;
}

#mobile-nav ul li {
border-top:1px solid rgba(255,255,255,.075);
list-style:none;
margin-bottom:0;
position:relative;
}

#mobile-nav ul li a {
color:#fff;
display:inline-block;
font-size:1rem;
padding:1rem 0;
text-decoration:none;
width:100%;
}

#mobile-nav ul ul {
margin:0;
}

#mobile-nav ul ul li {
border-top:none;
padding-left:1rem;
}
</style>

<div id="mobile-nav">
    <div class="logo">Acme Inc.</div>
    <div class="menu-button"><span class="fa fa-reorder"></span></div>
    <ul>
        <li><a href="<?=base_url('index.php/hrzone/dashboard/wall');?>"><i class="fa fa-home" aria-hidden="true"></i></a></li>
        <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i></a></li>
        <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i></a></li>
        <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i></a></li>
        <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i></a></li>

        <li class="parent">
            <a href="#">About Company</a>
            <ul>
                <li><a href="<?=base_url('index.php/hrzone/Users/CompanyMissionAndGoals');?>">Company Info</a></li>
                <li><a href="<?=base_url('index.php/hrzone/Users/adminInfo');?>">Users View</a></li>
                
            </ul>
        </li>
        <li class="parent">
            <a href="#">Employee Details</a>
            <ul>
                <li><a href="<?=base_url('index.php/hrzone/Employee/employeeList');?>">Employee List</a></li>
                <li><a href="<?=base_url('index.php/hrzone/Employee/EmployeeDoc');?>">Employee Database</a></li>
                <li><a href="<?=base_url('index.php/hrzone/Ticket/EmpTicket');?>">Raised Tickets</a></li>
                
            </ul>
        </li>

        <li class="parent">
            <a href="#">Pay and Time</a>
            <ul>
                <li><a href="<?=base_url('index.php/hrzone/Pay/CompensationList');?>">Compensation List</a></li>
                <li><a href="<?=base_url('index.php/hrzone/Attendance/AllEmployeeTimeList');?>">Employee Time List</a></li>
                <li><a href="<?=base_url('index.php/hrzone/SalaryBreakUp');?>">Salary BreakUp</a></li>
            </ul>
        </li>

        <li class="parent">
            <a href="#">Products</a>
            <ul>
                <li><a href="#">Modeflick</a></li>
                <li><a href="#">Neoskizzle</a></li>
                <li><a href="#">Bopster</a></li>
                <li><a href="#">Locobot</a></li>
                <li><a href="#">Jovaphile</a></li>
                <li><a href="#">Peloozoid</a></li>
            </ul>
        </li>

        <li class="parent">
            <a href="#">Products</a>
            <ul>
                <li><a href="#">Modeflick</a></li>
                <li><a href="#">Neoskizzle</a></li>
                <li><a href="#">Bopster</a></li>
                <li><a href="#">Locobot</a></li>
                <li><a href="#">Jovaphile</a></li>
                <li><a href="#">Peloozoid</a></li>
            </ul>
        </li>
        <li class="parent">
            <a href="#">Products</a>
            <ul>
                <li><a href="#">Modeflick</a></li>
                <li><a href="#">Neoskizzle</a></li>
                <li><a href="#">Bopster</a></li>
                <li><a href="#">Locobot</a></li>
                <li><a href="#">Jovaphile</a></li>
                <li><a href="#">Peloozoid</a></li>
            </ul>
        </li>
        <li class="parent">
            <a href="#">Products</a>
            <ul>
                <li><a href="#">Modeflick</a></li>
                <li><a href="#">Neoskizzle</a></li>
                <li><a href="#">Bopster</a></li>
                <li><a href="#">Locobot</a></li>
                <li><a href="#">Jovaphile</a></li>
                <li><a href="#">Peloozoid</a></li>
            </ul>
        </li>
        <li class="parent">
            <a href="#">Services</a>
            <ul>
                <li class="parent">
                    <a href="#">Web Design</a>
                    <ul>
                        <li><a href="#">Responsive</a></li>
                        <li><a href="#">Templates</a></li>
                    </ul>
                </li>
                <li class="parent">
                    <a href="#">Web Development</a>
                    <ul>
                        <li><a href="#">HTML</a></li>
                        <li><a href="#">CSS</a></li>
                        <li><a href="#">jQuery</a></li>
                        <li><a href="#">Ruby on Rails</a></li>
                        <li><a href="#">PHP</a></li>
                    </ul>
                </li>
                <li class="parent">
                    <a href="#">Mobile Applications</a>
                    <ul>
                        <li><a href="#">Android Devices</a></li>
                        <li><a href="#">Apple Devices</a></li>
                        <li><a href="#">Windows Devices</a></li>
                    </ul>
                </li>
                <li class="parent">
                    <a href="#">Analytics</a>
                    <ul>
                        <li><a href="#">Google Analytics</a></li>
                        <li><a href="#">Mint</a></li>
                        <li><a href="#">Omniture</a></li>
                        <li><a href="#">Piwik</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li class="parent">
            <a href="#">About Us</a>
            <ul>
                <li><a href="#">Our Company</a></li>
                <li><a href="#">Meet The Team</a></li>
                <li><a href="#">Office Life</a></li>
                <li><a href="#">Fun Facts</a></li>
                <li><a href="#">Testimonials</a></li>
            </ul>
        </li>
        <li><a href="#">Contact</a></li>
    </ul>
</div>


<script>

$(document).ready(function () {
    // append plus symbol to every list item that has children
    $('#mobile-nav .parent').append('<span class="open-menu fa fa-plus"></span>');
    
    // fix non-scrolling overflow issue on mobile devices
    $('#mobile-nav > ul').wrap('<div class="overflow"></div>');
    $(window).on('load resize', function () {
        var vph = $(window).height() - 57; // 57px - height of #mobile-nav
        $('.overflow').css('max-height', vph);
    });
    
    // global variables
    var menu = $('.overflow > ul');
    var bg = $('html, body');
    
    // toggle background scrolling
    function bgScrolling() {
        // if menu has toggled class... *
        if (menu.hasClass('open')) {
            // * disable background scrolling
            bg.css({
                'overflow-y': 'hidden',
                'height': 'auto'
            });
        // if menu does not have toggled class... *
        } else {
            // * enable background scrolling
            bg.css({
                'overflow-y': 'visible',
                'height': '100%'
            });
        }
    }
    
    // menu button click events
    $('.menu-button').on('click', function (e) {
        e.preventDefault();
        // activate toggles
        menu.slideToggle(250);
        menu.toggleClass('open');
        $(this).children().toggleClass('fa-reorder fa-remove');
        bgScrolling();
    });
    
    // list item click events
    $('.open-menu').on('click', function (e) {
        e.preventDefault();
        $(this).prev('ul').slideToggle(250);
        $(this).toggleClass('rotate');
    });
});

</script>