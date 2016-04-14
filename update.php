<?php
include ('connect.php');
session_start();
$session=$_SESSION["id"];
$textarea=$_POST["diary"];
$query="update diary set diarydata='$textarea' where sessionid='$session'";
mysqli_query($link,$query);
?>