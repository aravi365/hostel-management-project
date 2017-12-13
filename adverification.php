<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
	<link href="pages/CSS/Menu.css" rel="stylesheet" type="text/css" />
			<link href="pages/CSS/Main.css" rel="stylesheet" type="text/css" />
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
			<li><a href="EnableAccount.html">Enable Student</a></li>
			<li><a href="DailyRequirmentFORwARDENinput.html">Daily Requirment</a></li>
			<li><a href="Password Changeforwarden.php">Change Password</a></li>
			</ul>
			</li>
			<li ><a href="#">Admission </a>
			<ul>
			<li><a href="Admission Verfication.php">Verfication</a></li>
			<li><a href="Search admissionnobywarden.html">Get Admission no.</a></li>
			</ul>
			</li>
			<li ><a href="#">Outpass</a>
			<ul>
			<li><a href="WardenOpVerfication.php">Verfication</a></li>
			<li><a href="WardenApprovedOutpass.php">Approved </a></li>
			<li><a href="WardendRejectedOutpass.php">Disapproved </a></li>
			<li><a href="whoallarriveforwarden.php">Student Arrival</a></li>
			</ul>
			</li>
			<li ><a href="ParentAlertbyWardeninput.html">Parent Alert</a></li>
			<li ><a href="#">Circular|Complaint</a>
			<ul>
			<li><a href="complaintbox.php">Complaint Box</a></li>
			<li><a href="ComposeCircularbyWarden.php">Compose Circulars </a></li>
			</ul>
			</li>
			<li ><a href="#">Find Student</a>
			<ul>
			<li><a href="Findstudentinputpageforwarrden.php">Search Student</a></li>
			</ul>
			</li>
			<li ><a href="logout.php">Logout</a></li>
			</ul>
			</nav>
			</div>
            <?php
			
			mysql_connect("localhost","root","");
			mysql_select_db("outpass");
			$submit=$_REQUEST['submit'];
			$applicationno = $_REQUEST['appno'];
			
			ECHO $applicationno;
			if($submit)
			{
			$commonpassword=1111;
			$select1=mysql_query("SELECT * FROM studentapp where applicationno = $applicationno");
			echo mysql_error();
			while($rows=mysql_fetch_assoc($select1))
			{
			$name=$rows['name'];
			$brname=$rows['branch'];
			$semname=$rows['sem'];
			$batch=$rows['batch'];
			$hname=$rows['hname'];
			$city=$rows['city'];
			$district=$rows['dist'];
			$state=$rows['state'];
			$country=$rows['country'];
			$zip=$rows['zip'];
			$contphone=$rows['studentphone'];
			$dob=$rows['dob'];
			$email=$rows['studentemail'];
			$mname=$rows['mother'];
			$moccupation=$rows['mjob'];
			$mphone=$rows['mphone'];
			$fname=$rows['father'];
			$foccupation=$rows['fjob'];
			$fphone=$rows['fmobno'];
			$religion=$rows['religion'];
			$lgname=$rows['lg'];
			$lgphone=$rows['lgmob'];
			$lgaddress=$rows['lgaddress'];
			$roomrequirement=$rows['room'];
			}
			
			
			$se=mysql_query("SELECT * FROM users ORDER BY userid DESC LIMIT 1");
			$row=mysql_fetch_assoc($se);
			
			$key=$row['userid'];
			
			
			
			
			$insert=mysql_query("INSERT INTO student( admno,`name`, `branch`, `batch`, `sem`, `mother`, `mjog`, `mphone`, `father`, `fjob`, `fmobno`, `hname`, `city`, `dist`, `state`, `country`, `zip`, `studentphone`, `dob`, `studentemail`, `religion`, `lg`, `lgaddress`, `lgmob`, `room`) VALUES($key+1,'$name','$brname','$batch','$semname','$mname','$moccupation','$mphone','$fname','$foccupation','$fphone','$hname','$city','$district','$state','$country','$zip','$contphone','$dob','$email','$religion','$lgname','$lgaddress','$lgphone','$roomrequirement')");
			echo mysql_error();
			
			$se= mysql_query("SELECT admno FROM student ORDER BY admno DESC LIMIT 1");
			$row=mysql_fetch_assoc($se);
			
			$key=$row['admno'];
			$a= $key;
			
			$insert1=mysql_query("insert into users values ($key,'$commonpassword',0)");
			echo mysql_error();
		
			$se=mysql_query("SELECT userid FROM users ORDER BY userid DESC LIMIT 1");
			$row=mysql_fetch_assoc($se);
			
			$key=$row['userid'];
			
			
			$insert3=mysql_query("insert into users values ($key+1,'$commonpassword',3)");
			$insert3=mysql_query("insert into parent values ($key+1,$a)");
			
			echo mysql_error();
			
			
			
			
		
		
			$select = mysql_query("update studentapp set status = 1 where applicationno = $applicationno ");
			echo mysql_error();
			
			
			
			if($insert&&$insert1)
			{
			$se=mysql_query("SELECT * FROM users ORDER BY userid DESC LIMIT 1");
			while($row=mysql_fetch_assoc($se))
			{
			$key=$row['userid'];
			}
			echo "Admission is Successful";
			echo "
			<br>
			";
			echo "USERID: ". $key;
			echo "
			<br>
			";
			echo  "PASSWORD: 1111" ;
			
			header("location:Admission%20Verfication.php?msg=Admission Successful! </br> Student UserID $a password 1111 </br> Parent UserID $key and password 1111");
			}
			else
			{
		
	header("location:Admission%20Verfication.php?msg=Admission is not Successful");
			echo "Admission is not Successful";
			}
			}
			
			?>
</body>
</html>