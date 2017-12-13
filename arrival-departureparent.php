<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ParentArrival/Departure</title>
<link href="pages/CSS/Menu.css" rel="stylesheet" type="text/css" />
<link href="pages/CSS/Main.css" rel="stylesheet" type="text/css" />

<!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.--><script>var __adobewebfontsappname__="dreamweaver"</script><script src="http://use.edgefonts.net/advent-pro:n1,n4:default;just-me-again-down-here:n4:default;jolly-lodger:n4:default.js" type="text/javascript"></script>
</head>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css'>
<link rel="stylesheet" href="OS.css">


<style type="text/css">
#head
{
	font-size:24px;
}
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
	top: -1.5%;
	left: 0.8%;
	width: 98.5%;
	color:#666;
	font-style:normal;
	font-weight:normal;
	font-size:11px;
	z-index:999;
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
</style>


<body>

<div id="lamhead">
<h2> <span id="head">OUTPASS MANAGEMENT SYSTEM  |</span> ARRIVAL/DEPARTURE</h2></div>


 <img class="back1" src="Picture2.png" width="1366" height="768">
 <div id="MenuHolder">
<nav>
<ul>
<li ><a href="parenthome.php">Home</a></li>
<li ><a href="requestleave.php">Request Leave</a>
</li>
<li ><a href="parvdep.php">Arrival/Departure </a>
</li>
<li ><a href="parentindisciplinary.php">Indisciplinary</a>
</li>
<li ><a href="parentNotices.php">Notice</a></li>
</li>
<li ><a href="Alertbox.html">Alert Box</a>

</li>
<li ><a href="#">More </a>
<ul>
<li> <a href="Changepasswordparenthome.php" >Change Password</a></li>
</ul>
</li>

<li ><a href="index.php">Logout</a></li>
</ul>
</nav>
</div>

<table>
  <tr>
    <th>Name</th>
    <th>Semester</th>
    <th>Branch</th>
	<th>Admission No</th>
    <th>Departure Date & Time</th>
    <th>Approved Date & Time</th>
    <th>Reported Date & Time</th>
    <th>Place</th>
    <th>Purpose</th>
  </tr>
  
  
  <?php
  
	  
	  mysql_connect("localhost","root","");
	  mysql_select_db("outpass");
	  $a = $_REQUEST['admno'];
	   $rows= mysql_query("SELECT * FROM requestwarden where admno = $a");
	  
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
		
		 
		 
		 $query =   mysql_query("SELECT name,branch, sem from student where admno = $a ");
		 
		 $new =mysql_fetch_array($query);
		 $name = $new[0];
		 $branch = $new[1];
		 $sem = $new[2];
		
		 
		 
		  ?>
  
  
  
  
  <tr>
    <td>Aswathy</td>
    <td>S6</td>
    <td>IT</td>
    <td>6126</td>
    <td>13-03-16 & 4:30pm</td>
    <td>14-03-16 & 5:30pm</td>
    <td>14-03-16 & 5:30pm</td>
    <td>Kottayam</td>
    <td>Home Visit</td>
    
  </tr>
 
</table>


</body>
</html>