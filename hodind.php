
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
<h2> <span id="head">OUTPASS  MANAGEMENT  SYSTEM |</span> APPROVED REQUEST</h2></div>



 <img class="back1" src="Picture2.png" width="1366" height="768">
  <div id="MenuHolder">
<nav>
<ul>
<li ><a href="HODhome.php">Home</a></li>
<li ><a href="Changepasswordhod.html">Change Password</a>


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
<li ><a href="Indisciplineinputforhod.php">Indisiplinary List </a></li>





</li>









<li ><a href="logout.php">Logout</a></li>

</ul>
</nav>
</div>

<table>
    <thead id="th">
    <tr>

	
    
      <th>Name</th>
    
      <th>Semester</th>
	  <th>Batch</th>
      
      <th>Discipline</th>
	 

      
       </tr>
  </thead>
 
  <?php
	
	  mysql_connect("localhost","root","");
	  mysql_select_db("outpass");

	   
	  $rows=mysql_query("SELECT name,sem, batch ,discipline from student where student.branch = '$hoddept' order by sem");
	  mysql_error();
	  while($select=mysql_fetch_array($rows))
	  {
		
		 

		 $name = $select[0];
		 $batch = $select[2];
		 $sem = $select[1];
		$des = $select[3];
		 
		 
		  ?>
  
  <tbody>
    <tr>
    
    
    
	 
	    <td><?php echo $name;  ?></td>
	  <td><?php echo $batch; ?></td>

	  <td><?php echo $sem; ?></td>

	  <td><?php echo $des; ?></td>
	 

  
    </tr>
	  <?php } ?>
    
  
  
</table>
<div id=pager>
<ul class="pagination pagination-lg">
  <li class="disabled"><a href="http://bootswatch.com/yeti/#">&laquo;</a></li>
  <li class="active"><a href="http://bootswatch.com/yeti/#">1</a></li>
  <li><a href="http://bootswatch.com/yeti/#">2</a></li>
  <li><a href="http://bootswatch.com/yeti/#">3</a></li>
  <li><a href="http://bootswatch.com/yeti/#">&raquo;</a></li>
</ul>
</div>


</body>
</html>