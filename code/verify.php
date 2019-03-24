<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Verify</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
</head>

<body class="w3-red">

<?php

echo "<link rel='stylesheet' href='https://www.w3schools.com/w3css/4/w3.css'>";
include("header.php");
include("database.php"); 
  $query="select * from verification order by date DESC";
  $result=mysqli_query($cn,$query) or die("error in the query".mysqli_error($cn));
  $row=mysqli_fetch_array($result);
  //print_r($row);
     echo "<div><img src='".$row['proof']."'  ></div>";
     echo  "<p>Name of the activity : ".$row["today_activity"]."</p>";
	 $_SESSION['e']=$row['email'];
	 $_SESSION['d']=$row['date'];
   ?>
   <div>
   <button onclick="window.location.href = 'agree.php';">Agree</button>
   <button onclick="window.location.href = 'notagree.php';">Not-Agree</button>
   </div>
   </body>
   </html>

  
