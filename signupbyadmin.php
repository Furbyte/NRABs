<?php

$check = 1;

if ( isset($_COOKIE['user']) ) {
    require_once("url.php");
    
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

	    # Password encryption for security
	    $password = md5($_POST['password']);

	    $sql = "INSERT INTO user (username,fname,lname,org,email,mobile,password,status)  VALUES ('$user_name', '$f_name', '$l_name', '$org', '$email', $mob_num, '$password', '$status')";
    
	    if (mysqli_query($conn, $sql)) {
	 	   header("Location: $rootURL/index.php");
	    } else {
	            $check = 0;
	        }
    }
    else $check = 2;
}
?>


<!DOCTYPE html>
<html>
<head>
  <title>Template</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="dist/css/RmBkingSys.css">
  <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"></head>

<body>

    <!--Navigation Bar-->
    <nav class = "navbar navbar-default">
        <div class = "container-fluid">
            <div class = "navbar-header">
                <a class = "navbar-brand" href="index.php">RmBkingSys</a>
            </div>
            <div>
                <ul class = "nav navbar-nav">
                    <li ><a href = "admin.php">Home</a></li>
                    <li><a href = "list.php">User's List</a></li>
                    <li><a href = "fbdisplay.php">Feedback by users</a></li>
                    <li><a href = "cc/admincal.php">Bookings</a></li>
                    <li class = "active"><a href = "signupform.php">Create lecturer's account</a></li>
                    
                </ul>
                <ul class = "nav navbar-nav navbar-right">
                    <?php
                        if (!isset( $_COOKIE['root_user'] )) {
                            echo "<li>"
                                ."<a href = \"root_user/rtloginform.php\">Admin Login</a></li>";
                        }
                        else echo "<li class=\"dropdown\">"
                                    ."<a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Admin <span class=\"caret\"></span></a>"
                                    ."<ul class=\"dropdown-menu\">"
                                            ."<li><a href=\"root_user/adrm.php\">Add Room</a></li>"
                                            ."<li><a href=\"root_user/delrm.php\">Delete Room</a></li>"
                                            ."<li><a href=\"root_user/rmresvion.php\">Cancel Reservation</a></li>"
                                            ."<li><a href = \"root_user/rmuser.php\">Remove User</a></li>"
                                            ."<li><a href=\"root_user/rtlogout.php\">Log Out</a></li>"
                                        ."</ul>"
                                    ."</li>";
                    ?>

                    <?php
                        if (!isset( $_COOKIE['user'] )) {
                            echo "<li>"
                                ."<a href = \"loginform.php\">Login</a></li>";
                        }
                        else echo "<li class=\"dropdown\">"
                                    ."<a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">My Account <span class=\"caret\"></span></a>"
                                    ."<ul class=\"dropdown-menu\">"
                                            ."<li><a href=\"My_Account/shwple.php\">Show Profile</a></li>"
                                            ."<li><a href=\"My_Account/edit.php\">Edit</a></li>"
                                            ."<li><a href=\"My_Account/bkinghtry.php\">Booking History</a></li>"
                                            ."<li><a href=\"My_Account/logout.php\">Log Out</a></li>"
                                        ."</ul>"
                                    ."</li>";
                    ?>
                </ul>
            </div>
        </div>
    </nav>

    <!--Page Content-->

    <!-- Header -->
    <header>
        <div class="container">
        <h2>Create Lecturer</h2>
        <form role = "form" name = "Sign Up Form"  onsubmit="return validateForm()" method = "post"  action = 'signupform.php' >
                <div class = "form-group">
                    <input type = "text" name = "user_name" class = "form-control" placeholder = "User Name" maxlength = 50 required/>
                </div>
                <div class = "form-group">
                    <input type="password" name="password" class = "form-control" placeholder = "Password" required/>
                </div>
                <div class = "form-group">
                    <input type="password" name="confirm_password" class = "form-control" placeholder = "Confirm Password" required/>
                </div>
                <div class = "form-group row">
                    <div class = "col-sm-6">
                        <input type = "text" name = "f_name" maxlength = 50 class = "form-control" placeholder = "First Name" />
                    </div>
                    <div class = "col-sm-6">
                        <input type = "text" name = "l_name" maxlength = 50 class = "form-control" placeholder = "Last Name" />
                    </div>
                </div>
                <div class = "form-group">
                    <input type = "text" name = "org" class = "form-control" placeholder = "Organization" maxlength = 100 />
                </div>
                <div class = "form-group">
                    <input type = "email" name = "email" class = "form-control" placeholder = "Email" required/>
                </div>
                <div class = "form-group">
                    <input type="text" name="mob_num" class = "form-control" placeholder = "Mobile Number" required/>
                </div>
                <div>
                    <input type="submit" class = "btn btn-default" name="submit" value="Submit"/>
                    <a href = "index.php" class = "btn btn-default">Cancel</a>
                </div>
            </form>
        </div>
        <?php
        if (!$check) {
            echo "<div class = \"container\"><div class=\"alert alert-danger\" role=\"alert\">Error: <br>".mysqli_error($conn)."</div></div>";
        }
        elseif ($check == 2) {
            echo "<div class = \"container\"><div class=\"alert alert-danger\" role=\"alert\">Doesn't Match</div></div>";
        }
        ?>
        </div>
    </header>

    

    <!--Javascript Files-->
    <script src="dist/js/jquery.min.js"></script>
	<script src="dist/js/bootstrap.min.js"></script>
</body>
</html>