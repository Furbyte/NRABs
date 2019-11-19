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
<html>
<head>
  <title>Template</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="dist/css/bootstrap.min.css">
</head>

<body>

    <!--Navigation Bar-->
    <nav class = "navbar navbar-default">
        <div class = "container-fluid">
            <div class = "navbar-header">
                <a class = "navbar-brand" href="index.php">RmBkingSys</a>
            </div>
            <div>
                <ul class = "nav navbar-nav">
                    <li><a href = "index.php">Home</a></li>
                    
                    <li><a href = "reservation_form1.php">Reservation</a></li>
                    <li><a href = "cc/index.php">My Bookings</a></li>
                    <li><a href = "My_Account/bkinghtry.php">Leave Feedback</a></li>
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

        <!--div class = "container">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>#</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>#</td>
                </tr>
            </tbody>
        </table>
    </div-->

    <div class = "container">
        <form role = "form" name = "Form1"  onsubmit="return validateForm()" method = "post"  action = 'reservation_form1.php' >
            <div class = "form-group">
                <label>Room Type:</label>
                <select name="room_type" class = "form-control">
                   <option>Classroom</option>
                </select>
            </div>
            <div class = "form-group">
                <label>Username: <?php  echo $_SESSION['username'];?></label>
              
            </div>
           
            <div class = "form-group">
                <label>Projector:</label>
                <input class="custom-control-input" name="proj" type="checkbox" value="yes"></div>
                <div class = "form-group">
                <label>          Mic:</label>
                <input name="mic" type="checkbox" value="yes">
</div>            
<div class = "form-group">
                <label>          Echo 360:</label>
                <input  name="echo" type="checkbox" value="yes"></div>
                <div class = "form-group">
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
                <label>          For Whole Semester (12 Weeks):</label>
                <input  name="semester" type="checkbox" value="yes"></div>
                <div class = "form-group">
                </div>
            <input type="submit" name="submit" class = "btn btn-default" value="Proceed"/>
            <a href="index.php" class = "btn btn-default" >Cancel</a>
        </form>
    </div>
    
    <!--JavaScript Files-->
    <script src="dist/js/jquery.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
</body>
</html>