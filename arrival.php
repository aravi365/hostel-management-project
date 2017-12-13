<?php
	  mysql_connect("localhost","root","");
	  mysql_select_db("outpass");
	  
	  $opid = $_REQUEST['opid'];
	  
	  echo $opid;
	  $abd = mysql_query("select outpassid from requestwarden where outpassid = $opid and status = 1 ");
	  
	  $b = mysql_num_rows($abd);
	  
	 echo mysql_error();
	  if($b == 0)
		   
	header("location:whoallarriveforwarden.php?abc= Out Pass Doesn't Exist or Havent Got Approval");  
	  else 
	  {
	  
	  $abc = mysql_query("select returntime from requestwarden where outpassid = $opid ");
	  $row = mysql_fetch_array($abc);
	  $a = $row[0];
	 
	  if($a == NULL)
	  {
	  $pqr = mysql_query("update requestwarden set returntime = now() where outpassid = $opid");
	   echo mysql_error();
	 header("location:whoallarriveforwarden.php?abc= Arrival Have Been Marked Against Out Pass $opid");
	  
	  }
	else
header("location:whoallarriveforwarden.php?abc=  Out Pass $opid Already been Marked As Arived");
	  }