<?php 
session_start();
if(isset($_SESSION['type'])&& $_SESSION['type']==0)
{
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>About Me!</title>
<link href="pages/CSS/Menu.css" rel="stylesheet" type="text/css" />
<link href="pages/CSS/Main.css" rel="stylesheet" type="text/css" />
<!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.--><script>var __adobewebfontsappname__="dreamweaver"</script><script src="http://use.edgefonts.net/advent-pro:n1,n4:default;just-me-again-down-here:n4:default;jolly-lodger:n4:default.js" type="text/javascript"></script>
</head>
<style type="text/css">
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

body
{
	margin-left:0px;
	margin-top:0px;
	margin-right:0px;
	margin-bottom:0px;
}
label
{
	font-family:Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
	font-weight:lighter;
	font-size:20px;
}
form
{
	top: 30%;
	left: 20%;
	position: absolute;	
}
input
{
	width: 250px;
	border:none;
	
	display:none;
	font-family:Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
	font-weight:lighter;
	font-size:20px;
	

} 
#mov1
{
	position: absolute;
	top: 1%;
	left: 150%;
	display:block;
	height:30px;
	
}
#mov2
{
	position: absolute;
	top: 10%;
	left: 150%;
	display:block;
	height:30px;
}
#mov3
{
	position: absolute;
	top: 20%;
	left: 150%;
	display:block;
	height:30px;
}
#mov4
{
	position: absolute;
	top: 30%;
	left: 150%;
	display:block;
	height:30px;
}
#mov5
{
	position: absolute;
	top: 40%;
	left: 150%;
	display:block;
	height:30px;
}
#mov6
{
	position: absolute;
	top: 50%;
	left: 150%;
	display:block;
	height:30px;
}
#mov7
{
	position: absolute;
	top: 60%;
	left: 150%;
	display:block;
	height:30px;
}
#mov8
{
	position: absolute;
	top: 70%;
	left: 150%;
	display:block;
	height:30px;
}
#mov9
{
	position: absolute;
	top: 80%;
	left: 150%;
	display:block;
	height:30px;
}
#mov10
{
	position: absolute;
	top: 90%;
	left: 150%;
	display:block;
	height:30px;
}
#warnermsg
{
	font-size:26px;
	font-family:Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
	font-weight:normal;
	top:250px;
	left:300px;
	position:absolute;
}
</style>



<body>
<div id="lamhead">
<h2> <span id="head">OUTPASS MANAGEMENT SYSTEM   |</span> ABOUT ME</h2></div>

 <img class="back1" src="Picture2.png" width="1366" height="768">
    <div id="MenuHolder">
<nav>
<ul>
<li ><a href="StudentHome.php">Home</a></li>
<li ><a href="Myprofile.php">About Me</a>
<ul>
<li><a href="PasswordChange forstudent.php">Change Password</a></li>
<li><a href="editdetailbystudent.php">Edit Me</a></li>

</ul>
</li>
<li ><a href="#">Get Outpass</a>
<ul>
<li><a href="GetOutpassWarden.php">Regular Leave</a></li>
<li><a href="GetOutpassHOD.php">Special Leave</a></li>

</ul>
</li>
<li ><a href="ViewCircularsstudent.php">Latest Circulars</a></li>
<li ><a href="Compose ComplaintbyStudent.php">Complaint</a></li>
<li ><a href="arrivalscan.php">Arrival</a></li>
<li ><a href="Outpass Status.php">Outpass Status</a></li>
<li ><a href="logout.php">Logout</a></li>
</ul>
</nav>
</div>
<h1 id="warnermsg">Please undergo barcode scaning for informing your arrival</h1>

</body>
</html>
<?php
}

else

 header("location:login.php");
 ?>

