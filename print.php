<?php 
session_start();
if(isset($_SESSION['type'])&& $_SESSION['type']==0)
{
?>
<html>
<head>
<meta charset="utf-8">

<body>
<div id="lamhead">
<h2> <span id="head">OUTPASS MANAGEMENT SYSTEM   |</span> OUTPASS</h2>
,
</div>


<?php


@$user=$_SESSION['username'];
if($user)
{
	$connect=mysql_connect("localhost","root","") or die("Could'nt connect");
mysql_select_db("outpass")or die("Could'nt find db");

$a = $_REQUEST['opid'];
$query = mysql_query("SELECT * FROM requestwarden WHERE outpassid =$a");


	$r=mysql_fetch_array($query);
	
	$aa = $r[1];
	$q = mysql_query("SELECT  name,branch,sem  FROM student where admno = $aa");
		$row =	mysql_fetch_array($q);
	
		$name=$row['name'];
		$branch=$row['branch'];
		$sem=$row['sem'];
		
		$dest = $r[3];
		 $pur = $r[4];
		 $dep = $r[5]; 
		 $arv = $r[6];
	
}


?>

<script>
function printDiv(divname)
{
	var printContents = document.getElementById(divname).innerHTML;
	var org = document.body.innerHTML;
	document.body.innerHTML = printContents;
	window.print();
	document.body.innerHTML = org;
}
</script>

<div id ="print" >
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

#head
{
	font-size:24px;
}

#lamhead
{
	font-family:Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
	
	position: fixed;
	top: 5%;
	left: 20%;
	width: 98.5%;
	color:#666;
	font-style:normal;
	font-weight:normal;
	z-index:999;
	font-size: 11px;
}

body
{
	margin-left:0px;
	margin-top:0px;
	margin-right:0px;
	margin-bottom:0px;
	
}
label
{
	font-family:Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
	font-weight:lighter;
	font-size:20px;
}
#print
{
	top: 15%;
	left: 20%;
	position: absolute;	

}
#but
{	
			top: 90%;
	left: 20%;
	font-family:Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
		position: absolute;	
		width:200px;
		
}

input
{
	width: 250px;
	border:none;
	
	
	font-family:Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
	font-weight:lighter;
	font-size:20px;
	

} 
#mov1
{
	position: absolute;
	top: 0%;
	left: 150%;
	display:block;
	height:30px;
	
}
#mov2
{
	position: absolute;
	top: 11%;
	left: 150%;
	display:block;
	height:30px;
}
#mov3
{
	position: absolute;
	top: 22%;
	left: 150%;
	display:block;
	height:30px;
}
#mov4
{
	position: absolute;
	top: 33%;
	left: 150%;
	display:block;
	height:30px;
}
#mov5
{
	position: absolute;
	top: 44%;
	left: 150%;
	display:block;
	height:30px;
}
#mov6
{
	position: absolute;
	top: 55%;
	left: 150%;
	display:block;
	height:30px;
}
#mov7
{
	position: absolute;
	top: 66%;
	left: 150%;
	display:block;
	height:30px;
}
#mov8
{
	position: absolute;
	top: 77%;
	left: 150%;
	display:block;
	height:30px;
}
#mov9
{
	position: absolute;
	top: 88%;
	left: 150%;
	display:block;
	height:30px;
}
#mov10
{
	position: absolute;
	top: 99%;
	left: 150%;
	display:block;
	height:30px;
}
#bar
{
	top :68%;
	left:30%;
	position:absolute;
	
	
	
	
	
}
img{
		
	width:200px;
	height:100px;
}
@media print
{
	
	.no-print ,.no-print *
	{
	
		display:none; !important;
		
	}
}
	
</style>



<label>OUTPASS NO </label></br></br>
<input id="mov1" name="Sub" type="text" size="40" maxlength="150" readonly value="<?php echo $a; ?>">
<label>Admission No:</label><br><br>
<input id="mov2" name="Sub" type="text" size="40" maxlength="150" readonly value="<?php echo $aa; ?>">
<label >Name:</label><br><br>
<input id="mov3" name="Sub" type="text" size="40" maxlength="150" readonly value=" <?php echo $name; ?> ">
<label>Branch:</label><br><br>
<input id="mov4" name="Sub" type="text" size="40" maxlength="150" readonly value="<?php echo $branch; ?>">
<label>Semester:</label><br><br>
<input id="mov5" name="Sub" type="text" size="40" maxlength="150" readonly value="<?php echo $sem; ?>">
<label>Destination</label><br><br>
<input id="mov6" name="Sub" type="text" size="40" maxlength="150" readonly value="<?php echo $dest; ?>">
<label>Purpose</label><br><br>
<input id="mov7" name="Sub" type="text" size="40" maxlength="150" readonly value="<?php echo $pur; ?>">
<label>Departure</label><br><br>
<input id="mov8" name="Sub" type="text" size="40" maxlength="150" readonly value="<?php echo $dep; ?>">
<label>Arrival</label><br><br>
<input id="mov9" name="Sub" type="text" size="40" maxlength="150" readonly value="<?php  echo $arv; ?>"> </div>

<div id ="bar">
<?php 


include('src/BarcodeGenerator.php');
include('src/BarcodeGeneratorPNG.php');
include('src/BarcodeGeneratorSVG.php');
include('src/BarcodeGeneratorJPG.php');
include('src/BarcodeGeneratorHTML.php');

$generator = new \Picqer\Barcode\BarcodeGeneratorPNG();
echo '<img src="data:image/png;base64,' . base64_encode($generator->getBarcode($aa.$a, $generator::TYPE_EAN_13)) . '">';

?>

</div>
<div class ="no-print" > <input id="but" type = "button" onclick ="window.print()" value="PRINT OUTPASS"> </input>  </div>
</body>
</html>
<?php
}

else

 header("location:login.php");
 ?>

