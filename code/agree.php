<?php
session_start();
include("database.php"); 
$e=$_SESSION['e'];
$d=$_SESSION['d'];
$q="DELETE FROM verification WHERE email='".$e."' AND date='".$d."';";
$res=mysqli_query($cn,$q);
header("Location:main.php");
?>
