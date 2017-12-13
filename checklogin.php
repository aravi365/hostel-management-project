<?php
   session_start();
$username = $_POST['username'];
$password = $_POST['password'];
if($username&&$password)
{
$connect=mysql_connect("localhost","root","") or die("Could'nt connect");
mysql_select_db("outpass")or die("Could'nt find db");
$query = mysql_query("SELECT * FROM users WHERE userid = '$username'");
$numrows =mysql_num_rows($query);
if($numrows!=0)
{
	while($row = mysql_fetch_assoc($query))
	{
		$dbusername = $row['userid'];
		$dbpassord = $row['password'];
		$type = $row['type'];
	}
	if ($username==$dbusername&&$password==$dbpassord)
	{
			 $_SESSION['username']= $dbusername;
		if($type==0)
		{
		    $_SESSION['type'] = 0;
			header("location:studenthome.php");
		}
		else if($type==1)
		{
		    $_SESSION['type'] = 1;
			header("location:wardenhome.php");
		}
		else if($type==2)
		{
		    $_SESSION['type'] = 2;
			$hid= mysql_fetch_array(mysql_query("select dept from hod where id = $dbusername"));
			$_SESSION['hdpt']= $hid[0];
			header("location:hodhome.php");
		}
		else if($type==3)
		{
		    $_SESSION['type'] = 3;
			header("location:parenthome.php");
		}
	}
	else
		header("location:login.php?msg=Incorrect Password");
}
else
{
	header("location:login.php?msg=You are not yet Registered!");
}
}
?>