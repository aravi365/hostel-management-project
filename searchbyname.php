<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Search Student- OUTPASS MANAGEMENT SYSTEM</title>
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
#formwrapper {
	width: 600px;
	height:80%;
	background-color: transparent;
	top: 25%;
	right: 50%;
	bottom: 10%;
	left: 30%;
	
}
form {
	width: 510px;
	height: 80%;
	background-color: #FFF;
	padding-bottom: 70px;
	position: absolute;
	top: 45%;
	left: 35%;
}
fieldset{
	background-color:#FFF;
	border: thin solid #FFF;
	padding-bottom: 10px;
	font-size: 10px;
	right: 60%;
	bottom: 50%;	
}
label{
	width:250px;
	display:block;
	font-family:Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
	font-weight:lighter;
	font-size:15px;
	color:#330E0E;
	margin-top:5px;
	margin-right::0px;
	margin-bottom:5px;
	margin-left:0px;
}
input{
	width:250px;
	border:thin solid #1C7B87;
	margin-bottom:10px;
	
}

.btn{
	width: 20%;
	height: 8%;
	font-family: Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
	color: #CCC;
	font-weight: normal;
	background-color: #003366;
	margin-left: 300px;
	float: left;
	position: absolute;
	top: 6%;
	left: 10%;
	
	font-size: 16px;
	border-radius:7px;
}
.inpt1
{
	position: absolute;
	top: 6.5%;
	left:18% ;
	width:40%;
	height:6.5%;
}
.inpt2
{
	position: absolute;
	top: 100px;
	left: 195px;
}
.inpt3
{
	position: absolute;
	top: 156px;
	left: 199px;
}
.inpt11
{
	position: absolute;
	top: 6%;
	left: 2%;
	font-size:24px;
}
.inpt22
{
	position: absolute;
	top: 15%;
	left: 4%;
}
.inpt33
{
	position: absolute;
	top: 25%;
	left: 4%;
}




</style>



<body>
<div id="lamhead">
<h2> <span id="head">OUTPASS MANAGEMENT SYSTEM |</span> STUDENT SEARCH</h2></div>

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
<div id="formwrapper">
<form>
  <fieldset>
    <label class="inpt11" for="Name">Name:</label>
    <input  class="inpt1"  type="text" size="60" maxlength="200" required>
    

    <input class="btn" name="Submit"  type="Submit" value="Search">
   
  </fieldset>
</form>
</div>

</body>
</html>
