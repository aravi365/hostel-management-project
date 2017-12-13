
<?PHP 

session_start();
	$hdpt = $_SESSION['hdpt'];
	
	
	?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Approved Outpasses - OUTPASS MANAGEMENT SYSTEM</title>
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







</style>



<body>
<div id="lamhead">
<h2> <span id="head">OUTPASS MANAGEMENT SYSTEM |</span> VIEW APPROVED OUTPASSES</h2></div>

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
<li ><a href="Indisciplineinputforhod.php">Indisiplinary List </a></li>





</li>









<li ><a href="logout.php">Logout</a></li>

</ul>
</nav>
</div>
<table>
  <tr>
 
   <th> Admno:</th>
    <th>Name</th>
    <th>Branch</th>
    <th>Sem</th>
	<th> Batch</th>
	<th> Father</th>
	<th>Date Of Birth </th>
	<th>Email</th>
	<th>Contact No</th>
	<th>Performance</th>
	<th> Out pass History </th>
	<th> Edit</th>
	<th> Delete</th>
	<th> Disciplinary</th>
    </tr>
 <?php
	  mysql_connect("localhost","root","");
	  mysql_select_db("outpass");
	  $search = $_REQUEST['admno'];
	  $query = mysql_query("SELECT * FROM student WHERE branch = '$hdpt' and admno like'$search' or  branch = '$hdpt' and name like '%$search%' or branch = '$hdpt' and branch like '$search'  ");
	 
$numrows =mysql_num_rows($query);
if($numrows == 0)
	header("location:searchbyhod.php?abc= Student Does Not Exist");
	else
{
	while ($row=mysql_fetch_assoc($query))
	{
	
		$user = $row['admno'];
		$name=$row['name'];
		$branch=$row['branch'];
		$sem=$row['sem'];
		$batch=$row['batch'];
		$fname=$row['father'];
		$dob=$row['dob'];
		$email=$row['studentemail'];
		$mob=$row['lgmob'];
		$per=$row['discipline'];
		
	

		 
		 
		  ?>
  
  <tbody>
    <tr>
    
    
      
	  <td><?php echo $user;  ?></td>
	    <td><?php echo $name;  ?></td>
	  <td><?php echo $branch; ?></td>

	  <td><?php echo $sem; ?></td>

	  <td><?php echo $batch; ?></td>
	    <td><?php echo $fname; ?></td>

	  <td><?php echo $dob; ?></td>

	  <td><?php echo $email ?></td>

	  <td><?php echo $mob;  ?></td>
	  	  <td><?php echo $per;  ?></td>
	   <td>	<form action ="hophistory.php"	> <input type ="hidden" name ="admno" value ="<?php echo $user ;?>" > <button >OP History</button> </form> </td>
	 <td>	<form action ="heditsp.php"	> <input type ="hidden" name ="admno" value ="<?php echo $user ;?>" > <button >Edit</button> </form> </td>
	<td>	<form action ="hdeletesp.php"	> <input type ="hidden" name ="admno" value ="<?php echo $user ;?>" >	<button > Delete </button> </form> </td>
	<td>	<form action ="hdiscipline.php"	> <input type ="hidden" name ="admno" value ="<?php echo $user ;?>" >	<button > Disiplinary </button>  </form></td>
		
	  </tr>
	 <?php 
} 
}
?>
 
</table>



</body>
</html>
