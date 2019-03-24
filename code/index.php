
<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Fitness 420</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
</head>

<body class="w3-red">
<?php
include("header.php");
include("database.php");
extract($_POST);

if(isset($submit))
{
	$q="select * from users where email='$loginid' and password='$pass'";
	$rs=mysqli_query($cn,$q)or die("Could Not Perform the Query".mysqli_error($cn));
	if(mysqli_num_rows($rs)<1)
	{
		$found="N";
	}
	else
	{
		$_SESSION["email"]=$loginid;
	}
}
if(isset($_SESSION["email"]))
{
  header("Location:main.php");

}


?>
<center>
<table class="w3-table w3-bordered w3-border">
  <tr>
   
  <td width="469" bgcolor="#CC3333"><div align="center" class="style1">User Login </div></td>
  </tr>
  <tr>
   

    <td valign="top"><form name="form1" method="post" action="">
      <table width="200" border="0">
        <tr>
          <td><span class="style2">Mail ID </span></td>
          <td><input name="loginid" type="text" id="loginid2"></td>
        </tr>
        <tr>
          <td><span class="style2">Password</span></td>
          <td><input name="pass" type="password" id="pass2"></td>
        </tr>
        <tr>
          <td colspan="2"><span class="errors">
            <?php
		  if(isset($found))
		  {
		  	echo "Invalid Username or Password";
		  }
		  ?>
          </span></td>
          </tr>
        <tr>
          <td colspan=2 align=center class="errors">
		  <input name="submit" type="submit" id="submit" value="Login">		  </td>
        </tr>
        <tr>
          <td colspan="2" bgcolor="#CC3300"><div align="center"><span class="style4">New User ? <a href="signup1.php">Signup Free</a></span></div></td>
          </tr>
		
	   </table>
      
    </form>
  </td>
  </tr>
</table>
</center>
</body>



<style> .copy{text-align: center; font-family: 'PT Sans Narrow', sans-serif; border: 2px solid black;} .on{font-family: 'PT Sans Narrow', sans-serif;} </style>
</html>
