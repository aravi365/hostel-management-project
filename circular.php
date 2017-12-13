<?php 
 mysql_connect("localhost","root","");
	  mysql_select_db("outpass");
	  $sub = $_REQUEST['sub'];
	  $msg = $_REQUEST['msg'];
	  
	  $query = mysql_query("insert into circulars values ('',now(),'$sub','$msg')");
	 echo mysql_error(); 
	  
header("location:circulars.php");
	
	
	?>