<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<head lang="en">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Home</title>

    <script src="js/jquery-1.11.2.min.js" type="text/javascript"></script>
    <!--[if lt IE 9]><script src="js/selectivizr-1.0.2.min.js"></script><![endif]-->
    <script src="js/modernizr-2.8.2.min.js"></script>
    <script src="js/respond.js-1.4.2.min.js"></script>
    <script src="js/admin.js"></script>

    <link rel="stylesheet" href="css/bootstrap.min.admin.css">
    <link rel="stylesheet" href="fonts/font-awesome-4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<!--[if lt IE 9]>
<div class="browsehappy">
    <p>
        You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" target="_blank">upgrade your browser</a> to improve your experience.
    </p>
</div>
<![endif]-->

<!--Header-->
<header>
    <div id="smlogo">
        <img src="img/logo_admin.png" width="40px">
    </div>
    <div id="secondnav">
        <ul>
        <li><a href="#">Visit public website</a></li>
        <li><a href="#"><i class="fa fa-sign-out fa-lg"></i><span>&nbspLogout</span></a></li>
        </ul>
    </div>
</header>
<!--Spacer for header-->
<div id="spacer"></div>
<!--End header-->
<!--Navigation-->
<div id="nav">
    <span class="nav-btn "><i class="fa fa-navicon fa-lg"></i></span>
    <ul>
        <li><a href="#"><i class="fa fa-home fa-lg"></i> <span>Dashboard</span></a></li>
        <li><a href="#"><i class="fa fa-calendar fa-lg"></i> <span>Appointments</span></a></li>
        <li><a href="#"><i class="fa fa-institution fa-lg"></i> <span>About</span></a></li>
        <li><a href="#"><i class="fa fa-user fa-lg"></i> <span>Website Users</span></a></li>
        <li><a href="#"><i class="fa fa-comment fa-lg"></i> <span>Reviews</span></a></li>
        <li><a href="#"><i class="fa fa-graduation-cap fa-lg"></i> <span>Contests</span></a></li>
        <li><a href="#"><i class="fa fa-newspaper-o fa-lg"></i> <span>Blog</span></a></li>
        <li><a href="#"><i class="fa fa-comments-o fa-lg"></i> <span>FAQ</span></a></li>
        <li><a href="#"><i class="fa fa-comment-o fa-lg"></i> <span>Testimonials</span></a></li>
        <li><a href="#"><i class="fa fa-envelope-o fa-lg"></i> <span>Contact</span></a></li>
        <li><a href="#"><i class="fa fa-mail-forward fa-lg"></i> <span>Subscription</span></a></li>
        <li><a href="#"><i class="fa fa-file-text-o fa-lg"></i> <span>Pages</span></a></li>
        <li><a href="#"><i class="fa fa-user-secret fa-lg"></i> <span>Admin Users</span></a></li>
        <li><a href="#"><i class="fa fa-wrench fa-lg"></i> <span>Settings</span></a></li>
    </ul>
<!-- end navigation-->
</div>

<div id="main">

<!--    Some content (you can paste your include files here)-->
<article class="placeholder">
    <h4>Content Test</h4>
    <input type="submit" class="btn btn-default btn-sm" value="+ Add user"/>
</article>

    <table class="table table-responsive">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Password</th>
            <th>Roles</th>
            <th>Actions</th>
        </tr>
        <tr>
            <td>1</td>
            <td>Jervis</td>
            <td>*****</td>
            <td>Admin, Staff</td>
            <td></td>
        </tr>
        <tr>
            <td>2</td>
            <td>George</td>
            <td>*****</td>
            <td>Admin, Staff</td>
            <td></td>
        </tr>
        <tr>
            <td>3</td>
            <td>Jasmin</td>
            <td>*****</td>
            <td>Doctor</td>
            <td></td>
        </tr>
        <tr>
            <td>4</td>
            <td>Ivan</td>
            <td>*****</td>
            <td>Nurse</td>
            <td></td>
        </tr>
        <tr>
            <td>5</td>
            <td>Nick</td>
            <td>*****</td>
            <td>Staff</td>
            <td></td>
        </tr>
        <tr>
            <td>6</td>
            <td>Pedro</td>
            <td>*****</td>
            <td>Staff</td>
            <td></td>
        </tr>
        <tr>
            <td>7</td>
            <td>Mohammed</td>
            <td>*****</td>
            <td>Doctor</td>
            <td></td>
        </tr>
        <tr>
            <td>8</td>
            <td>Harvy</td>
            <td>*****</td>
            <td>Physio</td>
            <td></td>
        </tr>
    </table>

<!--    end content-->
</div>

</body>
</html>

