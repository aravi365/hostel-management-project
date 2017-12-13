<?php 
session_start();
if(isset($_SESSION['type'])&& $_SESSION['type']==3)
{

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Parent Details - OUTPASS MANAGEMENT SYSTEM</title>
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
#ken1
{
	position:absolute;
	left:100px;
	top:10px;
	font-family:Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
	font-size:24px;
	
	}
	#ken3
{
	position:absolute;
	left:100px;
	top:50px;
	font-family:Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
	font-size:24px;
	
	}
	#ken5
{
	position:absolute;
	left:100px;
	top:90px;
	font-family:Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
	font-size:24px;
	
	}
	#ken7
{
	position:absolute;
	left:100px;
	top:140px;
	font-family:Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
	font-size:24px;
	
	}
	#ken2
	{
		position:absolute;
		left:300px;
		top:10px;
		font-size:24px;
	}
	#ken4
	{
		position:absolute;
		left:300px;
		top:50px;
		font-size:24px;
	}
	#ken6
	{
		position:absolute;
		left:300px;
		top:90px;
		font-size:24px;
	}
	#ken8
	{
		position:absolute;
		left:300px;
		top:140px;
		font-size:24px;
	}
	


</style>



<body style="overflow:hidden">
<div id="lamhead">

<h2> <span id="head">OUTPASS MANAGEMENT SYSTEM |</span> PARENT DETAILS</h2>
</div>

 <img class="back1" src="Picture2.png" width="1366" height="768">
 <div id="MenuHolder">

   
   
   <nav>
<ul>
<li ><a href="parenthome.php">Home</a></li>


</li>
<li ><a href="parentstatus.php">Leave Status</a></li>
</li>

<li ><a href="parvdep.php">Arrival/Departure </a>
</li>
<li ><a href="parentindisciplinary.php">Indisciplinary</a>
</li>
<li ><a href="parentNotices.php">Notice</a></li>
</li>



<li> <a href="passwordchangeforparent.php" >Change Password</a></li>
<li> <a href="parentinformation.php">Parent Details</a></li>

</li>

<li ><a href="logout.php">Logout</a></li>
</ul>
</nav>
</div>
<form>
<?php
@$user=$_SESSION['username'];
if($user)
{

			@$connect=mysql_connect("localhost","root","") or die("Could'nt connect");
			mysql_select_db("outpass")or die("Could'nt find db");
		
			@$query = mysql_query("SELECT * FROM parent WHERE pid='$user'");
			
			@$numrows =mysql_num_rows($query);
if($numrows>0)
{
	while($row=mysql_fetch_assoc($query))
	{
		$studentid=$row['sid'];
	}

				
				
				$query1=mysql_query("SELECT *  FROM student WHERE admno='$studentid'");
				
				while($row=mysql_fetch_assoc($query1))
				{
					$fathername=$row['father'];
					$fatherphone=$row['fmobno'];
					$mothername=$row['mother'];
					$motherphone=$row['mphone'];
				}
				
}
}
?>



<label id="ken1">FATHER:</label>
<input  id="ken2" type="text" name="father" readonly value="<?php echo $fathername; ?>"  >
<label id="ken3">FATHER MOB:</label>
<input  id="ken4"type="text" name="fathermob" value="<?php echo $fatherphone; ?>" readonly >
 


<label id="ken5">MOTHER:</label>
<input  id="ken6"type="text" name="mother" value="<?php echo $mothername; ?>" readonly  >
<label id="ken7">MOTHER MOB:</label>
<input  id="ken8"type="text" name="mothermob" value="<?php echo $motherphone; ?>" readonly >
</form>
</body>
</html>
<?php
}

else

 header("location:login.php");
 ?>

