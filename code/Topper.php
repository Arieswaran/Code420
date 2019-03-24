<!DOCTYPE html>
<html>
<head>
<title>Leaderboard</title>
</head>
<body onload="week()">
	<?php
	$db = mysqli_connect('localhost','arieswaran','aj','code420');
if(!$db)
{
	echo("Connection failed: " . mysqli_connect_error());
}
?>
<button onclick="week()">weekly </button>
<button onclick="month()">Monthly</button>
<button  onclick="overall()">OverAll</button>
<p id="demo"></p>
<script>
function week()
{
document.getElementById("demo").innerHTML = 
<?php

$q="SELECT * FROM users ORDER BY week DESC";
$res=mysqli_query($db,$q) or die("1");
echo "<table border='1'>
<tr>
<th>Rank </th>
<th>Name</th>
<th>Score</th>
</tr>";
$a=0;
while($row = mysqli_fetch_array($res) or die("2"))
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


?>;
}
//funtion for monthly
function month()
{
document.getElementById("demo").innerHTML = 
<?php

$q="SELECT * FROM users ORDER BY month DESC";
$res=mysqli_query($db,$q);
echo "<table border='1'>
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


?>;
}

//code for overall
function overall()
{
document.getElementById("demo").innerHTML = 
<?php

$q="SELECT * FROM users ORDER BY score DESC";
$res=mysqli_query($db,$q);
echo "<table border='1'>
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


?>;
}

</script>
</body>
</html>
