<?php 
session_start();
if(isset($_SESSION['type'])&& $_SESSION['type']==1)
{

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>NEW WARDEN PROFILE</title>
<link href="pages/CSS/Menu.css" rel="stylesheet" type="text/css" />
<link href="pages/CSS/Main.css" rel="stylesheet" type="text/css" />
</head>

<link href="assets/CSS/button.css" rel="stylesheet" type="text/css" />
<style>


#formwrapper
{
	width: 480PX;
	height: auto;
	background-color:transparent;
	position:absolute;
	left:35%;
	top:30%;
}
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
form
{
	width:350px;
	height:auto;
	background-color:#FFF;
}
fieldset
{
	background-color:#Fff;
	border:none;
	padding-bottom:10px;
}

label
{
	width: 110px;
	display: block;
	font-family: "Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", "DejaVu Sans", Verdana, sans-serif;
	font-size: 18px;
	color: #06c;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	margin-left: 0px;
}
input
{
	width: 250px;
	border: thin solid #333;
	margin-bottom: 10px;
	outline:none;
}

</style>

<body>
<div id="lamhead">
<h2> <span id="head">OUTPASS MANAGEMENT SYSTEM |</span> ADD NEW WARDEN</h2></div>
 <img class="back1" src="Picture2.png" width="1366" height="768">
<div id="formwrapper">
<form action="addnewwarden.php" method="post">
<fieldset>

<label for="name"> Name:</label>
<input name="name" type="text" size="30" maxlength="30" required>
<label for="email">Email:</label>
<input name="no" type="email" size="30" maxlength="30" required>

<label for="phone">Phone No:</label>
<input name="phone" type="text" size="10" maxlength="30" required pattern="[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]" placeholder="Donot include +91">
<input class="btn blue" style="border:none" name="submit" type="submit" value="Add">
`
</fieldset>
</form>
<h1> <?php if(isset($_REQUEST['msg']))
			{
			$msg = $_REQUEST['msg'];
			if($msg!=NULL)
			echo $msg;
			$msg =NULL;
			}
			?> </h1>

</div>
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
</div>
</body>
</html>
<?php

}

else

 header("location:login.php");
 ?>