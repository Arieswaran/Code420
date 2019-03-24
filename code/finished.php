<?php
session_start();
if($_FILES['fileupload']['error']==0)
{
	$file_name=$_FILES['fileupload']['name'];
	$file_tmp=$_FILES['fileupload']['tmp_name'];
	move_uploaded_file($file_tmp,'images/'.$file_name);
	$photo='images/'.$file_name;
}

$host='localhost';
$user='arieswaran';
$pwd='aj';
$db='code420';
$table='users';
$conn=mysqli_connect($host,$user,$pwd);
if(!$conn)
{
	die("Connection failed: ".mysqli_connect_error());
}
mysqli_query($conn,'use '.$db);
$email=$_SESSION['email'];
$query='select today_activity,activity from '.$table.' WHERE email="'.$email.'";';
$res=mysqli_query($conn,$query);
$acti=array('running','skipping','drinking','push_up','throw');
$row=mysqli_fetch_array($res);
$a=$row['today_activity'];
//print_r($a."<br>");
$b=$row['activity'];
//print
$arn=explode(" ",$b);
for ($x = 0; $x <= 4; $x++) {
if($acti[$x]==$a)
{
	print_r($x);
	$arn[$x]=1;
	break;
}
}
$arn1=implode(" ",$arn);
$q1="UPDATE users SET activity='".$arn1."' WHERE email='".$email."';";
mysqli_query($conn,$q1) or die("Error in query".mysqli_error($conn));

$q1="SELECT * FROM users WHERE email='".$email."';";
$res=mysqli_query($conn,$q1) or die("Error in select".mysqli_error($conn));
$row=mysqli_fetch_array($res);
$score=$row["score"];
$week=$row["week"];
$month=$row["month"];
$stage=$row["stage"];
$score=$score+$stage;
$week=$week+$stage;
$month=$month+$stage;

$q1="update users SET score=".$score.",week=".$week.",month=".$month." where email='".$email."';";
mysqli_query($conn,$q1) or die("Error in query".mysqli_error($conn));
$todaydate=date("Y-m-d");

$q2="select * from verification where email='".$email."'AND date='".$todaydate."';";
//if(!mysqli_query($conn,$q2)){
$q1="insert into verification values('".$email."','".$row["today_activity"]."','".$todaydate."','".$photo."')";
mysqli_query($conn,$q1) or die("Error in query".mysqli_error($conn));
//}

$q2="select * from user_stories where email='".$email."'AND date='".$todaydate."';";
//if(!mysqli_query($conn,$q2)){
$q1="insert into user_stories values('".$email."','".$todaydate."','".$photo."',0,0,'');";
mysqli_query($conn,$q1) or die("Error in query".mysqli_error($conn));
//}

mysqli_commit($conn) or die("Error in commit".mysqli_error($conn));
mysqli_close($conn);
//print_r($arn1);
header("location:main.php");
?>
	
