<?php 
session_start();
if(isset($_SESSION['type'])&& $_SESSION['type']==2)
{
?>

<?PHP 


	$hoddept = $_SESSION['hdpt'];
	
	
	?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Outpass Verfication</title>
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

#th{
font-family:Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;	
font-style:normal;
	font-weight:normal;
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







</style>



<body>
<div id="lamhead">
<h2> <span id="head">OUTPASS  MANAGEMENT SYSTEM |</span> LEAVE REQUESTS</h2></div>


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


<div id="StatusTable">
<H1>
<?php  

	$abc= NULL;
	if(isset($_REQUEST['abc']))
		$abc = $_REQUEST['abc'];
	if ($abc != NULL)
	echo $abc;?> </H1>
<table class="table table-striped table-hover">
  <thead id="th">
    <tr>

	  <th>Outpass no.</th>
      <th>Admission no.</th>
    
      <th>Name</th>
      <th>Branch</th>
      <th>Semester</th>
	  <th>Date Of Request</th>
      
      <th>Destination</th>
	  <th>Purpose</th>
      <th>Departure</th>
      <th>Arrival</th>
     
	  <th>Approve</th>
	   <th>Reject</th>
      
       </tr>
  </thead>
	<?php
	
	  mysql_connect("localhost","root","");
	  mysql_select_db("outpass");

	   
	  $rows=mysql_query("SELECT * from student,requestwarden where student.branch = '$hoddept' and student.admno=requestwarden.admno AND requestwarden.hodapproval = 3 and type=1;");
	  mysql_error();
	  while($select=mysql_fetch_array($rows))
	  {
		  $no = $select[26];
		 $dor = $select[28];
		 $dest = $select[29];
		 $pur = $select[30];
		 $dep = $select[31];
		 
		 $arv = $select[32];
		 $admno = $select[27];
		 
		 

		 $name = $select[1];
		 $branch = $select[2];
		 $sem = $select[4];
		
		 
		 
		  ?>
  
  <tbody>
    <tr>
    
    
      <td><?php  echo $no; ?></td>
	  <td><?php echo $admno;  ?></td>
	    <td><?php echo $name;  ?></td>
	  <td><?php echo $branch; ?></td>

	  <td><?php echo $sem; ?></td>

	  <td><?php echo $dor; ?></td>
	    <td><?php echo $dest; ?></td>

	  <td><?php echo $pur; ?></td>

	  <td><?php echo $dep ?></td>

	  <td><?php echo $arv;  ?></td>


      <td>   <form action ="happroveoutpass.php" method ="post" ><input type ="hidden" name ="opid" value ="<?php echo $no; ?>"> 
     <input  name ="submit" type="submit" value="Approve"> </form> </td> 
	  <td>  <form action ="hrejectoutpass.php" method ="post" > 
	  <input type ="hidden" name ="opid" value ="<?php echo $no; ?>"> 
	  <input  name ="submit" type="submit" value="Reject"> </td>
	  </form>
    </tr>
	  <?php } ?>
    
    
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
