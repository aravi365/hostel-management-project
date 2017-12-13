<?php
session_start();
$session['type'] = 5;
session_destroy ();
header("location:index.php");
?>