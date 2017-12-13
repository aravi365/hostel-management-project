<?php 
session_start();
if(isset($_SESSION['type'])&& $_SESSION['type']==1)
{

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Warden Home-Outpass Management System</title>
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
	border-radius: 200%;
}
.tile1
{
	position: absolute;
	width: 400px;
	height: 208px;
	top: 15%;
	left: 5%;
	opacity:.9;
	-webkit-transition:all 0.5s ease-out 0s;
	-moz-transition:all 0.5s ease-out 0s;
	-ms-transition:all 0.5s ease-out 0s;
	-o-transition:all 0.5s ease-out 0s;
	transition:all 0.5s ease-out 0s;
}
.tile1:hover
{
	-webkit-box-shadow:2px 2px 4px 4px #555;
	-moz-box-shadow:2px 2px 4px 4px #555;
	-ms-box-shadow:2px 2px 4px 4px #555;
	-o-box-shadow:2px 2px 4px 4px #555;
	box-shadow:2px 2px 4px 4px #555;
	-webkit-transform:scale(1.15);
	-moz-transform:scale(1.15);
	-ms-transform:scale(1.15);
	-o-transform:scale(1.15);
	transform:scale(1.15);
	-webkit-opacity:1;
	-moz-opacity:1;
	opacity:1;
	z-index:999;
}

h2
{
	position:absolute;
	left:1160px;
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
.tile2
{
	width: 400px;
	height: 208px;
	position: absolute;
	top: 15%;
	left: 35%;
	opacity:.9;
	-webkit-transition:all 0.5s ease-out 0s;
	-moz-transition:all 0.5s ease-out 0s;
	-ms-transition:all 0.5s ease-out 0s;
	-o-transition:all 0.5s ease-out 0s;
	transition:all 0.5s ease-out 0s;
}
.tile2:hover
{
	-webkit-box-shadow:2px 2px 4px 4px #555;
	-moz-box-shadow:2px 2px 4px 4px #555;
	-ms-box-shadow:2px 2px 4px 4px #555;
	-o-box-shadow:2px 2px 4px 4px #555;
	box-shadow:2px 2px 4px 4px #555;
	-webkit-transform:scale(1.15);
	-moz-transform:scale(1.15);
	-ms-transform:scale(1.15);
	-o-transform:scale(1.15);
	transform:scale(1.15);
	-webkit-opacity:1;
	-moz-opacity:1;
	opacity:1;
	z-index:999;
}

.tile3
{
	width: 400px;
	height: 208px;
	position: absolute;
	top: 15%;
	left: 65%;
	opacity:.9;
	-webkit-transition:all 0.5s ease-out 0s;
	-moz-transition:all 0.5s ease-out 0s;
	-ms-transition:all 0.5s ease-out 0s;
	-o-transition:all 0.5s ease-out 0s;
	transition:all 0.5s ease-out 0s
}
.tile3:hover
{
	-webkit-box-shadow:2px 2px 4px 4px #555;
	-moz-box-shadow:2px 2px 4px 4px #555;
	-ms-box-shadow:2px 2px 4px 4px #555;
	-o-box-shadow:2px 2px 4px 4px #555;
	box-shadow:2px 2px 4px 4px #555;
	-webkit-transform:scale(1.15);
	-moz-transform:scale(1.15);
	-ms-transform:scale(1.15);
	-o-transform:scale(1.15);
	transform:scale(1.15);
	-webkit-opacity:1;
	-moz-opacity:1;
	opacity:1;
	z-index:999;
}

.tile4
{
	width: 400px;
	height: 208px;
	position: absolute;
	top: 50%;
	left: 5%;
	opacity:.9;
	-webkit-transition:all 0.5s ease-out 0s;
	-moz-transition:all 0.5s ease-out 0s;
	-ms-transition:all 0.5s ease-out 0s;
	-o-transition:all 0.5s ease-out 0s;
	transition:all 0.5s ease-out 0s;
}
.tile4:hover
{
	-webkit-box-shadow:2px 2px 4px 4px #555;
	-moz-box-shadow:2px 2px 4px 4px #555;
	-ms-box-shadow:2px 2px 4px 4px #555;
	-o-box-shadow:2px 2px 4px 4px #555;
	box-shadow:2px 2px 4px 4px #555;
	-webkit-transform:scale(1.15);
	-moz-transform:scale(1.15);
	-ms-transform:scale(1.15);
	-o-transform:scale(1.15);
	transform:scale(1.15);
	-webkit-opacity:1;
	-moz-opacity:1;
	opacity:1;
	z-index:999;
}


.tile5
{
	width: 400px;
	height: 208px;
	position: absolute;
	top: 50%;
	left: 35%;
	opacity:.9;
	-webkit-transition:all 0.5s ease-out 0s;
	-moz-transition:all 0.5s ease-out 0s;
	-ms-transition:all 0.5s ease-out 0s;
	-o-transition:all 0.5s ease-out 0s;
	transition:all 0.5s ease-out 0s;
}
.tile5:hover
{
	-webkit-box-shadow:2px 2px 4px 4px #555;
	-moz-box-shadow:2px 2px 4px 4px #555;
	-ms-box-shadow:2px 2px 4px 4px #555;
	-o-box-shadow:2px 2px 4px 4px #555;
	box-shadow:2px 2px 4px 4px #555;
	-webkit-transform:scale(1.15);
	-moz-transform:scale(1.15);
	-ms-transform:scale(1.15);
	-o-transform:scale(1.15);
	transform:scale(1.15);
	-webkit-opacity:1;
	-moz-opacity:1;
	opacity:1;
	z-index:999;
}
.tile6
{
	width: 400px;
	height: 208px;
	position: absolute;
	top: 50%;
	left: 65%;
	opacity:.9;
	-webkit-transition:all 0.5s ease-out 0s;
	-moz-transition:all 0.5s ease-out 0s;
	-ms-transition:all 0.5s ease-out 0s;
	-o-transition:all 0.5s ease-out 0s;
	transition:all 0.5s ease-out 0s;
}
.tile6:hover
{
	-webkit-box-shadow:2px 2px 4px 4px #555;
	-moz-box-shadow:2px 2px 4px 4px #555;
	-ms-box-shadow:2px 2px 4px 4px #555;
	-o-box-shadow:2px 2px 4px 4px #555;
	box-shadow:2px 2px 4px 4px #555;
	-webkit-transform:scale(1.15);
	-moz-transform:scale(1.15);
	-ms-transform:scale(1.15);
	-o-transform:scale(1.15);
	transform:scale(1.15);
	-webkit-opacity:1;
	-moz-opacity:1;
	opacity:1;
	z-index:999;
}

</style>
<body>
<a href="newwardenadmit.php">
<img class="tile1"src="Tiles/admn.png" width="600" height="350"  alt=""/></a>
<a href="Findstudentinputpageforwarrden.php">
<img class="tile4"src="Tiles/Search.png" width="600" height="350"  alt=""/></a>
<a href="whoallarriveforwarden.php">
<img class="tile3" src="Tiles/parent.png" width="600" height="350"  alt=""/></a>
<a href="WardenOpVerfication.php">
<img class="tile5" src="Tiles/oVerf.png" width="600" height="350"  alt=""/></a>
<a href="logout.php">
<h2>Logout</h2>
<img class="icons" src="Icons/logout-xxl .PNG" width="83" height="60" alt=""/></a>
<a href="Admission Verfication.php">
<img class="tile2"src="Tiles/Adverfication.png" width="600" height="350"  alt=""/></a>
<a href="ComposeCircularbyWarden.php">
<img class="tile6"src="Tiles/CC.png" width="600" height="350"  alt=""/></a>
<img class="back1" src="Picture3.png" width="1366" height="768"  alt=""/>
</body>
</html>
<?php

}

else

 header("location:login.php");
 ?>

