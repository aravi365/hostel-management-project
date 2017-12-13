<?php
			
			mysql_connect("localhost","root","");
			mysql_select_db("outpass");
			$submit=$_REQUEST['submit'];
			$applicationno = $_REQUEST['appno'];
			
			ECHO $applicationno;
			if($submit)
			{
			$commonpassword=1111;
			$select1=mysql_query("SELECT * FROM studentapp where applicationno = $applicationno");
			echo mysql_error();
			while($rows=mysql_fetch_assoc($select1))
			{
			$name=$rows['name'];
			$brname=$rows['branch'];
			$semname=$rows['sem'];
			$batch=$rows['batch'];
			$hname=$rows['hname'];
			$city=$rows['city'];
			$district=$rows['dist'];
			$state=$rows['state'];
			$country=$rows['country'];
			$zip=$rows['zip'];
			$contphone=$rows['studentphone'];
			$dob=$rows['dob'];
			$email=$rows['studentemail'];
			$mname=$rows['mother'];
			$moccupation=$rows['mjob'];
			$mphone=$rows['mphone'];
			$fname=$rows['father'];
			$foccupation=$rows['fjob'];
			$fphone=$rows['fmobno'];
			$religion=$rows['religion'];
			$lgname=$rows['lg'];
			$lgphone=$rows['lgmob'];
			$lgaddress=$rows['lgaddress'];
			$roomrequirement=$rows['room'];
			}
			
			
			$se=mysql_query("SELECT * FROM users ORDER BY userid DESC LIMIT 1");
			$row=mysql_fetch_assoc($se);
			
			$key=$row['userid'];
			
			
			
			
			$insert=mysql_query("INSERT INTO student( admno,`name`, `branch`, `batch`, `sem`, `mother`, `mjog`, `mphone`, `father`, `fjob`, `fmobno`, `hname`, `city`, `dist`, `state`, `country`, `zip`, `studentphone`, `dob`, `studentemail`, `religion`, `lg`, `lgaddress`, `lgmob`, `room`) VALUES($key+1,'$name','$brname','$batch','$semname','$mname','$moccupation','$mphone','$fname','$foccupation','$fphone','$hname','$city','$district','$state','$country','$zip','$contphone','$dob','$email','$religion','$lgname','$lgaddress','$lgphone','$roomrequirement')");
			echo mysql_error();
			
			$se= mysql_query("SELECT admno FROM student ORDER BY admno DESC LIMIT 1");
			$row=mysql_fetch_assoc($se);
			
			$key=$row['admno'];
			$a= $key;
			
			$insert1=mysql_query("insert into users values ($key,'$commonpassword',0)");
			echo mysql_error();
		
			$se=mysql_query("SELECT userid FROM users ORDER BY userid DESC LIMIT 1");
			$row=mysql_fetch_assoc($se);
			
			$key=$row['userid'];
			
			
			$insert3=mysql_query("insert into users values ($key+1,'$commonpassword',3)");
			$insert3=mysql_query("insert into parent values ($key+1,$a)");
			
			echo mysql_error();
			
			
			
			
		
		
			$select = mysql_query("update studentapp set status = 1 where applicationno = $applicationno ");
			echo mysql_error();
			
			
			
			if($insert&&$insert1)
			{
			$se=mysql_query("SELECT * FROM users ORDER BY userid DESC LIMIT 1");
			while($row=mysql_fetch_assoc($se))
			{
			$key=$row['userid'];
			}
			echo "Admission is Successful";
			echo "
			<br>
			";
			echo "USERID: ". $key;
			echo "
			<br>
			";
			echo  "PASSWORD: 1111" ;
			
			$smsg =" OPMS Registration success! USER ID $a and PASSWORD 1111. Keep it confidential!";
			$msg =" OPMS Registration success! USER ID $key and PASSWORD 1111. Keep it confidential!";
			
			header("location:msgtoparent.php?msg=$msg&to=$fphone&smsg=$smsg&smob=$contphone");
			
			}
			else
			{
		
	header("location:Admission%20Verfication.php?msg=Admission is not Successful");
			echo "Admission is not Successful";
			}
			}
			?>