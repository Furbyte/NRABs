<?php

//Create Connnection
$sqlLink = mysqli_connect('localhost', 'root', '', 'ashirali');

//If Error Connecting
if(!$sqlLink) {
    die('<center><br><h3>Error connecting to servers Database.');
}

?>