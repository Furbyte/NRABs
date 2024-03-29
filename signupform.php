<?php

$check = 1;

if ( isset($_COOKIE['user']) ) {
    require_once("url.php");
    header("Location: $rootURL/index.php");
}

if ( isset($_POST['submit']) ) {

	if ( ($_POST['password'] == $_POST['confirm_password'])  ) {

	    require_once("cnntdb.php");
	    require_once("url.php");

	    connect();

	    $user_name =$_POST['user_name'];
	    $f_name =$_POST['f_name'];
	    $l_name =$_POST['l_name'];
	    $org =$_POST['org'];
	    $email =$_POST['email'];
        $mob_num =$_POST['mob_num'];
        $status="unverified";
        session_start();
        $_SESSION['email']=$email;

	    # Password encryption for security
	    $password = md5($_POST['password']);

	    $sql = "INSERT INTO user (username,fname,lname,org,email,mobile,password,status)  VALUES ('$user_name', '$f_name', '$l_name', '$org', '$email', $mob_num, '$password', '$status')";
    
	    if (mysqli_query($conn, $sql)) {
           
	 	   header("Location: $rootURL/backup/loginform.php");
	    } else {
	            $check = 0;
	        }
    }
    else $check = 2;
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
    <title>Register</title>

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
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <h3>REGISTER</h3>
                            </a>
                        </div>
                        <div class="login-form">
                            <form role = "form" name = "Sign Up Form"  onsubmit="return validateForm()" method = "post"  action = 'signupform.php'>
                                <div class="form-group">
                                    
                                    <input class="au-input " type="text" name = "user_name" placeholder="Enter Your Username">
                                    <input class="au-input" type="email" name="email" placeholder="Email">
                                    
                                </div>
                                <div class="form-group">
                                <input class="au-input" type="password" name="password" placeholder="Password">
                                    <input class="au-input" type="passwword" name="confirm_password" placeholder="Confirm Password">
                                    
                                   
                                </div>
                                <div class="form-group">
                                <input class="au-input" type="text" name = "f_name" placeholder="First Name">
                                    <input class="au-input" type="text" name = "l_name" placeholder="Last Name">
                                    
                                
                                    
                                   
                                </div>
                                <div class="form-group">
                                    
                                <input class="au-input" type="text" name = "org" placeholder="Organization">
                                
                                    <input class="au-input" type="text" name="mob_num" placeholder="Phone">
                                </div>
                                <input type="submit" class = "au-btn au-btn--block au-btn--green m-b-20" name="submit" value="Register"/>
                                
                                
                            </form>
                            <div class="register-link">
                                <p>
                                    Already have account?
                                    <a href="#">Sign In</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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