<?php 
 mysql_connect("localhost","root","");
	  mysql_select_db("outpass");
	  $user = $_REQUEST['admno'];
	  $dis = $_REQUEST['dis'];
	  $curdate=date("y/m/d");
	  
	  $query = mysql_query("update student set discipline ='$dis' WHERE admno='$user'");
	  $insert=mysql_query("insert into indisipline (admno,action,date)VALUES('$user','$dis','$curdate')");
	  if($insert)
		  echo "indisipline  action is updated";
	  
	  
	  
header("location:studentdetails.php?admno=$user");
	
	
	?>