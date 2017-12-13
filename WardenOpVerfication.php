<?php 
session_start();
if(isset($_SESSION['type'])&& $_SESSION['type']==1)
{

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Outpass Verfication</title>
<link href="pages/CSS/Menu.css" rel="stylesheet" type="text/css" />
<link href="pages/CSS/Main.css" rel="stylesheet" type="text/css" />
<link href="OutpassStatus.css" rel="stylesheet" type="text/css" />
<!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.--><script>var __adobewebfontsappname__="dreamweaver"</script><script src="http://use.edgefonts.net/advent-pro:n1,n4:default;just-me-again-down-here:n4:default;jolly-lodger:n4:default.js" type="text/javascript"></script>
</head>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css'>
<link rel="stylesheet" href="OutpassStatus.css">
<script>
function togglecheckboxes(master,cn){
	
	var cbarray = document.getElementsByClassName(cn);
	for(var i = 0; i < cbarray.length; i++){
		var cb =document.getElementById(cbarray[i].id);
		cb.checked = master.checked;
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

#th{
font-family:Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;	
font-style:normal;
	font-weight:normal;
}
#StatusTable
{
	position: absolute;
	width: 80%;
	height: 75%;
	top: 20%;
	left: 3%;
}
#pager
{
	position: absolute;
	top: 85%;
	left: 37%;
}
.btn1
{
	position: absolute;
	
	top: 25%;
	left: 82%;
}

.btn2
{
	position: absolute;
	left: 87%;
	top: 25%;
}
.btn3
{
	position: absolute;
	
	top: 30%;
	left: 82%;
}

.btn4
{
	position: absolute;
	left: 87%;
	top: 30%;
}
.btn5
{
	position: absolute;
	top:50%
	left:8%;
	top: 35%;
	left: 82%;
}

.btn6
{
	position: absolute;
	left: 87%;
	top: 35%;
}
.btn7
{
	position: absolute;
	top:50%
	left:8%;
	top: 40%;
	left: 82%;
}

.btn8
{
	position: absolute;
	left: 87%;
	top: 40%;
}
.btn9
{
	position: absolute;
	top:50%
	left:8%;
	top: 45%;
	left: 82%;
}

.btn10
{
	position: absolute;
	left: 87%;
	top: 45%;
}
.btn11
{
	position: absolute;
	top:50%
	left:8%;
	top: 50%;
	left: 82%;
}

.btn12
{
	position: absolute;
	left: 87%;
	top: 50%;
}
.btn13
{
	position: absolute;
	top:50%
	left:8%;
	top: 55%;
	left: 82%;
}

.btn14
{
	position: absolute;
	left: 87%;
	top: 55%;
}
#confirm
{
	position:absolute;
	top:82%;
	left:70%
}
#butn
{
	
	width: 50%;
	height: 50px;
	font-family: Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
	color: #fff;
	font-style: normal;
	background-color: #900;
	margin-left: 10px;
	float: left;
	position: absolute;
	left: 1%;
	top: 90%;
	font-size: 16px;
	border-radius:7px;
}
#Sort
{
	position:absolute;
	top:23%;
	left:85%;
}
#view
{
	font-size:18px;
}







</style>



<body>
<div id="lamhead">
<h2> <span id="head">OUTPASS MANAGEMENT SYSTEM |</span> OUTPASS VERIFICATION</h2></div>

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


<div id="StatusTable">
<H1>
<?php  
	$abc= NULL;
	if(isset($_REQUEST['abc']))
		$abc = $_REQUEST['abc'];
	if ($abc != NULL)
	echo $abc;?> </H1>
<table class="table table-striped table-hover">
  <thead id="th">
    <tr>

	  <th>Outpass no.</th>
      <th>Admission no.</th>
    
      <th>Name</th>
      <th>Branch</th>
      <th>Semester</th>
	  <th>Date Of Request</th>
      
      <th>Destination</th>
	  <th>Purpose</th>
      <th>Departure</th>
      <th>Arrival</th>
     
	  <th>Approve</th>
	   <th>Reject</th>
      
       </tr>
  </thead>
	<?php
	  mysql_connect("localhost","root","");
	  mysql_select_db("outpass");
	   $rows= mysql_query("SELECT * FROM requestwarden where status = 0  and type = 0");
	  
	  while($select=mysql_fetch_array($rows))
	  {
		  $no = $select[0];
		 $dor = $select[2];
		 $dest = $select[3];
		 $pur = $select[4];
		 $dep = $select[5];
		 
		 $arv = $select[6];
		 $admno = $select[1];
		 
		 
		 $query =   mysql_query("SELECT name,branch, sem from student where admno = $select[1] ");
		 
		 $new =mysql_fetch_array($query);
		 $name = $new[0];
		 $branch = $new[1];
		 $sem = $new[2];
		
		 
		 
		  ?>
  
  <tbody>
    <tr>
    
    
      <td><?php  echo $no; ?></td>
	  <td><?php echo $admno;  ?></td>
	    <td><?php echo $name;  ?></td>
	  <td><?php echo $branch; ?></td>

	  <td><?php echo $sem; ?></td>

	  <td><?php echo $dor; ?></td>
	    <td><?php echo $dest; ?></td>

	  <td><?php echo $pur; ?></td>

	  <td><?php echo $dep ?></td>

	  <td><?php echo $arv;  ?></td>


      <td>   <form action ="approveoutpass.php" method ="post" ><input type ="hidden" name ="opid" value ="<?php echo $no; ?>"> 
     <input  name ="submit" type="submit" value="Approve"> </form> </td> 
	  <td>  <form action ="rejectoutpass.php" method ="post" > 
	  <input type ="hidden" name ="opid" value ="<?php echo $no; ?>"> 
	  <input  name ="submit" type="submit" value="Reject"> </td>
	  </form>
    </tr>
	  <?php } ?>
    
    
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
