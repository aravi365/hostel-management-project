<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ParentAlert-OUTPASS MANAGEMENT SYSTEM</title>
<link href="pages/CSS/Menu.css" rel="stylesheet" type="text/css" />
<link href="pages/CSS/Main.css" rel="stylesheet" type="text/css" />

<!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.--><script>var __adobewebfontsappname__="dreamweaver"</script><script src="http://use.edgefonts.net/advent-pro:n1,n4:default;just-me-again-down-here:n4:default;jolly-lodger:n4:default.js" type="text/javascript"></script>
</head>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css'>
<link rel="stylesheet" href="file:///C|/Users/aaditya r krishnan/Documents/Unnamed Site 2/OS.css">


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
	position:absolute;
	top:50%;
	left:40%;
	font-family:Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
}

#mov2
{
	position:absolute;
	top:50%;
	left:48%;
}

#mov3
{
	position:absolute;
	top:55%;
	left:40%;
	font-family:Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
}

#mov4{
	position:absolute;
	top:55%;
	left:48%
}
.btn
{
	position:absolute;
	width:8%;
	height:5%;
	top:69%;
	left:49%;
	color:#FFF;
	background-color: #06C;
	color: #ccc;
	font-size: 16px;
	border-radius:7px;
	}
.check
{
	position:absolute;
	top:62%;
	left:40%;
}
.kam
{
	position:absolute;
	top:62%;
	left:42%;
	font-family:Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
	font-weight:lighter;
}



</style>



<body>
<div id="lamhead">
<h2> <span id="head">OUTPASS MANAGEMENT SYSTEM |</span> CHECK PARENT ALERTS</h2></div>
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

<label id="mov3" for="approved">Date:</label>
<input  id="mov4"name="approved" type="date" size="10" align="middle">

<input class="btn" name="submit" type="submit" value="Go">



</body>
</html>