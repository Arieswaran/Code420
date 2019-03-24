<!DOCTYPE html>
<html>
<head>
<title>today's activity</title>
<link rel='stylesheet' href='https://www.w3schools.com/w3css/4/w3.css'>
</head>
<body class="w3-red">

<?php

session_start();
include("header.php");
echo "<link rel='stylesheet' href='css.css'>";

$db = mysqli_connect('localhost','arieswaran','aj','code420');
if(!$db)
{
	echo("Connection failed: " . mysqli_connect_error());
}
else
{
	$email=$_SESSION['email'];
	$query="SELECT * FROM users WHERE email='".$email."';";
	$res=mysqli_query($db,$query) or die("Error in query");
	//print_r($res);
	$row=mysqli_fetch_array($res) or die ("Error in fetch".mysqli_error($db));
	//print_r($row);
	$act=$row['today_activity'];
	//print_r($act);

mysqli_commit($db);
mysqli_close($db);
if($act=='running')
{
	$def='Today you need to run 5 kms .';
	$pic='running.gif';
}
elseif($act=='skipping')
{
	$def='you have to do 20 skipping today.';
	$pic='skip.jpg';
}
elseif($act=='drinking')
{
	$def='you need to do drink 1 liter of water today.';
	$pic='water.jpg';
	
}
elseif($act=='push_up')
{
	$def='you have to complete 10 push-ups today.';
	$pic='push up.gif';
}
elseif($act=='throw')
{
	$def='you have to throw a paper ball into a bucket from 5 meter away';
	$pic='throw.gif';
}
}
?>
<h1 style="text-align:center;color:black" class="">Today's Activity</h1>
<?php
echo "<br><center><img src='".$pic."'></center><br>";
echo "<br><center>".$def."</center><br>";
?>
<center>
<form action="finished.php" method="post" enctype="multipart/form-data">
<input type="file" name="fileupload" id="fileupload" value="fileupload">
<br><br>
<input type="submit" value="Submit" class="w3-button w3-khaki">
</form>
</center>
</body>
</html>
