<?php 
session_start();
echo $_SESSION['username'];

$username=$_SESSION['username'];
echo $username;
  

         



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<header>
    <h3>Verified users</h3>
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
        $query = $sqlLink->query("SELECT * FROM user where username='$username'");
while($row = $query->fetch_array()){
    
    echo "<tr>" .
        '<form >'.
       
        "<td>" . $row["email"] . "</td>" .               
        "<td>" . $row["mobile"] . "</td>" .
        "<td>" . $row["status"] . "</td>" .
/*"<a href='list.php?delete=<?php echo $row['id']; ?>' class='btn btn-danger'>"delete"</a>".*/
        
        "</form>".
        "</tr>";    

}



        ?>

    </tbody>
</table>

        </div>
    </header>


        </div>
    </header>
</body>
</html>