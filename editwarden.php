<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Edit My Profile -OUTPASS MANAGEMENT SYSTEM</title>
<link href="pages/CSS/Menu.css" rel="stylesheet" type="text/css" />
<link href="pages/CSS/Main.css" rel="stylesheet" type="text/css" />
<link href="assets/CSS/button.css" rel="stylesheet" type="text/css" />
</head>

<style>


#formwrapper
{
	width: 480PX;
	height: auto;
	background-color:transparent;
	position: absolute;
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
	margin-top: 5px;
	margin-right: 0px;
	margin-bottom: 5px;
	margin-left: 1px;
}
input
{
	width: 250px;
	border: thin solid #960;
	margin-bottom: 10px;
}

</style>

<body>
<div id="lamhead">
<h2> <span id="head">OUTPASS MANAGEMENT SYSTEM |</span> EDIT WARDEN PROFILE</h2></div>

 <img class="back1" src="Picture2.png" width="1366" height="768">
 <?php
@session_start();
@$user=$_SESSION['username'];
if($user)
{
	$connect=mysql_connect("localhost","root","") or die("Could'nt connect");
mysql_select_db("outpass")or die("Could'nt find db");
$query = mysql_query("SELECT * FROM warden WHERE uname='$user'");
$numrows =mysql_num_rows($query);
if($numrows>0)
{
	while($row=mysql_fetch_assoc($query))
	{
		$name=$row['name'];
		$email=$row['branch'];
		$phone=$row['sem'];
	}
}
}

		?>
<div id="formwrapper">
<form action="newwarden.php" method="post">
<fieldset>

<label for="name">  Name:</label>
<input name="name" type="text" size="40" maxlength="100" value="<?php echo $name ?>" >
<label for="no">Email:</label>
<input name="email" type="email" size="40" maxlength="100" value="<?php echo $email ?>">

<label for="no">Phone No:</label>
<input name="no" type="tel" size="40" maxlength="10" value="<?php echo $phone ?>" >
<input class="btn blue" style="border:none" name="submit" type="submit" value="Update">`
</fieldset>
</form>
<?php
@session_start();
@$user=$_SESSION['username'];
if($user)
{

@$name1=$_POST['name'];
@$email1=$_POST['email'];
@$phone1=$_POST['no'];
@$submit=$_POST['submit'];
if($submit)
		{
		
		 
		@$query = mysql_query("SELECT * FROM warden WHERE uname='$user'");
			$numrows =mysql_num_rows($query);
			if($numrows>0)
			{
				while($row=mysql_fetch_assoc($query))
				{
					$update=mysql_query("UPDATE warden SET name='$name1'  WHERE uname='$user'");
						$update1=mysql_query("UPDATE warden SET email='$email1'  WHERE uname='$user'");
						$update2=mysql_query("UPDATE warden SET phone='$phone1'  WHERE uname='$user'");
						
				}
			}
		}
}


?>
</div>
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
</body>
</html>
