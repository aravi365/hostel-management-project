
<?php 
session_start();
if(isset($_SESSION['type'])&& $_SESSION['type']==1)
{

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
<link href="pages/CSS/Menu.css" rel="stylesheet" type="text/css" />
<link href="pages/CSS/Main.css" rel="stylesheet" type="text/css" />

<!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.--><script>var __adobewebfontsappname__="dreamweaver"</script><script src="http://use.edgefonts.net/advent-pro:n1,n4:default;just-me-again-down-here:n4:default;jolly-lodger:n4:default.js" type="text/javascript"></script>
</head>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css'>
<link rel="stylesheet" href="OS.css">


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
table {
    border-collapse: collapse;
    width: 90%;
	position:absolute;
	top:25%;
	left:5%;
	
	
	
}

th, td {
    text-align: left;
    padding: 08px;
}

tr:nth-child(even)
{
	background-color: #f2f2f2;
	}

th {
    background-color:#14B7A5;
    color: white;
}

#pager
{
	position: absolute;
	top: 85%;
	left: 37%;
}


#head
{
	font-size:24px;
}





</style>



<body>

<div id="lamhead">
<h2> <span id="head">OUTPASS  MANAGEMENT  SYSTEM |</span> STUDENT DATABASE</h2></div>



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

<table>
    <thead id="th">
    <tr>

	  <th>ID.</th>
      <th>Name</th>
    
      <th>Sem</th>
     <th>Branch</th>
      
       </tr>
  </thead>
 
  <?php
	
	  mysql_connect("localhost","root","");
	  mysql_select_db("outpass");

	   
	  $rows=mysql_query("SELECT * from colltable");
	  mysql_error();
	  while($select=mysql_fetch_array($rows))
	  {
		  $attrib1=$select['id'];
		  $attrib2=$select['name'];
		  $attrib3=$select['sem'];
		  $attrib4=$select['branch'];
	  
		 
		 
		  ?>
  
  <tbody>
    <tr>
    
    
      <td><?php  echo $attrib1; ?></td>
	  <td><?php echo $attrib2;  ?></td>
	    <td><?php echo $attrib3;  ?></td>
	  <td><?php echo $attrib4; ?></td>

	  


  
    </tr>
	  <?php } ?>
    
  
  
</table>



</body>
</html><?php

}

else

 header("location:login.php");
 ?>
