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
  <tr>
   <th> OP No</th>
   <th> Admno:</th>
    <th>Name</th>
    <th>Branch</th>
    <th>Sem</th>
	<th>Date Requested</th>
    <th>Destination</th>
    <th>Purpose</th>
    <th>Departure</th>
    <th>Arrival</th>
	<th> Type </th>
	<th> HOD </TH>
	<th> Status </th>
	<th> Return </th>
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
  
  <tbody>
    <tr>
    
    
        <td><?php echo $no;  ?></td>
	  <td><?php echo $a;  ?></td>
	    <td><?php echo $name;  ?></td>
	  <td><?php echo $branch; ?></td>

	  <td><?php echo $sem; ?></td>

	  <td><?php echo $dor; ?></td>
	    <td><?php echo $dest; ?></td>

	  <td><?php echo $pur; ?></td>

	  <td><?php echo $dep ?></td>

	  <td><?php echo $arv;  ?></td>
	   <td><?php if($type==0) echo "Regular"; else echo "Special ";  ?></td>
	    <td><?php if($hod ==0) echo "Regular Leave"; else if ($hod == 1) echo "APPROVED "; else if ($hod == 3) echo "PENDING "; else echo "Rejected"; ?></td>
	    <td><?php if($status==0) echo "Pending"; else if ($status == 1) echo "APPROVED "; else echo "Rejected"; ?></td>
		
		  <td><?php echo $return;  ?></td>
	  
	  </tr>
	 <?php }?>
 
</table>



</body>
</html>
