<?php
session_start();
include("database.php"); 
$mai=$_SESSION['e1'];
$q="SELECT likes FROM user_stories WHERE email='".$mai."';" ;
$res=mysqli_query($cn,$q);
$row=mysqli_fetch_array($res);
$lik=$row['likes'];
$lik=$lik+1;
$q1="UPDATE user_stories SET like='".$lik." ';";
mysqli_query($cn,$q1);
