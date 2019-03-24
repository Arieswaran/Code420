<html>
	
<head>
<title>Gabe's Simple PHP Session Variable Form Example - Page 2 of 3</title>
</head>

<body>
	
<p>
<strong>Gabe's Simple PHP Session Variable Form Example - Results</strong>
<p>
	
	<?php
// this starts the session
session_start();

// little script to pull the current date/time; can also be done via JavaScript or 100 other ways
include($_SERVER['DOCUMENT_ROOT']."/support/gabe/simple-php-form/includes/now.fn");


// this pulls input variables from the session form 
$_SESSION['fullname']		= $_POST['fullname'];
$_SESSION['title'] 			= $_POST['title'];
$_SESSION['company'] 		= $_POST['company'];
$_SESSION['time'] 			= $_POST['time'];

?>

<p>
We can display a simple output of the input data, like here, or we can pull the data into something more certificate-like (see next page).

<form action="/e-certificate/certificate.php" name="certificateSubmit" method="POST">

<table border="0" cellspacing="10">
	<tr>
		<td>Date/Time: </td>
		<td><?php echo  $now; ?> Eastern Time</td>
	</tr>
	<tr>
		<td>Full Name: </td>
		<td><?php echo  $_SESSION['fullname']; ?></td>
	</tr>
	<tr>
		<td>Title:</td>
		<td><?php echo  $_SESSION['title']; ?></td>
	</tr>
	<tr>
		<td>Company:</td>
		<td><?php echo  $_SESSION['company']; ?></td>
	</tr>
	<tr>
		<td>Course:</td>
		<td>PHP Basics</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td colspan="2"><input type="Submit" name="submit" value="Generate Certificate &gt; &gt;"></td>
	</tr>
</table>

<!-- make sure we send our variables through this form page to the next one -->
<input type="hidden" name="fullname" value="<?php echo  $_SESSION['fullname']; ?>">
<input type="hidden" name="title" value="<?php echo  $_SESSION['title']; ?>">
<input type="hidden" name="company" value="<?php echo  $_SESSION['company']; ?>">

</form>


<p>
<a href="web-object-php-certificate.zip">Download source PHP files</a>

</body>

</html>
