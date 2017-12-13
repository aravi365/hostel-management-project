
<?PHP 

session_start();
	$hoddept = $_SESSION['hdpt'];
	
	
	?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Students Complaint</title>
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
width:auto;

}



</style>



<body>

<div id="lamhead">
<h2> <span id="head">OUTPASS  MANAGEMENT  SYSTEM |</span> APPROVED REQUEST</h2></div>



 <img class="back1" src="Picture2.png" width="1366" height="768">
 <div id="MenuHolder">
<nav>
<ul>
<li ><a href="HODhome.php">Home</a></li>
<li ><a href="passwordchangeforhod.php">Change Password</a>


<li ><a href="searchbyhod.php">Find Admission No.</a></li>



<li ><a href="leaveverficationhod.php">Leave Request </a>
<li ><a href="#">Approve|Disapprove </a>
<ul>
<li><a href="happrovedoutpass.php">Approved </a></li>
<li><a href="hrejectedoutpass.php">Disapproved </a></li>

</ul>
</li>


</li>
<li ><a href="hod arrivaldepartureinput.php">Arrival|Departure</a>




</li>
<li ><a href="hodcheckdiscipline.php">Indisiplinary List </a></li>





</li>









<li ><a href="logout.php">Logout</a></li>

</ul>
</nav>
</div>

<table>
    <thead id="th">
    <tr>

	<th>Admno </th>
    
      <th>Name</th>
    
      <th>Semester</th>
	  <th>Batch</th>
      
      <th>Discipline</th>
	   <th>Modify</th>
	 

      
       </tr>
  </thead>
 
  <?php
	
	  mysql_connect("localhost","root","");
	  mysql_select_db("outpass");
	  $inadmno=$_POST['admno'];

	   
	  $rows=mysql_query("SELECT name,sem, batch ,discipline,admno from student where student.branch = '$hoddept' order by sem AND admno='$inadmno'");
	  mysql_error();
	  while($select=mysql_fetch_array($rows))
	  {
		
		 

		 $name = $select[0];
		 $batch = $select[2];
		 $sem = $select[1];
		 $text = $select[3];
		$des = preg_split("/\n/","$text");
		$admno = $select[4];
		 
		 
		  ?>
  
  <tbody>
    <tr>
    
    
    
	  <td><?php echo $admno;  ?></td>
	    <td><?php echo $name;  ?></td>
	  <td><?php echo $batch; ?></td>

	  <td><?php echo $sem; ?></td>

	  <td><textarea disabled >  <?php echo $text?> </textarea ></td>
	 <td>	<form action ="hdiscipline.php"	> <input type ="hidden" name ="admno" value ="<?php echo $admno ;?>" >	<button > Edit Discipline </button>  </form></td>

  
    </tr>
	  <?php } ?>
    
  
  
</table>



</body>
</html>