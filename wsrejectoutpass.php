<?php
	  mysql_connect("localhost","root","");
	  mysql_select_db("outpass");
	  
	  $opid = $_REQUEST['opid'];
	  $status = $_REQUEST['submit'];
	  
	 
	  $abc = mysql_query("update requestwarden set status = 2 where outpassid = $opid");
 

  
  header("location:WardenOpVerficationspecial.php?abc= Outpass Request Is Rejected");
  
  ?>