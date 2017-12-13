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

<li><a href="EnableAccount.html">Enable Student</a></li>
<li><a href="DailyRequirmentFORwARDENinput.html">Daily Requirment</a></li>
<li><a href="Password Changeforwarden.php">Change Password</a></li>

</ul>


</li>
<li ><a href="#">Admission </a>
<ul>
<li><a href="Admission Verfication.php">Verfication</a></li>
<li><a href="Search admissionnobywarden.html">Get Admission no.</a></li>

</ul>
</li>
<li ><a href="#">Outpass</a>
<ul>
<li><a href="WardenOpVerfication.php">Verfication</a></li>
<li><a href="WardenApprovedOutpass.php">Approved </a></li>
<li><a href="WardendRejectedOutpass.php">Disapproved </a></li>
<li><a href="whoallarriveforwarden.php">Student Arrival</a></li>

</ul>



</li>
<li ><a href="ParentAlertbyWardeninput.html">Parent Alert</a></li>
<li ><a href="#">Circular|Complaint</a>
<ul>
<li><a href="complaintbox.php">Complaint Box</a></li>
<li><a href="ComposeCircularbyWarden.php">Compose Circulars </a></li>


</ul>

</li>

<li ><a href="#">Find Student</a>


<ul>
<li><a href="Findstudentinputpageforwarrden.php">Search Student</a></li>



</ul>

</li>


<li ><a href="logout.php">Logout</a></li>
</ul>
</nav>

</div>
<?php 
 mysql_connect("localhost","root","");
	  mysql_select_db("outpass");
	  $user = $_REQUEST['admno'];
	  $query = mysql_query("SELECT discipline FROM student WHERE admno='$user'");
	  
	  echo mysql_error();
	  $row=mysql_fetch_assoc($query);
	
	
		$per=$row['discipline'];
?>
<form action ="dis.php" method ="post">

<input type ="hidden" value ="<?php echo $user;  ?>" name ="admno">
<label  id="mov3"for="Sub">Enter The Complaints </label> 

 <textarea  id="text1" name="dis" cols="120" rows="20"><?php  echo $per;  ?></textarea>
<br>
<br>
<br>
<br>


<input class="btn" name="submit" type="submit" value="Submit">


</body>
</html>
