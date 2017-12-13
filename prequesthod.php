
<?php
session_start();
$dest=$_POST['Dest'];
$pur=$_POST['purpose'];
$dep=$_POST['leave'];
$arr=$_POST['return'];
$submit=$_POST['submit'];
$curdate=date("y/m/d");
$user=$_SESSION['username'];
$admno = $_REQUEST['adno'];
$connect=mysql_connect("localhost","root","")or die("Could'nt connect");
	mysql_select_db("outpass")or die("Could'nt find db");
if($submit)
{
$insert=mysql_query("INSERT INTO requestwarden(`admno`, `curdate`,`dest`, `purpose`, `departure`, `arrival`,type,hodapproval)VALUES('$admno','$curdate','$dest','$pur','$dep','$arr',1,3)");

echo mysql_error();
if($insert)


							header("location:requestleave.php?msg=Request for leave  is send Successful");
						
						else
					
					
						header("location:requestleave.php?msg=Request for leave  failed");
                           
					

}
?>