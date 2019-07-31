<?php
include("includes/connection.php");
$rno =$_GET['rno'];
if(mysqli_query($connect, "update room set status ='Available' where rno=$rno"))
{
    header("Location: room_detail.php");
}
