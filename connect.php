<?php
//$_SESSION["con"]= mysqli_connect('localhost', 'root', '','dbms');
$con= mysqli_connect('localhost', 'root', '','dbms');
if (!$con) {
    die('Could not connect: ' . mysqli_error());
}
//echo 'Connected successfully';
?>
