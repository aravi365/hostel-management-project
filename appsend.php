<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Request Successful</title>
</head>
<style>
.back1 {
	width: 100%;
	position: fixed;
	z-index: -100;
	height:100%;
	left: 0px;
	top: 0px;
	min-width: 1040px;
	min-height: 100%;
}
h1
{
	font-family:Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
	font-weight:lighter;
	font-size:18px;
	position:absolute;
	top:400px;
	left:200px;
}
.btn
{
	width: 175px;
	height: 89px;
	font-family: "Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", "DejaVu Sans", Verdana, sans-serif;
	color:#FFF;
	font-weight:lighter;
	background-color:#3C9;
	margin-left: 10px;
	float: right;
	position: absolute;
	top: 73%;
	left: 40%;
	font-size:18px;
}
#head
{
	font-size:24px;
}

#lamhead
{
	font-family:Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
	background-color: #FFCC66;
	position: fixed;
	top: 0.6%;
	left: 0.8%;
	width: 98.5%;
	color:#666;
	font-style:normal;
	font-weight:normal;
	z-index:999;
	font-size: 11px;
}
#home
{
	float:right;
	font-family:Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
	font-size:12px;
	font-weight:normal;
	position:absolute;
	top:-2%;
	z-index:999;
	font-size:24px;
	left:94%;
	color:#FFF;

}
#login
{
	float:right;
	font-family:Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
	font-size:12px;
	font-weight:normal;
	position:absolute;
	top:-2%;
	z-index:999;
	font-size:24px;
	left:88%;
	color:#FFF;

}

</style>

<body>
<div id="lamhead">
<h2> <span id="head">OUTPASS MANAGEMENT SYSTEM  |</span> JOIN SANTHOM</h2></div>
<a href="index.php">
<h4 id="home">Home</h4></a>
<a href="studentlogin.php">
<h4 id="login">Login</h4></a>
 <img class="back1" src="Picture2.png" width="1366" height="768">
<h1>Your Application Is Successfully Send To Warden For Verfication And Wait For Your Admission no. And Password In Your Phone</h1>
<?php

@$name=$_POST['name'];
@$brname=$_POST['brname'];
@$semname=$_POST['semname'];
@$batch=$_POST['batch'];
@$hname=$_POST['hname'];
@$city=$_POST['city'];
@$district=$_POST['district'];
@$state=$_POST['state'];
@$country=$_POST['country'];
@$zip=$_POST['zip'];
@$contphone=$_POST['contphone'];
@$dob=$_POST['dob'];
@$email=$_POST['email'];
@$mname=$_POST['mname'];
@$moccupation=$_POST['moccupation'];
@$mphone=$_POST['mphone'];




@$fname=$_POST['fname'];
@$foccupation=$_POST['foccupation'];
$fphone=$_POST['fphone'];
@$religion=$_POST['religion'];
@$lgname=$_POST['lgname'];
@$lgphone=$_POST['lgphone'];
@$lgaddress=$_POST['lgaddress'];
@$roomrequirement=$_POST['roomrequirement'];


$connect=mysql_connect("localhost","root","") or die("connection terminated");
mysql_select_db("outpass") or die("");

$insert=mysql_query("INSERT INTO studentapp(name,branch,batch,sem,father,fjob,fmobno,mother,mjob,mphone,hname,city,dist,state,country,zip,studentphone,dob,studentemail,religion,lg,lgaddress,lgmob,room)VALUES('$name', '$brname','$batch',  '$semname', '$fname', '$foccupation', '$fphone','$mname','$moccupation','$mphone', '$hname', '$city', '$district', '$state', '$country', '$zip','$contphone', '$dob', '$email',  '$religion',  '$lgname', '$lgaddress', '$lgphone', '$roomrequirement' )") or die("can not insert");
?>
</body>
</html>