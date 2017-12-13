<?php 
session_start();
if(isset($_SESSION['type'])&& $_SESSION['type']==0)
{
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>OutpassStatus</title>
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
a{
	
	text-decoration:none;
	
}

</style>



<body>
<div id="lamhead">
<h2> <span id="head">OUTPASS MANAGEMENT SYSTEM  |</span> REQUEST STATUS</h2></div>

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
<div id="StatusTable">
<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th>Outpass No</th>
      <th>Date Of Request</th>
      <th> Destination</th>
      <th>Purpose</th>
	  <th>Departure </th>
	  <th> Arrival</th>
	  <th> Type</th>
	  <th> HOD APPROVAL</th>
	  <th> STATUS </th>
	  <th> PRINT </th>
	  
    </tr>
  </thead>
  <tbody>
   
    
    <tr class="success">
     <?php
	
@$user=$_SESSION['username'];
	  mysql_connect("localhost","root","");
	  mysql_select_db("outpass");
	
	   $rows= mysql_query("SELECT * FROM requestwarden where admno = $user");
	  
	 while ($select=mysql_fetch_array($rows))
	 {
	  
		  $no = $select[0];
		 $dor = $select[2];
		 $dest = $select[3];
		 $pur = $select[4];
		 $dep = $select[5];
		 
		 $arv = $select[6];
		 $type = $select[7];
		 $status = $select[8];
		 $hod = $select[9];
		 $return =$select[10];
		
		 
		 
		 $query =   mysql_query("SELECT name,branch, sem from student where admno = $user ");
		 
		 $new =mysql_fetch_array($query);
		 $name = $new[0];
		 $branch = $new[1];
		 $sem = $new[2];
		
		 
		 
		  ?>
  
  <tbody>
    <tr>
    
    
        <td><?php echo $no;  ?></td>
	

	  <td><?php echo $dor; ?></td>
	    <td><?php echo $dest; ?></td>

	  <td><?php echo $pur; ?></td>

	  <td><?php echo $dep ?></td>

	  <td><?php echo $arv;  ?></td>
	   <td><?php if($type==0) echo "Regular"; else echo "Special ";  ?></td>
	    <td><?php if($hod ==0) echo "Regular Leave"; else if ($hod == 1) echo "APPROVED ";else if ($hod == 3) echo "PENDING "; else echo "Rejected"; ?></td>
	    <td><?php if($status==0) echo "Pending"; else if ($status == 1) echo "APPROVED "; else echo "Rejected"; ?></td>
	 <td><?php if($status==1){ ?>  <BUTTON > <a href ="print.php?opid=<?php echo $no;?>" >  PRINT </a></BUTTON ></a> <?PHP }?> </td>
		
		
	  
	  </tr>
	 <?php }?>
    </tr>
    
   
  </tbody>
</table> 
</div>



</body>
</html>
<?php
}

else

 header("location:login.php");
 ?>


