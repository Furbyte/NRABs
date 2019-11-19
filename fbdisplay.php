<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Template</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="dist/css/RmBkingSys.css">
  <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"></head>
    
    <title>Document</title>
</head>
<body>
<nav class = "navbar navbar-default">
        <div class = "container-fluid">
            <div class = "navbar-header">
                <a class = "navbar-brand" href="index.php">RmBkingSys</a>
            </div>
            <div>
                <ul class = "nav navbar-nav">
                    <li class = "active"><a href = "#">Home</a></li>
                    <li><a href = "list.php">User's List</a></li>
                    <li><a href = "fbdisplay.php">Feedback by users</a></li>
                    <li><a href = "cc/admincal.php">Bookings</a></li>
                    <li><a href = "signupbyadmin.php">Create lecturer's account</a></li>
                    
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
<table class="table table-striped">
    <thead>
        <tr>
            <th>Feedback</th>
            <th>By</th>
            <th>Room</th>
            
        </tr>
    </thead>
    <tbody><?php
        include_once('cntdb.php');
        $query = $sqlLink->query("SELECT * FROM feedback");
while($row = $query->fetch_array()){
    echo "<tr>";
    echo "<td>".$row['feedback']."</td>";
    echo "<td>".$row['username']."</td>";
    echo "<td>".$row['roomid']."</td>";
    
    echo('<form method="post" action="#">');
    echo "<td><input type='submit' class='btn btn-sm btn-success' value='Reply' ></td>";
    
    echo "</tr>";
    

    echo('</form>');
    
}

        ?>

    </tbody>
</table>
</div>
</body>
</html>