<?php 
session_start();
if(isset($_SESSION['type'])&& $_SESSION['type']==0)
{
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Change Password</title>
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
#formwrapper {
	width: 200px;
	background-color: #FFF;
	position:absolute;
	top: 40%;
	left: 30%;
	font-size: 10px;
	
}

label{
	width:150px;
	display:block;
	font-family:Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
	font-weight:lighter;
	font-size:15px;
	color:#330E0E;
	
}
input{
	width:250px;
	border:thin solid #1C7B87;
	
	
}

.btn{
	width: 20%;
	height: 35px;
	font-family: Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
	color: #CCC;
	font-weight: normal;
	background-color: #003366;
	float: right;
	font-size: 24px;
}
.pass
{
	font-family:Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
	font-size:20px;
}



</style>



<body>
<div id="lamhead">
<h2> <span id="head">OUTPASS MANAGEMENT SYSTEM   |</span> CHANGE PASSWORD</h2></div>

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
<div id="formwrapper">
<form action="PasswordChange forstudent.php" method="post">
  <table width="400px">
  <tbody>
  <tr height="40px">
  <td>
    <label class="inpt11" for="current password">Current Password:</label></td>
   <td> <input  class="inpt1" name="cpassword" type="password" size="60" maxlength="200" required></td></tr>
   <tr height="40px"><td> <label class="inpt22"for="new password"> New Password:</label></td>
    <td><input  class="inpt2" name="npassword" type="password" size="60" maxlength="200" required></td></tr>
   <tr height="40px"><td> <label  class="inpt33" for="confirm password">Confirm Password:</label></td><td>
    <input  class="inpt3" name= "confirmpassword" type="password" size="60" maxlength="200" required></td></tr>
<tr><td colspan="2"><br>
    <center><input class="btn" name="submit"  type="Submit" value="Save"></center></td></tr></tbody></table>
   
 

<?php
$user=$_SESSION['username'];
@$cpassword=$_POST['cpassword'];
@$npassword=$_POST['npassword'];
@$copassword=$_POST['confirmpassword'];
@$submit=$_POST['submit'];
if($submit)
{
	if($npassword==$copassword)
	{
		
		if($user)
		{
			$connect=mysql_connect("localhost","root","") or die("Could'nt connect");
			mysql_select_db("outpass")or die("Could'nt find db");
			$query = mysql_query("SELECT * FROM users WHERE userid='$user'");
			$numrows =mysql_num_rows($query);
			if($numrows>0)
			{
				while($row=mysql_fetch_assoc($query))
				{
					$dbcpassword=$row['password'];
					if($dbcpassword==$cpassword)
					{
						$update=mysql_query("UPDATE users SET password='$npassword' WHERE userid='$user'");
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
