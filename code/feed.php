<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Friend's Feed</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
</head>

<body class="w3-red">

<?php
echo "<link rel='stylesheet' href='https://www.w3schools.com/w3css/4/w3.css'>";
include("header.php");
include("database.php"); 
$email=$_SESSION[email];
$q1="select friends from user_friends where email='".$email."';";
$res1=mysqli_query($cn,$q1) or die("error in the query2".mysqli_error($cn));
  if($row1=mysqli_fetch_array($res1))
  {
    $friends=$row1['friends'];	
  }
  $arr=explode(";", $friends);
  $length=sizeof($arr);
  $str="email='".$arr[0]."' ";
  for($x=1;$x<$length;$x++)
  {
    $str=$str."OR email='".$arr[$x]."' ";
  }
  $q2="select * from user_stories where ".$str." order by date";
  $res2=mysqli_query($cn,$q2) or die("error in the query1".mysqli_error($cn));
  while($row2=mysqli_fetch_array($res2))
  {
  	$mail=$row2['email'];
  	$date=$row2['date'];
  	$proof=$row2['proof'];
  	$like=$row2['likes'];
  	$dislike=$row2['dislikes'];
  	$comments=$row2['comments'];
  	$namequery="select name from users where email='".$mail."';";
  	$res3=mysqli_query($cn,$namequery) or die("error in the query3".mysqli_error($cn));
  	$row3=mysqli_fetch_array($res3);
  	$name=$row3['name'];
  	echo "<center>";
  	echo "<p>$name</p>";
  	echo "<div><img src='".$row2['proof']."' height='242' width='242'></div>";
  	echo "<p><button>Like</button><span>$like</span> <button>Dislike</button><span>$dislike</span><button>Comment</button></p>
  	      <p><span>$comments</span><p>";
  }
  ?>
</body>
</html>
