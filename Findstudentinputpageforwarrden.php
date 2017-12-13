<?php 
session_start();
if(isset($_SESSION['type'])&& $_SESSION['type']==1)
{

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Students Complaint-OUTPASS MANAGEMENT SYSTEM</title>
<link href="pages/CSS/Menu.css" rel="stylesheet" type="text/css" />
<link href="pages/CSS/Main.css" rel="stylesheet" type="text/css" />

<!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.--><script>var __adobewebfontsappname__="dreamweaver"</script><script src="http://use.edgefonts.net/advent-pro:n1,n4:default;just-me-again-down-here:n4:default;jolly-lodger:n4:default.js" type="text/javascript"></script>
</head>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css'>
<link rel="stylesheet" href="OS.css">


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
#mov1
{
	top: 40%;
	left: 34%;
	position: absolute;
	font-family:Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
	COLOR:#069;
}
#mov2
{
	top: 40%;
	left: 50%;
	position: absolute;
	border:solid #069;
}

#mov3
{
	top: 50%;
	left: 40%;
	position: absolute;
	font-family:Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
	COLOR:#ED7D31;
}
#mov4
{
	top: 50%;
	left: 50%;
	position: absolute;
	border:solid #ED7D31;
}
.btn
{
	width: 100px;
	height: 50px;
	font-family: Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
	color: #ccc;
	font-style: normal;
	background-color: #06C;
	margin-left: 10px;
	float: left;
	position: absolute;
	left: 40%;
	top: 50%;
	font-size: 16px;
	border-radius:7px;
}

h1
{
	position:absolute;
	top:30%;
	left:20%;
	
	width:auto;
	height:auto;
	

}



</style>



<body>
<div id="lamhead">
<h2> <span id="head">OUTPASS MANAGEMENT SYSTEM |</span> FIND A STUDENT </h2></div>

 <img class="back1" src="Picture2.png" width="1366" height="768">
 <div id="MenuHolder">

<nav>
<ul>
<li ><a href="wardenhome.php">Home</a></li>
<li ><a href="#">Administration</a>
<ul>
<li><a href="newwardenadmit.php">Add Warden</a></li>
<li><a href="newdeptadmit.php">Add Dept.</a></li>
<li><a href="Password Changeforwarden.php">Change Password</a></li>
<li><a href="#">More</a></li>

</ul>


</li>
<li ><a href="Admission Verfication.php">Admission </a>
<ul>

</ul>
</li>
<li ><a href="#">Outpass</a>
<ul>
<li><a href="WardenOpVerfication.php">Regular Leave Verfication</a></li>
<li><a href="WardenOpVerficationSpecial.php">Special Leave Verfication</a></li>
<li><a href="WardenApprovedOutpass.php">Approved </a></li>
<li><a href="WardendRejectedOutpass.php">Disapproved </a></li>
<li><a href="whoallarriveforwarden.php">Student Arrival</a></li>

</ul>



</li>
<li ><a href="complaintbox.php">Complaint Box</a>


<li><a href="ComposeCircularbyWarden.php"> Circulars </a></li>



</li>

<li ><a href="Findstudentinputpageforwarrden.php">Find Student</a>





<li ><a href="logout.php">Logout</a></li>
</ul>
</nav>
 
</div>
<h1> <?php  
	$abc= NULL;
	if(isset($_REQUEST['abc']))
		$abc = $_REQUEST['abc'];
	if ($abc != NULL)
	echo $abc;?> </h1>
<label id="mov1" for="admissionno">Admission No/Student Name:</label>
<form action ="studentdetails.php" method ="post" >
<input  id="mov2" name="admno" name="name" type="text" size="10" align="middle" required>

<input class="btn" name="submit" type="search" value="Search">
<div class="box">
	<a class="button" href=""><input class="btn" name="submit" type="submit" value="Search"></a>
</div>
</form>

</body>
</html>
<?php

}

else

 header("location:login.php");
 ?>

