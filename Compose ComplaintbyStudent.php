<?php 
session_start();
if(isset($_SESSION['type'])&& $_SESSION['type']==0)
{
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Complaint</title>
<link href="pages/CSS/Menu.css" rel="stylesheet" type="text/css" />
<link href="pages/CSS/Main.css" rel="stylesheet" type="text/css" />
<link href="assets/css/popup.css" rel="stylesheet" type="text/css" />
<!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.--><script>var __adobewebfontsappname__="dreamweaver"</script><script src="http://use.edgefonts.net/advent-pro:n1,n4:default;just-me-again-down-here:n4:default;jolly-lodger:n4:default.js" type="text/javascript"></script>
</head>
<script>
function myFunction() {
    if (confirm("Your Complaint successfuly forwarded to warden") == true) {
        
    } 
    
}
</script>
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
#sucmsg
{
	font-size:25px;
	z-index:10000;
	position:absolute;
	top:520px;
	left:960px;
}
#fucmsg
{
	font-size:25px;
	z-index:10000;
	position:absolute;
	top:520px;
	left:960px;
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
#mov1
{
	position: absolute;
	left: 75%;
	top: 20%;
	font-family: Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
}
#mov2
{
	position: absolute;
	top: 20%;
	width: 14%;
	left: 78%;
	font-family: Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
	border-color:thin #F93;
}
#mov3
{
	top: 35%;
	position: absolute;
	left: 5%;
	font-family: Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
}
#mov4
{
	position: absolute;
	left: 15%;
	top: 35%;
	width: 40%;
	font-family: Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
	border-color:thin #F93;
}

.btn
{
	width: 100px;
	height: 50px;
	font-family: Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
	color: #fff;
	font-style: normal;
	background-color: #900;
	margin-left: 10px;
	float: left;
	position: absolute;
	left: 80%;
	top: 85%;
}
#mov11
{
	position: absolute;
	top: 25%;
	left: 5%;
	font-family: Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
}
#mov12
{
	position: absolute;
	top: 25%;
	left: 15%;
	font-family: Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
	border-color:thin #F93;
}
#mov13
{
	position: absolute;
	top: 30%;
	left: 5%;
	font-family: Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
}
#mov14
{
	position: absolute;
	top: 30%;
	left: 15%;
	font-family: Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
	border-color:thin #F93;
}
#text1
{
	position: absolute;
	left: 15%;
	top: 40%;
	font-family: Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
	border-color:thin #F93;
}




</style>



<body>
<div id="lamhead">
<h2> <span id="head">OUTPASS MANAGEMENT SYSTEM   |</span> COMPLAINT</h2></div>

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
<form action="Compose ComplaintbyStudent.php" method="post">
<?php
$curdate=date("y/m/d");
?>

<label id="mov11"for="wardname">Warden Name:</label>
<select  id="mov12"name="wardname" required>
<option value="">-------------</option>

<?php

$connect=mysql_connect("localhost","root","") or die("connection terminated");
mysql_select_db("outpass") or die("");
$selectdept=mysql_query("SELECT * FROM warden ");
while($row=mysql_fetch_assoc($selectdept))
{
	$dname = $row['name'];
	?>
    <option value="<?php echo $dname;  ?>"><?php echo $dname;  ?></option>
    <?php
}

?>
</select>

<label id="mov1" for="Date">Date:</label>
<input  id="mov2" name="Date" type="text" size="40" maxlength="100" readonly value="<?php echo $curdate ?>" >
<label  id="mov3"for="Sub">Subject:</label>
<input id="mov4" name="Sub" required type="text" size="40" maxlength="150">
<br>
<br>
<br>
<br>
<textarea  id="text1" required name="Message" cols="120" rows="20"></textarea>
<input class="btn"  name="submit"  type="submit" value="Send">

<?php
@session_start();
$user=$_SESSION['username'];
if($user)
{
	$connect=mysql_connect("localhost","root","")or die("Could'nt connect");
	mysql_select_db("outpass")or die("Could'nt find db");
	@$subject=$_POST['Sub'];
	@$wardname=$_POST['wardname'];

	@$content=$_POST['Message'];
	@$submit=$_POST['submit'];
if($submit)
{
$insert=mysql_query("INSERT INTO complaint (`admno`,`curdate`,`wname`,`sub`,`content`)VALUES('$user', '$curdate','$wardname','$subject','$content')");
if($insert)

{ ?>
    <div id="sucmsg">
							<p>Your Complaint  is send Successful</p>
                            </div>
							<?php
						}
						else
						{
							?>
	<div id="fucmsg">
							<p>Your Complaint  is not  send</p>
                            </div>
                            <?php
						}
							

}
}
?>

</form>

</body>
</html>
<?php
}

else

 header("location:login.php");
 ?>
