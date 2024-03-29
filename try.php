<?php
  include_once('cntdb.php');




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
  <meta charset="UTF-8">
 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>

<body>

    <!--Navigation Bar-->
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
                    <li><a href = "signupform.php">Create lecturer's account</a></li>
                    
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
        
        <table class="table table-striped">
    <thead>
        <tr>
        <th>Id</th>
            <th>User Name</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>Status</th>
            
            <th>Action</th>
        </tr>
    </thead>
    <tbody><?php
        include_once('cntdb.php');
        $query = $sqlLink->query("SELECT * FROM user");
while($row = $query->fetch_array()){
    echo '<tr>
    <td scope="row">'.$row["id"].'</td>
    <td>'.$row["username"].'</td>
    <td> '.$row["fname"].'</td>
    <td> '.$row["lname"].'</td>
    <td> '.$row["email"].'</td>
    <td> '.$row["mobile"].'</td>
    <td> '.$row["status"].'</td>
    <td>' ?>
<button type="button" class="btn btn-success valider" data-custom-id="'.$row['id'].'" >Verify</button> /<button type="button" class="btn btn-danger rejeter">Delete</button>
<?php 
      echo '</td>
      <td>'
    ?>
<input type="hidden" class="the_id" value='<?php echo $row['id']; ?>'>

<?php echo '</td>
 </tr>';

}



        ?>

    </tbody>
</table>

        </div>
    </header>

    
    

    <!--Javascript Files-->
    <script src="dist/js/jquery.min.js"></script>
	<script src="dist/js/bootstrap.min.js"></script>
</body>
</html>