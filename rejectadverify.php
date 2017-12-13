<?php
			mysql_connect("localhost","root","");
			mysql_select_db("outpass");
			$submit=$_REQUEST['submit'];
			$applicationno = $_REQUEST['appno'];
			
			$select1=mysql_query("update studentapp set status = 2 where applicationno = $applicationno");
			echo mysql_error();
			
		
	header("location:Admission%20Verfication.php?msg=Admission Rejected");
			
			?>