<?php 
session_start();
if(isset($_SESSION['type'])&& $_SESSION['type']==1)
{

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Update Batch-Outpass Management System</title>
<link href="pages/CSS/Menu.css" rel="stylesheet" type="text/css" />
<link href="pages/CSS/Main.css" rel="stylesheet" type="text/css" />
<!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.--><script>var __adobewebfontsappname__="dreamweaver"</script><script src="http://use.edgefonts.net/advent-pro:n1,n4:default;just-me-again-down-here:n4:default;jolly-lodger:n4:default.js" type="text/javascript"></script>
</head>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css'>
<link rel="stylesheet" href="OutpassStatus.css">
<style type="text/css">
.back1 {
	width: 100%;
	position: fixed;
	z-index: -100;
	height:auto;
	left: 0px;
	top: 0px;
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

#StatusTable
{
	position: absolute;
	width: 80%;
	height: 75%;
	top: 25%;
	left: 10%;
}
#pager
{
	position: absolute;
	top: 75%;
	left: 37%;
}

table
{
	font-family: Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
	font-size: 14px;
}
#iot1 
{
	font-size:44px;
	font-family:Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
	font-weight:normal;
	left:220px;
	position:absolute;
	top:290px;
}
#iot100 
{
	font-size:44px;
	font-family:Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
	font-weight:normal;
	left:220px;
	position:absolute;
	top:400px;
}
#io1
{
	width:24%;
	height:7%;
	position:absolute;
	left:480px;
	font-size:24px;
	top:300px;
}
#iot12
{
	font-size:44px;
	font-family:Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
	font-weight:normal;
	left:220px;
	position:absolute;
}

#io2
{
	width:24%;
	height:7%;
	position:absolute;
	left:480px;
	font-size:24px;
	
}
#io3
{
	width:24%;
	height:7%;
	position:absolute;
	left:480px;
	font-size:24px;
	
}
#io4
{
	width:24%;
	height:7%;
	position:absolute;
	left:480px;
	font-size:24px;
	
}
#iot13
{
font-size:44px;
	font-family:Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
	font-weight:normal;
	left:220px;
	position:absolute;
}
#iot3
{
	font-size:44px;
	font-family:Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
	font-weight:normal;
	left:220px;
	position:absolute;
}
#iot14
{
	font-size:44px;
	font-family:Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
	font-weight:normal;
	left:220px;
	position:absolute;
}
#io5
{
	width:24%;
	height:7%;
	position:absolute;
	left:480px;
	font-size:24px;

}
#iot56
{
	font-size:44px;
	font-family:Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
	font-weight:normal;
	left:220px;
	position:absolute;

}
#io6
{
	
	width:24%;
	height:7%;
	position:absolute;
	left:480px;	
	font-size:24px;
	
}
#btnadd1
{
	top:300px;
	color:#0FF;
	background:#096;
	width:100px;
	height:40px;
	position:absolute;
	left:900px;
}
#btndelete1
{
	top:430px;
	color:#0FF;
	background:#096;
	width:100px;
	height:40px;
	position:absolute;
	left:900px;
}
#deletebat
{
	font-size:44px;
	font-family:Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
	font-weight:normal;
	left:550px;
	position:absolute;
	top:400px;
	
	
}
#mgs1
{
	font-size:64px;
	font-family:Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
	font-weight:normal;
	z-index:1000000;
	position:absolute;
	top: 200px;
	left: 400px;
}
</style>



<body>
<div id="lamhead">
<h2> <span id="head">OUTPASS MANAGEMENT SYSTEM  |</span> UPDATE BATCH</h2></div>

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



<?php
 mysql_connect("localhost","root","");
	  mysql_select_db("outpass");
	  $select =mysql_query("SELECT * FROM batch ");
	  $getbatch=$_POST['delete'];
	 if(mysql_num_rows($select)!=0)
	 {
		 
			 
			 $delete=mysql_query("DELETE FROM batch WHERE batname='$getbatch'");
			 ?>
                 <div id="mgs1">
                 <?php
			 if($delete)
			 {
				
				 echo "Batch is Deleted";
			 }
			 else
			 {
				 echo " Batch is not deleted";
			 }
		  ?>
                 </div>
                 <?php
	 }
	 ?>






</body>
</html>
<?php

}

else

 header("location:login.php");
 ?>











