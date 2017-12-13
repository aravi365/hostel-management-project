<?php 
session_start();
if(isset($_SESSION['type'])&& $_SESSION['type']==0)
{
?>


<?php

$user=$_SESSION['username'];

if($user)
{
	$connect=mysql_connect("localhost","root","")or die("Could'nt connect");
	mysql_select_db("outpass")or die("Could'nt find db");
	$query=mysql_query("SELECT * FROM student WHERE admno='$user'");
	
	$numrows=mysql_num_rows($query);
	
	if($numrows >0)
	{
		
		while($row=mysql_fetch_assoc($query))
		{
			$name=$row['name'];
			$branch=$row['branch'];
			$sem=$row['sem'];
		}
	}
	
}
$curdate=date("y/m/d");

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Special Leave</title>
<link href="pages/CSS/Main.css" rel="stylesheet" type="text/css" />
<link href="pages/CSS/Menu.css" rel="stylesheet" type="text/css" />
<!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.--><script>var __adobewebfontsappname__="dreamweaver"</script><script src="http://use.edgefonts.net/advent-pro:n1,n4:default;just-me-again-down-here:n4:default;jolly-lodger:n4:default.js" type="text/javascript"></script>
</head>
<script>
function myFunction() {
    if (confirm("Your Leave  Request  is Successfuly sent to HOD") == true) {
        
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
	font-size: 20px;
	z-index: 10000;
	position: absolute;
	top: 450px;
	left: 1px;
	color:#FFF;
	
}
#fucmsg
{
	font-size: 20px;
	z-index: 100000;
	position: absolute;
	top: 450px;
	left: 1px;
	color:#FFF;
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
#formwrapper
{
	width: 380px;
	height: 75%;
	background-color:#81739D;
	position: fixed;
	top: 22%;
	left: 68.5%;
}
form
{
	width: 380px;
	height: 90%;
	background-color:#81739D;
}
fieldset
{
	background-color: #81739D;
	border: thin;
	border: #C66;
	padding-bottom: 15px;
	z-index: 0;
}
.head3
{
	float: none;
	font-family:"Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", "DejaVu Sans", Verdana, sans-serif;
	font-size: 12px;
	color:#FFF;
	top: -1%;
	position: absolute;
	left: 40%;
}
.head1
{
	font-family: Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
	font-size: 24px;
	color: #FFF;
	position: absolute;
	left: 4%;
	top: 3%;
	background-color: #81739D;
	font-weight: lighter;
}
.head2
{
	font-family: "Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", "DejaVu Sans", Verdana, sans-serif;
	font-size: 12px;
	color: #FFF;
	position: absolute;
	top: 20%;
	left: 30%;
	
}
#mov1
{
	position: absolute;
	left: 55%;
	top: 30%;
}
#mov2
{
	width: 33%;
	position: absolute;
	top: 30%;
	left: 62%;
}
#mov3
{
	position: absolute;
	top: 30%;
}
#mov4
{
	width: 8%;
	position: absolute;
	left: 10%;
	top: 30%;
}
#mov5
{
	position: absolute;
	top: 38%;
}
#mov6
{
	position: absolute;
	top: 38%;
	left: 15%;
}
#mov7
{
	position: absolute;
	top: 44%;
}
#mov8
{
	width: 10%;
	position: absolute;
	top: 44%;
	left: 15%;
}
#mov9
{
	position: absolute;
	top: 44%;
	left: 35%;
	width: 1px;
	height: 28px;
}
#mov10
{
	position: absolute;
	left: 48%;
	top: 44%;
	width: 12%;
}

#mov11
{
	position: absolute;
	top: 44%;
	left: 70%;
}
#mov12
{
	position: absolute;
	width: 8%;
	top: 44%;
	left: 80%;
}
#mov13
{
	position: absolute;
	top: 52%;
	
}	
#mov14
{
	width: 52%;
	position: absolute;
	top: 52%;
	left: 25%;
}
#mov15
{
	position: absolute;
	top: 60%;
}
#mov16
{
	width: 52%;
	position: absolute;
	top: 60%;
	left: 25%;
}
#mov17
{
	position: absolute;
	top: 68%;
}
#mov18
{
	width: 52%;
	position: absolute;
	top: 68%;
	left: 25%;
}
#mov19
{
	position: absolute;
	top: 73%;
}
#mov20
{
	width: 52%;
	position: absolute;
	top: 73%;
	left: 25%;
}
label
{
	width:250px;
	display:block;
	font-family:Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
	font-size:11px;
	color:#FFF;
	margin-top:5px;
	margin-right:0px;
	margin-bottom:5px;
	margin-left:0px;
}
input{
	width:250px;
	border:thin solid  #ED7D31;
	margin-bottom:10px;
}
.btn
{
	width: 70px;
	height: 35px;
	font-family: "Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", "DejaVu Sans", Verdana, sans-serif;
	color: #FFF;
	background-color:  #ED7D31;
	margin-left: 10px;
	float: right;
	position: absolute;
	top: 80%;
	left: 75%;
}
#mov21
{
	position: absolute;
	left: 30%;
	top: 18.5%;
	width: 5%;
}
#mov22
{
	position: absolute;
	left: 35%;
	top: 17.5%;
	font-size: 14px;
}
#mov23
{
	width: 5%;
	position: absolute;
	top: 73%;
}
#mov24
{
	position: absolute;
	top: 73%;
	left: 10%;
}
#nb
{
	position: absolute;
	top: 75%;
	font-family:"Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", "DejaVu Sans", Verdana, sans-serif;
	color:#FFF;
	font-size:9px;
}
#Instruction
{
	position: absolute;
	top: 20%;
	left: 5%;
}
.text-muted {
  color: #999999;
  
  font-family:Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
  
}
.text-primary {
color: #008cba;
 
  font-family:Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
}
.text-warning {
  color: #e99002;
  
  font-family:Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
}
.text-danger {
  color: #f04124;
  
  font-family:Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
}
.text-success {
 color: #43ac6a;
 
  font-family:Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
}

.text-info {
	color: #5bc0de;
	
	font-family: Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
	
}
#Instruction1

{
	font-family:Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
	color:#666;
}



</style>
<script src="sweet-alert.min.js"></script>
<link rel="stylesheet" href="sweet-alert.css">

<?php
$curdate = date("Y-m-d\Th:i");
?>
<script> 
			
			
		function validateForm() 
		{
					
			var x = document.forms["myForm"]["leave"].value;
			var y = document.forms["myForm"]["return"].value;
			
			<?php echo "var z='$curdate';";?>

			if(x < z)
			{
				myForm.leave.focus();
				swal("Invalid Input","Arrival or Departure Can't be Before the Current Date "+x,"error");

				return false;
			}

			if(y <= x)
			{
	
				myForm.leave.focus();
				swal("Invalid Input", "Arrival Can't Be Before or Same as Departure You Entered  "+x,"error");
	
				return false;
			}
	
		}	

</script>


<body>

<div id="lamhead">
<h2> <span id="head">OUTPASS MANAGEMENT SYSTEM   |</span> SPECIAL LEAVE</h2></div>

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
<form name ="myForm" action="requesthod.php" onSubmit ="return validateForm()" method="post">

<fieldset>

<h1 class="head1" align="center"> AMAL JYOTHI COLLEGE OF ENGINEERING KANJIRAPALLY</h1>
<h2  class="head2" align="justify">SPECIAL PURPOSE LEAVE</h2>

<label id="mov1" for="today">Date</label>
<input  id="mov2" name="today" type="text" size="40" maxlength="50" readonly value="<?php echo $curdate ?>">

<label id="mov5" for="studname">Name:</label>
<input id="mov6" name="studname" type="text" size="40" maxlength="50"  value="<?php echo $name; ?>"> 
<label id="mov7" for="adno">Admno:</label>
<input id="mov8" name="adno" type="text" size="40" maxlength="30" readonly value=" <?php echo $user; ?> ">
<label id="mov9" for="branch">Branch:</label>
<input id="mov10" name="branch" type="text" size="40" maxlength="50" readonly value=" <?php echo $branch; ?> ">
<label id="mov11" for="Sem">Sem:</label>
<input id="mov12" name="Sem" type="text" size="40" maxlength="2" readonly value=" <?php echo $sem; ?> ">
<label id="mov13" for="Dest">Destination:</label>
<input id="mov14" name="Dest" type="text" size="40" maxlength="60" required >
<label id="mov15" for="Purpose">Purpose:</label>
<input id="mov16" name="purpose" type="text" size="40" maxlength="60" required>
<label id="mov17" for="leave">Depature:</label>
<input id="mov18"  name="leave" type="datetime-local" size="40" maxlength="50" required>
<label id="mov19" for="return">Arrival:</label>
<input id="mov20"  name="return" type="datetime-local" size="40" maxlength="50" required>


<input class="btn" name="submit"  type="submit" value="Request">
</fieldset>



</form>

</div>




<div id="Instruction">
<h2 id="Instruction1" >Make Sure !</h2>
<p class="text-muted">For getting leave in special purpose you must request to HOD</p>
<p class="text-primary">The Sanction Of leave is based on the mutual decision of Warden and Hod</p>
<p class="text-warning">After requesting to HOD  your request will be forward to warden</p>
<p class="text-danger"> You are not allowed to take more than 2 leave in a month</p>
<p class="text-success">Student must return on the hostel on the approved time</p>
<h2><?php if(isset($_REQUEST['msg']))
			{
			$msg = $_REQUEST['msg'];
			if($msg!=NULL)
			echo $msg;
			$msg =NULL;
			}
			?> </h2>
</div>




</body>
</html>

<?php
}

else

 header("location:login.php");
 ?>
