<?php 
session_start();
if(isset($_SESSION['type'])&& $_SESSION['type']==0)
{
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>edit details</title>
<link href="pages/CSS/Menu.css" rel="stylesheet" type="text/css" />
<link href="pages/CSS/Main.css" rel="stylesheet" type="text/css" />
<script>
function myFunction() {
    if (confirm("Your Details is Successfuly updated") == true) {
        
    } 
    
}
</script>
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
.icons
{
	position: absolute;
	top: 2.5%;
	left: 95.5%;
	
}
icons:hover
{
	-webkit-box-shadow:2px 2px 4px 4px #555;
	-moz-box-shadow:2px 2px 4px 4px #555;
	-ms-box-shadow:2px 2px 4px 4px #555;
	-o-box-shadow:2px 2px 4px 4px #555;
	box-shadow:2px 2px 4px 4px #555;
	-webkit-transform:scale(1.2);
	-moz-transform:scale(1.2);
	-ms-transform:scale(1.2);
	-o-transform:scale(1.2);
	transform:scale(1.2);
	-webkit-opacity:1;
	-moz-opacity:1;
	opacity:1;
	z-index:999;
}
.icon2
{
	
	top: 0%;
	left: 95.5%;
	border-radius: 100%;
	
	position:absolute;
	
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
#formwrapper
{
	width: 88%;
	height: 90%;
	background-color:transparent;
	position: absolute;
	top: 85px;
	left: 6%;
	z-index:-50;
}
form
{
	width:100%;
	height:90%;
	background-color:#FFF;
	position:fixed;
	
}
fieldset
{
	background-color:transparent;
	border:thin;
	border:#CCC;
}

label
{
	width: 110px;
	display: block;
	font-family: "Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", "DejaVu Sans", Verdana, sans-serif;
	font-size: 11px;
	color: #CC3399;
	margin-top: 5px;
	margin-right: 0px;
	margin-bottom: 5px;
	margin-left: 1px;
}
input
{
	width: 250px;
	border: thin solid #EFCE5A;
	margin-bottom: 10px;
}
.btn
{
	width: 175px;
	height: 59px;
	font-family: "Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", "DejaVu Sans", Verdana, sans-serif;
	color:#FFF;
	font-weight:lighter;
	background-color:#C03;
	margin-left: 10px;
	float: right;
	position: absolute;
	top: 65%;
	left: 70%;
}
.fo
{
	left: 480px;
	float: none;
	position: absolute;
	top: 519px;
}
.app
{
	width: 16px;
}
.fo1
{
	position: absolute;
	left: 478px;
	top: 481px;
}
#appbox
{
	width: 55%;
	color: #FFFFFF;
	background-color: #DA0C6D;
	position: absolute;
	left: 1.5%;
	top: 93%;
	font-family: Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
}
#mov1
{
	float: none;
	right: 0%;
	left: 15px;
	top: 43px;
	position: absolute;
}
#mov2
{
	position: absolute;
	top: 67px;
	left: 15px;
	width: 132px;
}
#mov3
{
	position: absolute;
	top: 7%;
}
#mov4
{
	position: absolute;
	top: 10%;
}
#mov5
{
	position: absolute;
	top: 7%;
	left: 30%;
}
#mov6
{
	position: absolute;
	top: 10%;
	width: 14%;
	left: 30%;
}
#mov7
{
	position: absolute;
	top: 7%;
	left: 50%;
}
#mov8
{
	position: absolute;
	top: 10%;
	left: 50%;
	width: 7%;
}
#mov9
{
	position: absolute;
	top: 7%;
	left: 70%;
}
#mov10
{
	position: absolute;
	top: 10%;
	left: 70%;
	width: 7%;
}
#mov11
{
	position: absolute;
	top: 23%;
}
#mov12
{
	position: absolute;
	top: 26%;
	left: 1.5%;
}
#mov13
{
	position: absolute;
	top: 23%;
	left: 30%;
}
#mov14
{
	position: absolute;
	left: 30%;
	top: 26%;
	width: 14%;
}
#mov15
{
	position: absolute;
	top: 23%;
	left: 50%;
}
#mov16
{
	position: absolute;
	top: 26%;
	left: 50%;
	width: 14%;
}


#sucmsg
{
	font-size:36px;
	z-index:10000;
	position:absolute;
	top:550px;
	left:940px;
}
#fucmsg
{
	font-size:36px;
	z-index:10000;
	position:absolute;
	top:550px;
	left:940px;
}










#mov11a
{
	position: absolute;
	top: 15%;
}
#mov12a
{
	position: absolute;
	top: 19%;
	left: 1.5%;
}
#mov13a
{
	position: absolute;
	top: 15%;
	left: 30%;
}
#mov14a
{
	position: absolute;
	left: 30%;
	top: 19%;
	width: 14%;
}
#mov15a
{
	position: absolute;
	top: 15%;
	left: 50%;
}
#mov16a
{
	position: absolute;
	top: 19%;
	left: 50%;
	width: 14%;
}
#mov17
{
	position: absolute;
	top: 29%;
}
#mov18
{
	position: absolute;
	top: 32%;
	left: 1.5%;
}
#mov19
{
	position: absolute;
	top: 35%;
}
#mov20
{
	position: absolute;
	top: 38%;
	left: 1.5%;
}
#mov21
{
	position: absolute;
	top: 35%;
	left: 30%;
}
#mov22
{
	position: absolute;
	top: 38%;
	left: 30%;
	width: 14%;
}
#mov23
{
	position: absolute;
	top: 35%;
	left: 50%;
}
#mov24
{
	position: absolute;
	top: 38%;
	left: 50%;
	width: 14%;
}
#mov25
{
	position: absolute;
	top: 35%;
	left: 70%;
}
#mov26
{
	position: absolute;
	top: 38%;
	left: 70%;
	width: 14%;
}
#mov27
{
	position: absolute;
	top: 41%;
	left: 1.5%;
}
#mov28
{
	position: absolute;
	top: 44%;
	left: 1.5%;
}
#mov29
{
	position: absolute;
	top: 41%;
	left: 30%;
}
#mov30
{
	position: absolute;
	top: 44%;
	left: 30%;
	width: 14%;
}
#mov31
{
	position: absolute;
	top: 47%;
	left: 1.5%;
}
#mov32
{
	top: 50%;
	position: absolute;
	left: 1.5%;
}
#mov33
{
	position: absolute;
	top: 47%;
	left: 30%;
}
#mov34
{
	top: 50%;
	position: absolute;
	left: 30%;
	width:14%;
}
#mov35
{
	position: absolute;
	top: 54%;
	left: 1.5%;
}
#mov36
{
	top: 58%;
	left: 1.5%;
	position: absolute;
}
#mov37
{
	position: absolute;
	top: 60%;
	left: 1.5%;
}
#mov38
{
	position: absolute;
	top: 63%;
	left: 1.5%;
}
textarea
{
	width:14%;
	border:thin solid #EFCE5A;
	margin-bottom:auto;
}

#mov39
{
	top: 60%;
	left: 30%;
	position: absolute;
}
#mov40
{
	position: absolute;
	top: 63%;
	left: 30%;
}
#mov41
{
	position: absolute;
	top: 60%;
	left: 50%;
}
#mov42
{
	top: 63%;
	left: 50%;
	position: absolute;
	width:14%;
}
#mov43
{
	position: absolute;
	top: 70%;
	left: 1.5%;
}
#mov44
{
	position: absolute;
	top: 74%;
	left: 1.5%;
	width: 2%;
}
#mov45
{
	position: absolute;
	top: 73.5%;
	left: 4%;
}
#mov46
{
	position: absolute;
	top: 74%;
	left: 8%;
	width: 2%;
}
#mov47
{
	position: absolute;
	top: 73.5%;
	left: 10%;
}
#mov48
{
	position: absolute;
	top: 74%;
	left: 14%;
	width: 2%;
}
#mov49
{
	position: absolute;
	top: 73.5%;
	left: 16%;
}
#mov50
{
	position: absolute;
	top: 70%;
	left: 65%;
}
#mov51
{
	position: absolute;
	top: 74%;
	left: 55%;
}
#mov52
{
	position: absolute;
	top: 73.5%;
	left: 69%;
}
#mov53
{
	position: absolute;
	top: 74%;
	left: 74%;
	width: 2%;
}
#mov54
{
	position: absolute;
	top: 73.5%;
	left: 76%;
}
#rr
{
	position: absolute;
	top: 72%;
}
#RoomRequirement_0
{
	position: absolute;
	top: 20px;
	left: -19px;
}
#RoomRequirement_1
{
	position: absolute;
	top: 4px;
	left: -22px;
}
#RoomRequirement_2
{
	position: absolute;
	top: 83px;
	left: -22px;
}

#rr1
{
	position: absolute;
	top: 40px;
	left: 1px;
}
#rr2
{
	left: 1px;
	top: 55px;
}
#mr1
{
	position: absolute;
	top: 74%;
	left: 65%;
}
#MessRequirment_0
{
	position: absolute;
	left: -16px;
}
#mr2
{
	position: absolute;
	top: 78%;
	left: 65%;
}
#MessRequirment_1
{
	position: absolute;
	left: -16px;
	top: -3px;
}
#ext1
{

	position: absolute;
	top: 26.5%;
	left: 60%;	
	
}
#ext2
{

	position: absolute;
	top: 26.5%;
	left: 72%;
	font-size:12.5px;	
	
}
#ext1a
{

	position: absolute;
	top: 18.5%;
	left: 60%;	
	
}
#ext2a
{

	position: absolute;
	top: 18%;
	left: 72%;
	font-size:12.5px;	
	
}
#prname
{
	color:#FFF;
	background-color:#096;
	font-family:Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
	font-weight:lighter;
	font-size:28px;
	float:none;
	text-align:end;
	position:absolute;
	top:-2%;
	width: 98.5%;
}
#home
{
	float:right;
	font-family:Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
	font-size:12px;
	font-weight:normal;
	position:absolute;
	top:-2%;
	z-index:999;
	font-size:24px;
	left:94%;
	color:#FFF;

}
#MenuHolder1
{
	width:1350px;
	height:auto;
	margin-top:5%;
	margin-left:10px;
	margin-right:7px;
	clear:both;
	overflow:auto;
	position:fixed;
	z-index:999;
	top:-10px;
	left:0px;
}
</style>
<script>
function FillBilling(f) {
  if(f.localguardfather.checked == true) {
    f.lgname.value = f.fname.value;
    f.lgphone.value = f.fphone.value;
	f.lgaddress.value= 'Same as Student';
  }
  else if(f.localguardmother.checked == true) {
    f.lgname.value = f.mname.value;
    f.lgphone.value = f.mphone.value;
	f.lgaddress.value= 'Same as Student';
  }
}
</script>

<body>
<div id="lamhead">
<h2> <span id="head">OUTPASS MANAGEMENT SYSTEM   |</span> EDIT DETAILS</h2></div>
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


<?php
@$user=$_SESSION['username'];
if($user)
{
	$connect=mysql_connect("localhost","root","") or die("Could'nt connect");
mysql_select_db("outpass")or die("Could'nt find db");
$query = mysql_query("SELECT * FROM student WHERE admno='$user'");
$numrows =mysql_num_rows($query);
if($numrows>0)
{
	while($row=mysql_fetch_assoc($query))
	{
		$name=$row['name'];
		$branch=$row['branch'];
		$sem=$row['sem'];
		$batch=$row['batch'];
		$mother=$row['mother'];
		$mjog=$row['mjog'];
		$mphone=$row['mphone'];
		
		$fname=$row['father'];
		$fjob=$row['fjob'];
		$fmob=$row['fmobno'];
		$hname=$row['hname'];
		$city=$row['city'];
		$dist=$row['dist'];
		$state=$row['state'];
		$country=$row['country'];
		$zip=$row['zip'];
		$studentphone=$row['studentphone'];
		$dob=$row['dob'];
		$studentemail=$row['studentemail'];
		$religion=$row['religion'];
		$lg=$row['lg'];
		$lgaddress=$row['lgaddress'];
		$lgmob=$row['lgmob'];
		
		
		
		
	}
}
}
?>
 <img class="back1" src="Picture2.png" width="1366" height="768">
<div id="formwrapper">
<form action="editdetailbystudent.php" method="post">
<fieldset>
<label id="mov3" for="name">Name:</label>
<input id="mov4" name="name" type="text" size="40" maxlength="100" value="<?php  echo $name; ?>" readonly>
<label  id="mov5"for="brname">Branch:</label>
<select id="mov6" name="brname" >
<option value="<?php  echo $branch; ?>"><?php  echo $branch; ?></option>
<option>AUE</option>
<option>CE</option>
<option>CSE</option>
<option>CHE</option>
<option>ECE</option>
<option>EEE</option>
<option>IT</option>
<option>ME</option>
<option>MTG</option>

</select>
<label  id="mov9"for="semname">Semester:</label>
<select  id="mov10" name="semname"  value="<?php  echo $sem; ?>">
<option value="<?php  echo $sem; ?>"><?php  echo $sem; ?></option>
<option>S1</option>
<option>S2</option>
<option>S3</option>
<option>S4</option>
<option>S5</option>
<option>S6</option>
<option>S7</option>
<option>S8</option>

</select>

<label id="mov7"for="batname">Batch:</label>
<select  id="mov8" name="batch"   value="<?php  echo $batch; ?>">
<option value="<?php  echo $batch; ?>"><?php  echo $batch; ?></option>
<option>2012-2016</option>
<option>2013-2017</option>
<option>2014-2018</option>
<option>2015-2019</option>
<option>2016-2020</option>
</select>



<label id="mov17" for="hname">House Name:</label>
<input id="mov18" name="hname" type="text" size="40" maxlength="100" value="<?php  echo $hname; ?>" >


<label id="mov19" for="sname ">HomeTown/City:</label>
<input  id="mov20" name="city" type="text" size="40" maxlength="50" value="<?php  echo $city; ?>">
<label  id="mov21" for="dname">District:</label>
<select id="mov22" name="district"   value="<?php  echo $dist; ?>" >
<option value="<?php  echo $dist; ?>"><?php  echo $dist; ?>-</option>
<option>Alappuzha</option>

<option>Ernakulam</option>

<option>Idukki</option>

<option>Kannur</option>

<option>Kasaragod</option>

<option>Kollam</option>

<option>Kottayam</option>

<option>Kozhikode</option>

<option>Malappuram</option>

<option>Palakkad</option>

<option>Pathanamthitta</option>

<option>Thiruvananthapuram</option>

<option>Thrissur</option>

<option>Wayanad</option>

<option>Other</option>
</select>



<label  id="mov23"for="stname">State:</label>
<select  id="mov24" name="state" type="text" value="<?php  echo $state; ?>">
<option value="<?php  echo $state; ?>"><?php  echo $state; ?></option>
<option>Andaman and Nicobar Islands </option>

<option>Andhra Pradesh</option>

<option>Arunachal Pradesh</option>

<option>Assam</option>

<option>Bihar</option>

<option>Chandigarh </option>

<option>Chhattisgarh</option>

<option>Dadra and Nagar Haveli </option>

<option>Daman and Diu </option>

<option>National Capital Territory of Delhi </option>

<option>Goa</option>

<option>Gujarat</option>

<option>Haryana</option>

<option>Himachal Pradesh</option>

<option>Jammu and Kashmir</option>

<option>Jharkhand</option>

<option>Karnataka</option>

<option>Kerala</option>

<option>Lakshadweep </option>

<option>Madhya Pradesh</option>

<option>Maharashtra</option>

<option>Manipur</option>

<option>Meghalaya</option>

<option>Mizoram</option>

<option>Nagaland</option>

<option>Odisha</option>

<option>Puducherry </option>

<option>Punjab</option>

<option>Rajasthan</option>

<option>Sikkim</option>

<option>Tamil Nadu</option>

<option>Telangana</option>

<option>Tripura</option>

<option>Uttar Pradesh</option>

<option>Uttarakhand</option>

<option>West Bengal</option>
<option>Other</option>
</select>


<label  id="mov25" for="ctname">Country:</label>
<select id="mov26" name="country" type="text" value="<?php  echo $country; ?>" >
<option value="<?php  echo $country; ?>"><?php  echo $country; ?></option>
<option>India</option>
<option>Others</option>
</select>

<label id="mov27" for="pname">ZIP Code:</label>
<input id="mov28" name="zip" type="number" size="30" maxlength="10" value="<?php  echo $zip; ?>">
<label id="mov29" for="contphone">Student no:</label>
<input id="mov30" name="contphone" type="tel" size="40" maxlength="10" pattern="[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]" value="<?php  echo $studentphone;  ?>">
<label  id="mov31"for="dob">Date Of Birth</label>
<input id="mov32" name="dob" type="date"  size="30" value="<?php  echo $dob; ?>">
<label  id="mov33" for="email">Email:</label>
<input id="mov34" name= "email" type="email" size="40" maxlength="100" value="<?php  echo $studentemail; ?>" >





<label id="mov11a" for="fname">Father Name:</label>
<input id="mov12a" name="fname" type="text" size="40" maxlength="100" value="<?php  echo $fname; ?>">
<label id="mov13a" for="foccupation">Occupation:</label>

<input id="mov14a" name="foccupation" type="text" size="40" maxlength="100"  value="<?php  echo $fjob; ?>">
<label id="mov15a" for="fphone">Mob.no:</label>
<input id="mov16a" name="fphone" type="tel" size="40"  pattern="[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]" maxlength="25" value="<?php  echo $fmob; ?>">



 



<label id="mov11" for="mname">Mother Name:</label>
<input id="mov12" name="mname" type="text" size="40" maxlength="100" value="<?php  echo $mother;  ?>">
<label id="mov13" for="moccupation">Occupation:</label>
<input id="mov14" name="moccupation" type="text" size="40" maxlength="100" value="<?php  echo $mjog;  ?>" >
<label id="mov15" for="mphone">Mob.no:</label>
<input id="mov16" name="mphone" type="tel" size="40" maxlength="10" pattern="[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]" value="<?php  echo $mphone;  ?>">





<label  id="mov35" for="religion">Religion:</label>

<label  id="mov37" for="lgname">Local Guardian:</label>
 <input  id="mov38" name="lgname" type="text" size="40" maxlength="100" value="<?php  echo $lg;  ?>">
 <label id="mov39"for="lgaddress">Address:</label>
 <textarea  id="mov40" name="lgaddress" cols="40" rows="7"><?php  echo $lgaddress;  ?></textarea>
 <label  id="mov41"for="lgphone">Mob.no:</label>

 <input  id="mov42" name="lgphone" type="tel" size="40" pattern="[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]"  maxlength="15"  value="<?php  echo $lgmob; ?>">

 

 
  

<select id="mov36" name="religion" value="<?php  echo $religion;  ?>" >
<option value="<?php  echo $religion; ?>"><?php  echo $religion; ?></option>
<option>Hindu</option>
<option>Chirstian</option>
<option>Muslim</option>
<option>Others</option>
</select>

<input class="btn" name="submit"  type="submit" value="Change Details">`
</fieldset>
</form>
</div>

</div>
</div>
<?php
		@$name1=$_POST['name'];	
		@$branch1=$_POST['brname'];
		@$sem1=$_POST['semname'];
		@$batch1=$_POST['batch'];
		@$mother1=$_POST['mname'];
		@$mjog1=$_POST['moccupation'];
		@$mphone1=$_POST['mphone'];
		@$fname1=$_POST['fname'];
		@$fjob1=$_POST['foccupation'];
		@$fmob1=$_POST['fphone'];
		@$hname1=$_POST['hname'];
		@$city1=$_POST['city'];
		@$dist1=$_POST['district'];
		@$state1=$_POST['state'];
		@$country1=$_POST['country'];
		@$zip1=$_POST['zip'];
		@$studentphone1=$_POST['contphone'];
		@$dob1=$_POST['dob'];
		@$studentemail1=$_POST['email'];
		@$religion1=$_POST['religion'];
		@$lg1=$_POST['lgname'];
		@$lgaddress1=$_POST['lgaddress'];
		@$lgmob1=$_POST['lgphone'];
		
		@$submit=$_POST['submit'];
		if($submit)
		{
		//$insert=mysql_query("INSERT INTO tempupdate(name,branch,batch,sem,father,fjob,fmobno,mother,mjob,mphone,house,street,dist,state,country,dob,zip,studentphone,email,religion,localguardian,lgaddress,lgphone) VALUES('$name1','$branch1','$batch1','$sem1','$fname1','$fjob1','$fmob1','$mother1','$mjog1','$mphone1','$hname1','$city1','$state1','$dist1','$country1','$dob1','$zip1','$studentphone1','$studentemail1','$religion1','$lg1','$lgaddress1','$lgmob1')")or die("Cannot insert");
		
		 
		$query = mysql_query("SELECT * FROM student WHERE admno='$user'");
			$numrows =mysql_num_rows($query);
			if($numrows>0)
			{
				while($row=mysql_fetch_assoc($query))
				{
					
	
	
	//INSERT INTO `outpass`.`student` (`admno`, `name`, `branch`, `batch`, `sem`, `mother`, `mjog`,
	// `mphone`, `father`, `fjob`, `fmobno`, `hname`, `city`, `dist`, `state`, `country`, `zip`, `studentphone`, 
	
						$update=mysql_query("UPDATE student SET name='$name1'  WHERE admno='$user'");
						$update1=mysql_query("UPDATE student SET branch='$branch1'  WHERE admno='$user'");
						$update2=mysql_query("UPDATE student SET batch='$batch1'  WHERE admno='$user'");
						$update3=mysql_query("UPDATE student SET sem='$sem1'  WHERE admno='$user'");
						$update4=mysql_query("UPDATE student SET mother='$mother1'  WHERE admno='$user'");
						$update5=mysql_query("UPDATE student SET mjog='$mjog1'  WHERE admno='$user'");
						$update6=mysql_query("UPDATE student SET  mphone='$mphone1'  WHERE admno='$user'");
						$update7=mysql_query("UPDATE student SET father='$fname1'  WHERE admno='$user'");
						$update8=mysql_query("UPDATE student SET fjob='$fjob1'  WHERE admno='$user'");
						$update9=mysql_query("UPDATE student SET fmobno='$fmob1'  WHERE admno='$user'");
						$update10=mysql_query("UPDATE student SET hname='$hname1'  WHERE admno='$user'");
						$update11=mysql_query("UPDATE student SET city='$city1'  WHERE admno='$user'");
						$update12=mysql_query("UPDATE student SET dist='$dist1'  WHERE admno='$user'");
						$update13=mysql_query("UPDATE student SET state='$state1'  WHERE admno='$user'");
						$update14=mysql_query("UPDATE student SET country='$country1'  WHERE admno='$user'");
						$update15=mysql_query("UPDATE student SET zip='$zip1'  WHERE admno='$user'");
						$update16=mysql_query("UPDATE student SET studentphone='$studentphone1'  WHERE admno='$user'");
						$update17=mysql_query("UPDATE student SET dob='$dob1'  WHERE admno='$user'");
						//`dob`, `studentemail`, `religion`, `lg`, `lgaddress`, `lgmob`, `room`
						$update18=mysql_query("UPDATE student SET studentemail='$studentemail1'  WHERE admno='$user'");
						$update19=mysql_query("UPDATE student SET religion='$religion1' WHERE admno='$user'");
						$update20=mysql_query("UPDATE student SET lg='$lg1'  WHERE admno='$user'");
						$update21=mysql_query("UPDATE student SET lgaddress='$lgaddress1'  WHERE admno='$user'");
						$update22=mysql_query("UPDATE student SET lgmob='$lgmob1'  WHERE admno='$user'");
						
						if($update1 || $update2 || $update3 ||$update4 ||$update5  ||$update6 ||$update7 ||$update8 ||$update9 ||$update10 ||$update11 ||$update12 ||$update13 ||$update14 || $update15 ||$update16  ||$update17 ||$update18 ||$update19 ||$update20 ||$update21 ||$update22)
						{?>
                       <div id="sucmsg">
							<p>Updation is Successful</p>
							
                            </div>
							<?php
							
							
						}
						else
						{
							?>
							<div id="fucmsg">
							<p>Updation is not successful</p>
                            </div>
                            <?php
						}
							
						
						
				}
			}
			}
?>


</body>
</html>

<?php
}

else

 header("location:login.php");
 ?>

