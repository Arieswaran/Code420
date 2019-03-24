<?php
session_start();
include("database.php"); 
$e=$_SESSION['e'];
$d=$_SESSION['d'];
$q="DELETE FROM verification WHERE email='".$e."' AND date='".$d."';";
$res=mysqli_query($cn,$q);
$q1="SELECT * FROM users WHERE email='".$e."';" ;
$res1=mysqli_query($cn,$q1);
$row=mysqli_fetch_array($res1);
$week=$row['week'];
$month=$row['month'];
$score=$row['score'];
$stage=$row['stage'];
$week=$week-$stage;
$month=$month-$stage;
$score=$score-$stage;
$q2="UPDATE users SET score=$score ,week=$week ,month=$month WHERE email='".$e."';" ;
mysqli_query($cn,$q2) or die("Error in query1".mysqli_error());
header("Location:main.php");

?>
