<?php
error_reporting(0);
session_start();

require_once 'cnntdb.php';
connect();
$username=$_SESSION['username'];
$proj=$_POST['proj'];
$mic=$_POST['mic'];
$echo=$_POST['echo'];
$message=$_POST['message'];
$fdate=$_POST['f_date'];
$tdate=$_POST['t_date'];
$sems=$_POST['semester'];
$id=rand(10,99);
$n="Room-";
$roomid=$n.$id;
if($_POST['submit']){
    $sql = "INSERT INTO booking VALUES ('$username', '$proj', '$mic','$echo', '$message', '$fdate', '$tdate', '$sems','$roomid')";
    
    if (mysqli_query($conn, $sql)) {
        header("Location: $rootURL/index.php");
    } else {
            $check = 0;
        }
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
    <title>Dashboard</title>

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
                        <li class=" has-sub">
                            <a class="js-arrow" href="index.php">
                                <i class="fas fa-tachometer-alt"></i>Home</a>
                            
                        </li>
                        
                        <li class="active">
                            <a href="#">
                                <i class="fas fa-table"></i>Reservation</a>
                        </li>
                        
                        <li>
                            <a href="cc/index.php">
                                <i class="fas fa-calendar-alt"></i>My Bookings</a>
                        </li>
                        
                        <li class="has-sub">
                        <a class="js-arrow" href="my_account/bkinghtry.php">

                            
                                <i class="fas fa-copy"></i>Leave Feedback</a>
                            
                        </li>
                        <li >
                        <a class="js-arrow" href="profile.php">

                            
                                <i class="fas fa-copy"></i>Profile</a>
                            
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
                                
                            </form>
                            <div class="header-button">
                                
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"> <?php echo $_SESSION['username']; ?></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#"> <?php echo $_SESSION['username']; ?></a>
                                                    </h5>
                                                    
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                                
                                                
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="my_account/logout.php">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
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
                    <form role = "form" name = "Form1"  onsubmit="return validateForm()" method = "post"  action = 'reservation_form1.php' >
                    <div class = "form-group">
                <h4>Welcome &nbsp; <?php  echo $_SESSION['username'];?></h4>
              
            </div>
            <div class = "form-group">
                <label>Room Type:</label>
                <select name="room_type" class = "form-control">
                   <option>Classroom</option>
                </select>
            </div>
            
           
            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class=" form-control-label">Please Select:</label>
                                                </div>
                                                <div class="col col-md-9">
                                                    <div class="form-check-inline form-check">
                                                        <label for="inline-checkbox1" class="form-check-label ">
                                                            <input type="checkbox" id="inline-checkbox1" name="proj" value="yes" class="form-check-input">Projector &nbsp;&nbsp;&nbsp;
                                                        </label>
                                                        <label for="inline-checkbox2" class="form-check-label ">
                                                            <input type="checkbox" id="inline-checkbox2" name="echo" value="yes" class="form-check-input">Echo 360 &nbsp;&nbsp;&nbsp;
                                                        </label>
                                                        <label for="inline-checkbox3" class="form-check-label ">
                                                            <input type="checkbox" id="inline-checkbox3" name="mic" value="yes" class="form-check-input">Microphone &nbsp;&nbsp;&nbsp;
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
            
            <div class = "form-group">
                <label>Room Message:</label>
                <br>
                <input class = "form-control" name="message" type="text">
            </div>

           
            <div class = "form-group">
                <label>From Date:</label>
                <input type ="date" name = "f_date" placeholder="yyyy-mm-dd" class = "form-control" required/>
            </div>
            <div class = "form-group">
                <label>To Date:</label>
                <input type ="date" name = "t_date" placeholder="yyyy-mm-dd" class = "form-control" required/>
            </div>
            <div class = "form-group">
                <label>          For Whole Semester (12 Weeks): &nbsp;&nbsp;</label>
                <input  name="semester" type="checkbox" value="yes"></div>
                <div class = "form-group">
                </div>
            <input type="submit" name="submit" class = "btn btn-success btn-sm" value="Proceed"/>
            <a href="index.php" class = "btn btn-danger btn-sm" >Cancel</a>
        </form>



                        <div class="row">
                            <div class="col-md-12">
                            
                            </div>
                        </div>
                        <div class="row m-t-25">
                            <div class="col-sm-6 col-lg-3">
                                
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                
                            </div>
                            <div class="col-sm-6 col-lg-3">
                               
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                               
                            </div>
                            <div class="col-lg-6">
                                
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-9">
                                
                            </div>
                            <div class="col-lg-3">
                                
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                            </div> </div>     
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