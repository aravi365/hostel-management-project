<?php
	  mysql_connect("localhost","root","");
	  mysql_select_db("outpass");
	  
	  $opid = $_REQUEST['opid'];
	  $status = $_REQUEST['submit'];
	  
	 
	  $abc = mysql_query("update requestwarden set hodapproval = 1 where outpassid = $opid");
 

  
  
  header("location:leaveverficationhod.php?abc= Outpass Request Is Approved");
  
  ?>