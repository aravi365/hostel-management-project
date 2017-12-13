<?php 
session_start();
if(isset($_SESSION['type'])&& $_SESSION['type']==2)
{
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Arrival/Departure Details- OUTPASS  MANAGEMENT SYSTEM</title>
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
	top: 40%;
	left: 40%;
	position: absolute;
	font-family:Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
	COLOR:#069;
}
#mov2
{
	top: 40%;
	left: 50%;
	position: absolute;
	border:solid #069;
}
#head
{
	font-size:24px;
}

#mov3
{
	top: 60%;
	left: 40%;
	position: absolute;
	font-family:Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
	COLOR:#069;
}
#mov4
{
	top: 50%;
	left: 50%;
	position: absolute;
	border:solid #ED7D31;
}
.btn
{
	width: 100px;
	height: 50px;
	font-family: Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
	color: #fff;
	font-style: normal;
	background-color: #06C;
	margin-left: 10px;
	float: left;
	position: absolute;
	left: 40%;
	top: 50%;
	font-size:24px;
}
h1{
	top: 70%;
	left: 50%;
	position: absolute;
	
}

</style>



<body>
<div id="lamhead">
<h2> <span id="head">OUTPASS  MANAGEMENT SYSTEM|</span> ARRIVAL|DEPARTURE</h2></div>


 <img class="back1" src="Picture2.png" width="1366" height="768">
 <div id="MenuHolder">
<nav>
<ul>
<li ><a href="HODhome.php">Home</a></li>
<li ><a href="passwordchangeforhod.php">Change Password</a>


<li ><a href="searchbyhod.php">Find Admission No.</a></li>



<li ><a href="leaveverficationhod.php">Leave Request </a>
<li ><a href="#">Approve|Disapprove </a>
<ul>
<li><a href="happrovedoutpass.php">Approved </a></li>
<li><a href="hrejectedoutpass.php">Disapproved </a></li>

</ul>
</li>


</li>
<li ><a href="hod arrivaldepartureinput.php">Arrival|Departure</a>




</li>
<li ><a href="hodcheckdiscipline.php">Indisiplinary List </a></li>





</li>









<li ><a href="logout.php">Logout</a></li>

</ul>
</nav>
</div>

 <img class="back1" src="Picture2.png" width="1366" height="768">

<label id="mov1" for="admissionno">Admission No:</label>
<form action ="hdeparv.php" method ="post" >
<input  id="mov2" name="admno" type="text" size="10" align="middle" required>

<h1> <?php  
	$abc= NULL;
	if(isset($_REQUEST['abc']))
		$abc = $_REQUEST['abc'];
	if ($abc != NULL)
	echo $abc;?> </h1>
<div class="box">
	<a class="button" href=""><input class="btn" name="submit" type="submit" value="Search"></a>
</div>
</form>

</body>
</html>

<?php
}

else

 header("location:login.php");
 ?>