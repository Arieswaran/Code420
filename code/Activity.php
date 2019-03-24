<?php
session_start();
//$_SESSION['email']="arieswaran@gmail.com";
$email=$_SESSION['email'];
//$email="arieswaran@gmail.com";
$todaydate=date("Y-m-d");
$db = mysqli_connect('localhost','arieswaran','aj','code420');
if(!$db)
{
	echo("Connection failed: " . mysqli_connect_error());
}
else
{   //echo $email;
    $activitie=array('running','skipping','drinking','push_up','throw');
	$q="SELECT * FROM users WHERE email='".$email."';";
	$check=mysqli_query($db,$q) or die("Couuld not query".mysqli_error($db));
	#print_r($check);
	if($row=mysqli_fetch_array($check)){ 
				$date=$row['date'];
				$name=$row['name'];
				$activity=$row['activity'];
			//	$today_activity=$row['today_activity'];
	}
	$arr=explode(" ",$activity);
	#print_r($arr);
	#print_r($row);
	if($todaydate==$date)
	{
		//just do nothing and chill :)
		//$ac=$today_activity;
		//$arr[$n]=1;
		//$str=implode(" ",$arr);
	}
	else{
		//$a=1;
		print_r($arr);
		while(true)
		{
			$n=rand(0,4);
			if($arr[$n]=='0')
			{
				$ac=$activitie[$n];
				//$arr[$n]=1;
		//$str=implode(" ",$arr);
		break;
			}
		}
	
$query1="UPDATE users SET today_activity='".$ac."' where email='".$email."';";
mysqli_query($db,$query1) or die("Error in query1".mysqli_error());
$query1="UPDATE users SET date='".$todaydate."' where email='".$email."';";
mysqli_query($db,$query1) or die("Error in query2".mysqli_error());
	
	}
				
}
mysqli_commit($db);
mysqli_close($db);
header("location:todayactivity.php");

?>
