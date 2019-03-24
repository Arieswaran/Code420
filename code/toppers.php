<!DOCTYPE html>
<html>
<head>
<title>Toppers List</title>
<link rel='stylesheet' href='https://www.w3schools.com/w3css/4/w3.css'>

</head>
<body class="w3-red">
<center>
<?php
include("header.php");
$db = mysqli_connect('localhost','arieswaran','aj','code420');
if(!$db)
{
	echo("Connection failed: " . mysqli_connect_error());
}
?>
<h1 >WEEKLY TOP 10 </h1>
<?php 
$q="SELECT * FROM users ORDER BY week DESC";
$res=mysqli_query($db,$q);
echo "<table class='w3-table w3-bordered w3-border'>
<tr>
<th>Rank </th>
<th>Name</th>
<th>Score</th>
</tr>";
$a=0;
while($row = mysqli_fetch_array($res))
{
$a=$a+1;
echo "<tr>";
echo"<td>".$a."</td>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['week'] . "</td>";
echo "</tr>";
if($a>10) {
break;
}
}
echo "</table>";

?>
<h1> MONTHLY TOP 10</h1>

<?php
$q="SELECT * FROM users ORDER BY month DESC";
$res=mysqli_query($db,$q);
echo "<table class='w3-table w3-bordered w3-border'>
<tr>
<th>Rank </th>
<th>Name</th>
<th>Score</th>
</tr>";
$a=0;
while($row = mysqli_fetch_array($res))
{
$a=$a+1;
echo "<tr>";
echo"<td>".$a."</td>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['month'] . "</td>";
echo "</tr>";
if($a>10) {
break;
}
}
echo "</table>";
?>


<h1>OVER ALL TOP 10</h1>
<?php
$q="SELECT * FROM users ORDER BY score DESC";
$res=mysqli_query($db,$q);
echo "<table class='w3-table w3-bordered w3-border'>
<tr>
<th>Rank </th>
<th>Name</th>
<th>Score</th>
</tr>";
$a=0;
while($row = mysqli_fetch_array($res))
{
$a=$a+1;
echo "<tr>";
echo"<td>".$a."</td>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['score'] . "</td>";
echo "</tr>";
if($a>10) {
break;
}
}
echo "</table>";

?>


</script>
</center>
</body>
</html>
