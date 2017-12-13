<?php 
session_start();
if(isset($_SESSION['type'])&& $_SESSION['type']==1)
{

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ComposeCircular-OUTPASS MANAGEMENT SYSTEM</title>
<link href="pages/CSS/Menu.css" rel="stylesheet" type="text/css" />
<link href="pages/CSS/Main.css" rel="stylesheet" type="text/css" />
<link href="OutpassStatus.css" rel="stylesheet" type="text/css" />
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
	position: absolute;
	left: 75%;
	top: 15%;
	font-family: Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
}
#mov2
{
	position: absolute;
	top: 15%;
	width: 14%;
	left: 78%;
	font-family: Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
	border-color:thin #F93;
}
#mov3
{
	top: 30%;
	position: absolute;
	left: 5%;
	font-family: Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
}
#mov4
{
	position: absolute;
	left: 15%;
	top: 30%;
	width: 40%;
	font-family: Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
	border-color:thin #F93;
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
	left: 80%;
	top: 88%;
	font-size: 16px;
	border-radius:7px;
}
#mov1
{
	position:absolute;
	top:20.5%;
	left:80%;
	
}
#mov2
{
	position:absolute;
	top:20%;
	left:83%;
}
#mov11
{
	position: absolute;
	top: 15%;
	left: 5%;
	font-family: Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
}
#mov12
{
	position: absolute;
	top: 15%;
	left: 15%;
	font-family: Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
	border-color:thin #F93;
}
#mov13
{
	position: absolute;
	top: 20%;
	left: 5%;
	font-family: Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
}
#mov14
{
	position: absolute;
	top: 20%;
	left: 15%;
	font-family: Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
	border-color:thin #F93;
}
#text1
{
	position: absolute;
	left: 15%;
	top: 35%;
	font-family: Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
	border-color:thin #F93;
}







</style>



<body>
<div id="lamhead">
<h2> <span id="head">OUTPASS MANAGEMENT SYSTEM |</span> COMPOSE CIRCULAR </h2></div>

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
<li><a href="addbatch1.php">Update Batch</a></li>

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
</div><form action ="circular.php" method ="post" >
<label  id="mov3"for="Sub">Subject:</label>
<input id="mov4" name="sub" type="text" size="40" maxlength="150">
<br>
<br>
<br>
<br>
<textarea  id="text1" name="msg" cols="120" rows="20"></textarea>

<input class="btn" name="submit" type="submit" value="Circulate">
</form>

</body>
</html>
<?php

}

else

 header("location:login.php");
 ?>
