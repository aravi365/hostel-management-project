			<?php 
session_start();
if(isset($_SESSION['type'])&& $_SESSION['type']==1)
{

?>
			<!doctype html>
			<html>
			<head>
			<meta charset="utf-8">
			<title>Admission Verfication-OUTPASS MANAGEMENT SYSTEM</title>
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
			#sucmsg
			{
			font-size:24px;
			z-index:10000;
			position:absolute;
			top:450px;
			left:940px;
			}
			#linktonext
			{
				position:absolute;
				left:110%;
				top:10%;
				color:#F00;
				font-family:"Times New Roman", Times, serif;
				font-weight:bold;
				text-decoration:underline;
				
			}
			#fucmsg
			{
			font-size:24px;
			z-index:10000;
			position:absolute;
			top:550px;
			left:940px;
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
			table{
			font-family: Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
			}
			</style>
			<body>
			<div id="lamhead">
			<h2> <span id="head">OUTPASS MANAGEMENT SYSTEM |</span> ADMISSION VERIFICATION</h2></div>
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
			<table class="table table-striped table-hover">
			<thead>
			<tr>
			<th>#</th>
			<th>Name</th>
			<th>Branch</th>
			<th>Batch</th>
			<th>Semester</th>
			<th> Room Requirment</th>
			<th>Local guardian</th>
			<th> Local guardian mob</th>
			<th>Father</th>
			<th>Father Mob</th>
			<th>Mother</th>
			<th>Mother Mob</th>
			<th>Home City</th>
			<th>Action</th>
			</tr>
			</thead>
			<tbody>
            <a href="viewtable.php" target="_blank"><label id="linktonext">VIEW STUDENT DATABASE</label></a>
			<?php
			
		
			
			mysql_connect("localhost","root","");
			mysql_select_db("outpass");
			$select = mysql_query("SELECT * FROM studentapp where status = 0");
			if (mysql_num_rows($select) != 0)
			{
			while($rows=mysql_fetch_assoc($select))
			{
			?>
		
			<tr class="success">
			<td>
			<?php
			$applicationno=$rows['applicationno'];
			echo $applicationno;
			?></td>
			<td>
			<?php
			echo $rows['name'];
			?></td>
			<td><?php
			echo $rows['branch'];
			?></td>
			<td><?php
			echo $rows['batch'];
			?></td>
			<td>
			<?php
			echo $rows['sem'];
			?>
			</td>
			<td>
			<?php
			echo $rows['room'];
			?>
			</td>
			<td>
			<?php
			echo $rows['lg'];
			?>
			</td>
			<td>
			<?php
			echo $rows['lgmob'];
			?>
			</td>
			<td>
			<?php
			echo $rows['father'];
			?>
			</td>
			<td>
			<?php
			echo $rows['fmobno'];
			?>
			</td>
			<td>
			<?php
			echo $rows['mother'];
			?>
			</td>
			<td>
			<?php
			echo $rows['mphone'];
			?>
			</td>
			<td>
			<?php
			echo $rows['city'];
			?>
			</td>
			<td>
			<form action = "av.php" method = "post"> 
			<input type = "hidden" value = "<?php echo $applicationno;?> " name ="appno" > 
			<input	 type='submit' value='Admit' name='submit'> </form></td>
			<td><form action ="rejectadverify.php" method ="post" > 
			<input type = "hidden" value = "<?php echo $applicationno;?> " name ="appno" > 
			<input  type='submit' value='Reject' name='submit1'></form></td>

			</form>
			
			</td>
			</tr>
			<h1> <?php
			}
			}
			
			else
			echo " No pending approvals " ;
			
			?> </h1>
			<h1> <?php if(isset($_REQUEST['msg']))
			{
			$msg = $_REQUEST['msg'];
			if($msg!=NULL)
			echo $msg;
			$msg =NULL;
			}
			?> </h1>
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