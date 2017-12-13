<?php 
session_start();
if(isset($_SESSION['type'])&& $_SESSION['type']==2)
{
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>HOD-home</title>
<!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>
    
    

    
  
    
   
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
   


</head>
<style>
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
	top: 1.5%;
	left: 93%;
}




#tile0
{
	left: 5%;
	top: 10%;
	position: absolute;
	opacity:.9;
	-webkit-transition:all 0.5s ease-out 0s;
	-moz-transition:all 0.5s ease-out 0s;
	-ms-transition:all 0.5s ease-out 0s;
	-o-transition:all 0.5s ease-out 0s;
	transition:all 0.5s ease-out 0s;
}
#tile0:hover
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

#tile1
{
	left:35%;
	top: 10%;
	position: absolute;
	opacity:.9;
	-webkit-transition:all 0.5s ease-out 0s;
	-moz-transition:all 0.5s ease-out 0s;
	-ms-transition:all 0.5s ease-out 0s;
	-o-transition:all 0.5s ease-out 0s;
	transition:all 0.5s ease-out 0s;
}
#tile1:hover
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

#tile2
{
	position: absolute;
	left: 65%;
	top: 45%;
	opacity:.9;
	-webkit-transition:all 0.5s ease-out 0s;
	-moz-transition:all 0.5s ease-out 0s;
	-ms-transition:all 0.5s ease-out 0s;
	-o-transition:all 0.5s ease-out 0s;
	transition:all 0.5s ease-out 0s;
}
#tile2:hover
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

#tile3
{
	position: absolute;
	left: 35%;
	top: 45%;
	opacity:.9;
	-webkit-transition:all 0.5s ease-out 0s;
	-moz-transition:all 0.5s ease-out 0s;
	-ms-transition:all 0.5s ease-out 0s;
	-o-transition:all 0.5s ease-out 0s;
	transition:all 0.5s ease-out 0s;
}

#tile3:hover
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
h2
{
	position:absolute;
	left:1140px;
	top:10px;
	font-family:Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
	font-weight:lighter;
	display: block;
    font-size: 1.5em;
    -webkit-margin-before: 0.83em;
    -webkit-margin-after: 0.83em;
    -webkit-margin-start: 0px;
    -webkit-margin-end: 0px;
	color:black;
}


</style>
<body>
<a href="searchbyhod.php">
<img  id="tile0"src="Tiles/Myaccount.png" width="413" height="236"  alt=""/></a> 
<a href="leaveverficationhod.php">
<img  id="tile1"src="Tiles/leavereq.png" width="413" height="236"  alt=""/></a>
<a href="hod arrivaldepartureinput.php"> 
<img id="tile2" src="Tiles/ADs.png" width="413" height="236"  alt=""/></a>
<a href="hodcheckdiscipline.php">
<img  id="tile3"src="Tiles/Indisp.png" width="413" height="236"  alt=""/> </a>
<img class="back1" src="Picture3.png" width="1366" height="768"  alt=""/>
<a href="logout.php">
<h2>Logout</h2>
<img  class="icons" src="Icons/logout-xxl .PNG" width="83" height="60"  alt=""/>
</body>

</html>
<?php
}

else

 header("location:login.php");
 ?>
