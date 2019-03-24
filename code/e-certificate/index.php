<html>
	
<head>
<title>Gabe's Simple PHP Session Variable Form Example - Page 1 of 3</title>
</head>

<body>

<?php
// this starts the session
session_start();

// little script to pull the current date/time; can also be done via JavaScript or 100 other ways
include($_SERVER['DOCUMENT_ROOT']."/support/gabe/simple-php-form/includes/now.fn");

// this sets variables in the session
$_SESSION['time']=$now;
?>

<p>
<strong>Gabe's Simple PHP Session Variable Form Example - Input</strong>
<p>
Tell me who you are so we can create a certificate of completion for you (NO data are stored anywhere in this example). 

<form action="/e-certificate/index2.php" name="firstSubmit" method="POST">

<table border="0" cellspacing="10">
	<tr>
		<td>Date/Time: </td>
		<td><?php echo $now; ?> Eastern Time</td>
	</tr>
	<tr>
		<td>Full Name: </td>
		<td><input name="fullname" id="name" type="text" size="20" maxlength="80"></td>
	</tr>
	<tr>
		<td>Title:</td>
		<td><input name="title" id="title" type="text" size="20" maxlength="80"></td>
	</tr>
	<tr>
		<td>Company:</td>
		<td><input name="company" id="company" type="text" size="20" maxlength="80"></td>
	</tr>
	<tr>
		<td>Course:</td>
		<td>PHP Basics</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td colspan="2"><input type="Submit" name="submit" value="Proceed &gt; &gt;"></td>
	</tr>
</table>

</form>

<p>
	
<a href="web-object-php-certificate.zip">Download source PHP files</a>

</body>
</html>
