<html>
	
<head>
<title>Fitness Freak Certificate</title>


</head>

<body style="background-color:khaki">
	<br><br><br>
<p>
	<center>
<strong>Your E-certificate:</strong>
</center>
<p>
	
	<?php
// this starts the session
session_start();

// little script to pull the current date/time; can also be done via JavaScript or 100 other ways
include($_SERVER['DOCUMENT_ROOT']."/support/gabe/simple-php-form/includes/now.fn");
include("database.php");

$email=$_SESSION['email'];
$q="select name from users where email='".$email."';";
$res=mysqli_query($cn,$q);
$row=mysqli_fetch_array($res);

// this pulls input variables from the session form 
$_SESSION['fullname']		= $row['name'];
//$_SESSION['title'] 			= $_POST['title'];
$_SESSION['company'] 		= "Code420";
//$_SESSION['time'] 			= $_POST['time'];
$now=date("d-m-y");
?>


<center>
<table border="0" cellspacing="10" cellpadding="2" background="images/certificate_border.png">
	<tr>
		<td align="center">
		<img src="images/spacer.gif" width="415" height="3"><br>
		<h1><?php echo  $_SESSION['company']; ?></h1>
		
		In recognition of successfully <br>completing the challenge :<br>
		<strong>Fitness Freak</strong>
		
		<h2>
			<?php echo  $_SESSION['fullname']; ?><br>
			<?php// echo  $_SESSION['title']; ?>	
		</h2>
		
		<i>is hereby awarded this</i>
		
		<h3>Certificate of Completion</h3>
						
		<i>Given this day, <?php echo  $now; ?><br>
		<img src="images/spacer.gif" width="415" height="20">
		</td>
	</tr>
</table>
</center>


</body>

</html>
