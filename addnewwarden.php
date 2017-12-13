<?php


$connect=mysql_connect("localhost","root","") or die("connection terminated");
mysql_select_db("outpass") or die("");

$name= $_POST['name'];
$email= $_POST['no'];

$phone= $_POST['phone'];
$submit= $_POST['submit'];

	$pass=1111;
	
			$se=mysql_query("SELECT * FROM users ORDER BY userid DESC LIMIT 1");

			$row=mysql_fetch_assoc($se);
			
			$key=$row['userid'];
			$key = $key+1;
			
		$insert1 = mysql_query("INSERT INTO users  VALUES($key,'$pass',1)");
		echo mysql_error();
		$se=mysql_query("SELECT * FROM users ORDER BY userid DESC LIMIT 1");

			$row=mysql_fetch_assoc($se);
			
			$key=$row['userid'];
			
		echo mysql_error();	
		$insert = mysql_query("INSERT INTO warden(name,email,uname,phone) VALUES('$name','$email',$key,'$phone')");	
		echo mysql_error();
		if($insert && $insert1)
		{
			header("location:newwardenadmit.php?msg=New Warden Added Successfully! </br> UserName $key password $pass ");
		}
		else
		{
			echo mysql_error();
			
		header("location:newwardenadmit.php?msg=Adding failed");
			
		}
	




?>