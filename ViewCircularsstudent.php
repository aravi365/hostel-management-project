<?php 
session_start();
if(isset($_SESSION['type'])&& $_SESSION['type']==0)
{
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Circulars</title>
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

#mov1
{
	position: absolute;
	left: 5%;
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
	top: 25%;
	position: absolute;
	left: 5%;
	font-family: Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
	font-size:30px;
	
}
#mov4
{
	position: absolute;
	left: 6%;
	top: 35%;
	width:auto;
	font-family: Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
	font-size:20px;
}


#mov11
{
	position: absolute;
	top: 15%;
	left: 5%;
	font-family: Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
}
#mov12
{
	position: absolute;
	top: 15%;
	left: 15%;
	font-family: Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
	border-color:thin #F93;
}
#mov13
{
	position: absolute;
	top: 20%;
	left: 5%;
	font-family: Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
}
#mov14
{
	position: absolute;
	top: 20%;
	left: 15%;
	font-family: Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
	border-color:thin #F93;
}
#text1
{
	position: absolute;
	left: 15%;
	top: 30%;
	font-family: Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
	border-color:thin #F93;
}
.sm
{
	position:absolute;
	top:600px;
	z-index:100000;
}
#pager
{
	position:fixed;
	top:450px;
	left:500px;
	font-size:40px;
	text-decoration:none;
	font-family:Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
	font-weight:normal;
	color:#333;
}




</style>



<body>
<div id="lamhead">
<h2> <span id="head">OUTPASS MANAGEMENT SYSTEM   |</span> CIRCULARS</h2></div>

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

<form>


<?php

mysql_connect("localhost","root","");
mysql_select_db("outpass");


@$page=$_GET["page"];

if($page=="")
{
	$page1=0;
}
else
{
	$page1=($page*1);
}
$res=mysql_query("SELECT * FROM circulars LIMIT $page1,1");
while($row=mysql_fetch_assoc($res))
{
	$date=$row['date'];
	$subject=$row['sub'];
	$content=$row['content'];
	?>
    <label id="mov1" for="Date">Date: <?php echo $date;?></label>
  
<label  id="mov3"for="Sub">Subject:  <?php echo $subject;?></label>
</br>

</br></br></br></br>
 <label  id="mov4"><?php echo $content;?></label>   

<div id=pager>
    <?php	
}


mysql_connect("localhost","root","");
mysql_select_db("outpass");
@$page=$_GET["page"];
if($page=="")
{
	$page1=0;
}
else
{
	$page1=($page*1);
}



$res=mysql_query("SELECT * FROM circulars LIMIT  $page1,1");

$res1=mysql_query("SELECT * FROM circulars");
$cou=mysql_num_rows($res1);
$a=$cou/1;
$a=ceil($a);
echo "<br>"; echo "<br> More Circulars ";

for($b=0;$b<$a;$b++)
{$c=$b+1;	
?>
	
	
    <a href="ViewCircularsstudent.php?page=<?php echo $b; ?>" style="text-decoration:none "><?php echo $c." "; ?></a>
   
	<?php 
	}
	?>
    

 </div>
</form>
</body>
</html>
<?php
}

else

 header("location:login.php");
 ?>

