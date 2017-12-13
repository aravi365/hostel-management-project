<?php 
 mysql_connect("localhost","root","");
	  mysql_select_db("outpass");
	  $user = $_REQUEST['admno'];
	  $dis = $_REQUEST['dis'];
	  
	  $query = mysql_query("update student set discipline ='$dis' WHERE admno='$user'");
	  
	  
header("location:Indisciplineinputforhod.php");
	
	
	?>