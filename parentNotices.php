<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Notices</title>
<link href="pages/CSS/Menu.css" rel="stylesheet" type="text/css" />
<link href="pages/CSS/Main.css" rel="stylesheet" type="text/css" />
<!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.--><script>var __adobewebfontsappname__="dreamweaver"</script><script src="http://use.edgefonts.net/advent-pro:n1,n4:default;just-me-again-down-here:n4:default;jolly-lodger:n4:default.js" type="text/javascript"></script>
</head>
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
	left: 75%;
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
	top: 35%;
	position: absolute;
	left: 5%;
	font-family: Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
}
#mov4
{
	position: absolute;
	left: 15%;
	top: 35%;
	width: 40%;
	font-family: Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
	border-color:thin #F93;
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
	top: 40%;
	font-family: Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
	border-color:thin #F93;
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
<h2> <span id="head">OUTPASS MANAGEMENT SYSTEM  |</span> NOTICES</h2></div>

 <img class="back1" src="Picture2.png" width="1366" height="768">
 <div id="MenuHolder">

   
   
   <nav>
<ul>
<li ><a href="parenthome.php">Home</a></li>


</li>
<li ><a href="parentstatus.php">Leave Status</a></li>
</li>

<li ><a href="parvdep.php">Arrival/Departure </a>
</li>
<li ><a href="parentindisciplinary.php">Indisciplinary</a>
</li>
<li ><a href="parentNotices.php">Notice</a></li>
</li>



<li> <a href="passwordchangeforparent.php" >Change Password</a></li>
<li> <a href="parentinformation.php" >Parent Details</a></li>

</li>

<li ><a href="logout.php">Logout</a></li>
</ul>
</nav>
</div>

<table>
  <tr>
 
   <th> id</th>
    <th>date</th>
    <th>sub</th>
    <th>content</th>

    </tr>
 <?php
	  mysql_connect("localhost","root","");
	  mysql_select_db("outpass");
	
	  $query = mysql_query("SELECT * FROM circulars");

	while ($row=mysql_fetch_array($query))
	{
	
		$a = $row[0];
		$b = $row[1];
		$c = $row[2];
		$d = $row[3];

		
		
	

		 
		 
		  ?>
  
  <tbody>
    <tr>
    
    
      
	  <td><?php echo $a  ;?></td>
	    <td><?php echo $b;  ?></td>
	  <td><?php echo $c ;?></td>

	  <td><?php echo $d; ?></td>

	 
	  
	  </tr>
	 
	<?php }?>
</table>



</body>

</html>
