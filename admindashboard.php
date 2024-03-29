<?php
        include_once('cntdb.php');
        $result = $sqlLink->query("SELECT * FROM booking");  
         $lec = $sqlLink->query("SELECT * FROM user");  
        $id=0;  
        if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
    	$data[$id]['username']=$row['username'];
          $data[$id]['roomid']=$row['roomid'];
          $data[$id]['fdate']=$row['fdate'];
          $data[$id]['todate']=$row['todate'];
          $data[$id]['message']=$row['message'];
           $data[$id]['bookingid']=$row['bookingid'];
           $id++;
    }}
    $count=0;
    if ($result->num_rows > 0) {
        while($row = $lec->fetch_assoc()) {
    	$count++;
    }
} else {
    echo "0 results";
}

?>


       
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Admin- Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="images/icon/logo.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            
                        </li>
                        <li>
                            <a href="userlistadmin.php">
                                <i class="fas fa-table"></i>Users List</a>
                        </li>
                        <li>
                            <a href="feedbackadmin.php">
                                <i class="far fa-check-square"></i>Feedback</a>
                        </li>
                        <li>
                            <a href="viewbookings.php">
                                <i class="fas fa-calendar-alt"></i>Bookings</a>
                        </li>
                        <li>
                            <a href="addlecadmin.php">
                                <i class="fas fa-calendar-alt"></i>Add Lecturer</a>
                        </li>
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>UI Elements</a>
                           
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="images/icon/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                     <li class="has-sub">
                            <a class="js-arrow" href="admindashboard.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="userlistadmin.php">
                               <i class="fas fa-list"></i>Users List</a>
                        </li>
                        <li>
                            <a href="feedbackadmin.php">
                               <i class="far fa-comments"></i>Feedback</a>
                        </li>
                        <li>
                            <a href="viewbookings.php">
                                <i class="fas fa-calendar-alt"></i>Bookings</a>
                        </li>
                        <li>
                            <a href="addlecadmin.php">
                               <i class="fas fa-user-plus"></i>Add Lecturer</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                 <p>Admin - View Statictics & Bookings</p>
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                   
                                   
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-notifications"></i>
                                        <span class="quantity">14</span>
                                        <div class="notifi-dropdown js-dropdown">
                                            <div class="notifi__title">
                                                <p>You have 3 Feedbacks From Users</p>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c1 img-cir img-40">
                                                    <i class="zmdi zmdi-email-open"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a new Feedback</p>
                                                    <span class="date">From a Lecturer</span>
                                                </div>
                                            </div>
                                            
                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="images/icon/avatar-06.jpg" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">Admin</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="images/icon/avatar-06.jpg" alt="User Admin" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">admin</a>
                                                    </h5>
                                                    <span class="email">admin@website.com</span>
                                                </div>
                                            </div>
                                            <form action="adminlogin.php" method="post">
                                            <div class="account-dropdown__footer">
                                                <a href="#">
                                                    <a href="adminlogin.php"><i class="zmdi zmdi-power" name="logout"></i>Logout</a>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">overview</h2>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="row m-t-25">
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                            <div class="text">
                                                <h2><?php echo $count;?></h2>
                                                <span>Total Lecturers</span>
                                            </div>
                                        </div>
                                         <br>
                                    </div>
                                </div>
                            </div>
                           
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c3">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-calendar-note"></i>
                                            </div>
                                            <div class="text">
                                                <h2><?php echo count($data); ?></h2>
                                                <span>Total Bookings</span>
                                            </div>
                                        </div>
                                        <br>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                        
                        <div class="row">
                            <div class="col-lg-12">
                                <h2 class="title-1 m-b-25">Recent Bookings</h2>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>Username</th>
                                                <th>Room Id</th>
                                                <th>From Date</th>
                                                <th class="text-right">To Date</th>
                                                <th >View</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                           
                                           
                                            
                                           
                                            <?php
                                             foreach($data as $arr){
                                    echo '<tr><td>'.$arr['username'].'</td>
                                          <td>'.$arr['roomid'].'</td>
                                          <td class="text-right">'.$arr['fdate'].'</td>
                                          <td class="text-right">'.$arr['todate'].'</td>
                                          <td  > <a href=viewabookingadmin.php?id='.$arr['bookingid'].'><button type="button" class="btn btn-secondary btn-sm">
                                      <i class="fas fa-eye"></i>&nbsp; View Booking</button></a></td>
                                     </tr>';
}
                                            ?>
                                               
                                               
                                           
                                        
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            
                        </div>
                       
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p> Developed with ❤️ & ☕.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
