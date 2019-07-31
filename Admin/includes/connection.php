<?php
//$connect = mysqli_connect('localhost','root','','hd');

$servername = "localhost";
$username = "root";
$password = "";
$db = "hd";

//create connection
$connect = new mysqli('localhost','root','','hd');


//check connection
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}

?>
