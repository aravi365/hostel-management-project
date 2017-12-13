<?php 
session_start();
if(isset($_SESSION['type'])&& $_SESSION['type']==3)
{
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ParentIndisciplinary - Outpass Management System</title>
</head>
<link href="pages/CSS/Main.css" rel="stylesheet" type="text/css" />
<link href="pages/CSS/Menu.css" rel="stylesheet" type="text/css" />
<link href="FindStudent.css" rel="stylesheet" type="text/css" />
<style type="text/css">
#them
{
	position:absolute;
	top:92%;
	width:98.5%;
	
}
#head
{
	font-size: 24px;
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
	height:8%;
	margin-top: 10px;
	width: 98.7%;
	color:#666;
	font-style:normal;
	font-weight: bold;
	font-size: 18px;
	z-index:999;
}

table {
    border-collapse: collapse;
    width: 90%;
	position:absolute;
	top:25%;
	left:5%;
	font-size:20px;
	
	
}

th, td {
    text-align: left;
    padding: 08px;
	height:auto;
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

textarea
{
border:none;
background-color:#fff;
height:100px;

font-size:20px;

}


</style>
<body>

<div id="lamhead">
 <span id="head"> OUTPASS MANAGEMENT SYSTEM  |</span> INDISCIPLINARY</div>

 <img class="back1" src="Picture2.png" width="1366" height="768">
 
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

<li ><a href="index.php">Logout</a></li>
</ul>
</nav>
</div>
<div id="StatusTable">
<table>
    <thead id="th">
    <tr>

	<th>Admno </th>
    
      <th>Name</th>
    
      <th>Semester</th>
	  <th>Batch</th>
      
      <th>Discipline</th>
	  
	 

      
       </tr>
  </thead>
 
  <?php
	
	  mysql_connect("localhost","root","");
	  mysql_select_db("outpass");

	  $parent=$_SESSION['username'];
	  $rows = mysql_query("SELECT sid FROM parent where pid = $parent");
	   echo mysql_error();
	    $new =mysql_fetch_array($rows);
		$admno = $new['sid'];
	  
	  $rows=mysql_query("SELECT name,sem, batch ,discipline,admno from student where admno = $admno");
	  mysql_error();
	  while($select=mysql_fetch_array($rows))
	  {
		
		 

		 $name = $select[0];
		 $batch = $select[2];
		 $sem = $select[1];
		 $text = $select[3];
		
		$admno = $select[4];
		 
		 
		  ?>
  
  <tbody>
    <tr>
    
    
    
	  <td><?php echo $admno;  ?></td>
	    <td><?php echo $name;  ?></td>
	  <td><?php echo $batch; ?></td>

	  <td><?php echo $sem; ?></td>

	  <td><textarea disabled >  <?php echo $text?> </textarea ></td>
	 
  
    </tr>
	  <?php } ?>
    
  
  
</table>
</div>

</body>
</html>

<?php
}

else

 header("location:login.php");
 ?>
