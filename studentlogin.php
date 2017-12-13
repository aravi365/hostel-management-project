<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <title>LOGIN page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/fonts/raphaelicons.css">
    <link rel="stylesheet" href="assets/css/login-style.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
    <script src="assets/js/libs/modernizr-2.5.2.min.js"></script>
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
.login {
  background: #eceeee;
  border: 1px solid #42464b;
  border-radius: 6px;
  height: 257px;
  margin: 20px auto 0;
  width: 298px;
  position:absolute;
  top:200px;
  left:540px;
}
.login h1 {
  background-image: linear-gradient(top, #f1f3f3, #d4dae0);
  border-bottom: 1px solid #a6abaf;
  border-radius: 6px 6px 0 0;
  box-sizing: border-box;
  color: #727678;
  display: block;
  height: 43px;
  font: 600 14px/1 'Open Sans', sans-serif;
  padding-top: 14px;
  margin: 0;
  text-align: center;
  text-shadow: 0 -1px 0 rgba(0,0,0,0.2), 0 1px 0 #fff;
}
input[type="password"], input[type="text"] {
  background: url('http://i.minus.com/ibhqW9Buanohx2.png') center left no-repeat, linear-gradient(top, #d6d7d7, #dee0e0);
  border: 1px solid #a1a3a3;
  border-radius: 4px;
  box-shadow: 0 1px #fff;
  box-sizing: border-box;
  color: #696969;
  height: 39px;
  margin: 31px 0 0 29px;
  padding-left: 37px;
  transition: box-shadow 0.3s;
  width: 240px;
}
input[type="password"]:focus, input[type="text"]:focus {
  box-shadow: 0 0 4px 1px rgba(55, 166, 155, 0.3);
  outline: 0;
}
.show-password {
  display: block;
  height: 16px;
  margin: 26px 0 0 28px;
  width: 87px;
}
input[type="checkbox"] {
  cursor: pointer;
  height: 16px;
  opacity: 0;
  position: relative;
  width: 64px;
}
input[type="checkbox"]:checked {
  left: 29px;
  width: 58px;
}
.toggle {
  background: url(http://i.minus.com/ibitS19pe8PVX6.png) no-repeat;
  display: block;
  height: 16px;
  margin-top: -20px;
  width: 87px;
  z-index: -1;
}
input[type="checkbox"]:checked + .toggle { background-position: 0 -16px }
.forgot {
  color: #7f7f7f;
  display: inline-block;
  float: right;
  font: 12px/1 sans-serif;
  left: -19px;
  position: relative;
  text-decoration: none;
  top: 5px;
  transition: color .4s;
}
.signup {
  color: #7f7f7f;
  display: inline-block;
  float: right;
  font: 12px/1 sans-serif;
  left: -79px;
  position: relative;
  text-decoration: none;
  top: 5px;
  transition: color .4s;
}
.forgot:hover { color:#F00 }
.signup:hover { color:#0C0 }
input[type="submit"] {
  width:240px;
  height:35px;
  display:block;
  font-family:Arial, "Helvetica", sans-serif;
  font-size:16px;
  font-weight:bold;
  color:black;
  text-decoration:none;
  text-transform:uppercase;
  text-align:center;
  text-shadow:1px 1px 0px #37a69b;
  padding-top:6px;
  margin: 29px 0 0 29px;
  position:relative;
  cursor:pointer;
  border: none;  
  background-color:#fc4;
  background-image: linear-gradient(top,#3db0a6,#3111);
  border-top-left-radius: 5px;
  border-top-right-radius: 5px;
  border-bottom-right-radius: 5px;
  border-bottom-left-radius:5px;
  box-shadow: inset 0px 1px 0px #2ab7ec, 0px 5px 0px 0px #497a78, 0px 10px 5px #999;
}
.shadow {
  background: #000;
  border-radius: 12px 12px 4px 4px;
  box-shadow: 0 0 20px 10px #000;
  height: 12px;
  margin: 30px auto;
  opacity: 0.2;
  width: 270px;
  position:absolute;
  top:500px;
  left:550px; 	 		
}
input[type="submit"]:active {
  top:3px;
  box-shadow: inset 0px 1px 0px #2ab7ec, 0px 2px 0px 0px #31524d, 0px 5px 3px #999;
}
.icon2
{
	top: 5.5%;
	left: 95.5%;
	border-radius: 100%;
	z-index:999;
	position:absolute;
}
#head
{
	font-size:24px;
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
#home
{
	float:right;
	font-family:Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
	font-size:12px;
	font-weight:normal;
	position:absolute;
	top:-2%;
	z-index:999;
	font-size:24px;
	left:94%;
	color:#FFF;
}
	</style>
</head>
<body>
<div id="lamhead">
<h2> <span id="head">OUTPASS MANAGEMENT SYSTEM   |</span> LOGIN</h2></div>
 <img class="back1" src="Picture2.png" width="1366" height="768">
<a href="index.php">
<h4 id="home">Home</h4></a>
<h1>  </h1>

<form action="login.php" method="POST">   
<div class="login">
    <input type="text" placeholder="UserId"  name="username" id="username" required>  
  <input type="password" placeholder="Password"  name="password" id="password" required>  
  <input type="submit" value="Sign In" >
  <br>
   <a href="forgot.html" class="forgot">Forgot Password ?</a>
   <?php if(isset($_REQUEST['msg']))
			{
			$msg = $_REQUEST['msg'];
			if($msg!=NULL)
			echo $msg;
			$msg =NULL;
			}
			?>
   </div>

</form>

<div class="shadow"></div>
<img  class="back1" src="Picture2.png" width="1366" height="768"  alt=""/>
<footer role="contentinfo">
</footer>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="assets/js/libs/jquery-1.7.1.min.js"><\/script>')</script>
<script src="assets/js/script.min.js"></script>
</body>
</html>