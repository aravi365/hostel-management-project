<?php 
session_start();
if(isset($_SESSION['type'])&& $_SESSION['type']==1)
{

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Change Password - OUTPASS MANAGEMENT SYSTEM</title>
<link href="pages/CSS/Menu.css" rel="stylesheet" type="text/css" />
<link href="pages/CSS/Main.css" rel="stylesheet" type="text/css" />
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
	height:70%;
	background-color: transparent;
	top: 5%;
	right: 50%;
	bottom: 10%;
	left: 30%;
	z-index:-9;
	
}
form {
	width: 510px;
	height:70%;
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


.inpt1
{
	position: absolute;
	top: 44px;
	left: 194px;
}
.inpt11
{
	position: absolute;
	top: 7%;
	left: 4%;
}
.inpt2
{
	position: absolute;
	top: 100px;
	left: 195px;
}
.inpt22
{
	position: absolute;
	top: 18%;
	left: 4%;
}
.inpt3
{
	position: absolute;
	top: 156px;
	left: 199px;
}


.inpt33
{
	position: absolute;
	top: 29%;
	left: 4%;
}



#buttons {
  padding-top: 50px;
  text-align: center;
}


.btn {
  border-radius: 5px;
  padding: 5px 5px;
  font-size: 16px;
  text-decoration: none;
  margin: 20px;
  color: #fff;
  position: relative;
  display: inline-block;
 margin-left: 170px;
	float: left;
	position: absolute;
	top: 200px;
	left: 31px;
  
  
	
}

.btn:active {
  transform: translate(0px, 5px);
  -webkit-transform: translate(0px, 5px);
  box-shadow: 0px 1px 0px 0px;
}

.blue {
  background-color: #55acee;
  box-shadow: 0px 5px 0px 0px #3c93d5;
}

.blue:hover {
  background-color: #6Fc6ff;
}


</style>



<body style="overflow:hidden">
<div id="lamhead">
<h2> <span id="head">OUTPASS MANAGEMENT SYSTEM |</span> CHANGE PASSWORD</h2></div>

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
</div>
<div id="formwrapper">
<form action="Password%20Changeforwarden.php" method="post" >
  <fieldset>
    <label class="inpt11" for="current password">Current Password:</label>
    <input  class="inpt1" current password="current password" type="password" size="60" maxlength="25" required name="username">
    <label class="inpt22"for="new password"> New Password:</label>
    <input  class="inpt2" new password="new password" type="password" size="60" maxlength="25" required name="npassword">
    <label  class="inpt33" for="confirm password">Confirm Password:</label>
    <input  class="inpt3" confirm password= "confirm password" type="password" size="60" maxlength="25" required name="confirmpassword">

    <input class="btn blue" style="border:none;" name="Submit"  type="Submit" value="Save">
   
  </fieldset>
  <?php
@session_start();
@$user=$_SESSION['username'];
@$cpassword=$_POST['username'];
@$npassword=$_POST['npassword'];
@$copassword=$_POST['confirmpassword'];
@$submit=$_POST['Submit'];
if($submit)
{

	 
	if($npassword==$copassword)
	{
		
		if($user)
		{
			@$connect=mysql_connect("localhost","root","") or die("Could'nt connect");
			mysql_select_db("outpass")or die("Could'nt find db");
			@$query = mysql_query("SELECT * FROM users WHERE userid ='$user'");
			echo mysql_error();
			@$numrows =mysql_num_rows($query);
			if($numrows>0)
			{
				while($row=mysql_fetch_assoc($query))
				{
					$dbcpassword=$row['password'];
					if($dbcpassword==$cpassword)
					{
						$update=mysql_query("UPDATE users SET password ='$npassword' WHERE userid ='$user'");
						if($update)
						{
							?>
                            <div class="pass">
							<?php
							echo "password changed";
							?></div>
						<?php
						}
						else
						{
							?>
                            <div class="pass">
							<?php
							echo "password not changed";
							?></div>
						<?php
							
						}
					}
					else
					{
						?>
                            <div class="pass">
							<?php
						echo "current password is not matching";
						?></div>
						<?php
					}
				}
			}
		}
	}
	else
	{
		?>
                            <div class="pass">
							<?php
		
		echo "new and confirm password not matching ";
		?></div>
						<?php
	}
	
}
else


?>
</form>
</div>

</body>
</html>
<?php

}

else

 header("location:login.php");
 ?>
