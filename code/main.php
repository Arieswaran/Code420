<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Fitness 420</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="css.css" rel="stylesheet" type="text/css">
</head>

<body class="w3-red">

<?php
$email=$_SESSION["email"];
echo "<link rel='stylesheet' href='https://www.w3schools.com/w3css/4/w3.css'>";
echo "<link rel='stylesheet' href='css.css'>";
include("header.php");
include("database.php");

$q="select * from users where email='".$email."';";
//print_r($q);
$result=mysqli_query($cn, $q) or die("fck me".mysqli_error($cn)) ;
$row = mysqli_fetch_assoc($result);
echo "<table class='w3-table w3-red  w3-bordered w3-border'>";
echo  "<tr>
    <th>Name:</th>
    <td>" . $row['name']. "</td> 
  </tr>";
echo  "<tr>
    <th>age:</th>
     <td>" . $row['age']. "</td>
  </tr>";
echo "<tr>
    <th>score:</th>
    <td>" . $row['score']. "</td>
    </tr>";
echo "<tr>
    <th>stage:</th>
    <td>" . $row['stage']. "</td>
  </tr>";
echo   "<tr>
    <th>hotstreak:</th>
     <td>" . $row['h_streak']. "</td>
  </tr>";
echo   "<tr>
    <th>current Streak:</th>
     <td>" . $row['c_streak']. "</td>
  </tr>";

echo "<tr><th>Activity</th>
<td><a href='Activity.php'>Let's do this</a></td>
</tr>
";
echo "</table>";
echo "<br><br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href='logout.php'>Log out</a>";
if($row["stage"]>=5)
echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href='certificate.php'>Certificate</a>";
?>

</body>
</html>
