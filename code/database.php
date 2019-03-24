<?php
$cn=mysqli_connect("localhost","arieswaran","aj") or die("Could not Connect My Sql".mysqli_error($cn));
mysqli_select_db($cn,"code420")or die("Could connect to Database".mysqli_error($cn));
?>
