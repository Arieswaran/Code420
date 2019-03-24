<html>
	
<head>
<title>Fitness Freak Certificate</title>
</head>

<body>
	
<p>
<strong>Congractulations! You have earned the fitness freak Certificate</strong>
<p>
	
	<?php
// this starts the session
session_start();

// little script to pull the current date/time; can also be done via JavaScript or 100 other ways
include($_SERVER['DOCUMENT_ROOT']."/support/gabe/simple-php-form/includes/now.fn");
include();

// this pulls input variables from the session form 
$_SESSION['fullname']		= $_POST['fullname'];
$_SESSION['title'] 			= $_POST['title'];
$_SESSION['company'] 		= $_POST['company'];
$_SESSION['time'] 			= $_POST['time'];

?>


<center>
<table border="0" cellspacing="10" cellpadding="2" background="images/certificate_border.png">
	<tr>
		<td align="center">
		<img src="images/spacer.gif" width="415" height="3"><br>
		<h1><?php echo  $_SESSION['company']; ?></h1>
		
		In recognition of successfully completing the course:<br>
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

<p>
(NOTE: If you plugged in really long data, you might see the certificate border repeat... but if you have a good designer, you can work around that. :)
<p>

<p>
<a href="web-object-php-certificate.zip">Download source PHP files</a>

</body>

</html>
