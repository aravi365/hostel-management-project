<?php
include('func.php');
error_reporting(0);
set_time_limit(0);
$ser="http://site23.way2sms.com/";
$ckfile = tempnam ("/tmp", "CURLCOOKIE");
$login= $ser."Login1.action";
$uid= "9496943604";
$pwd="aravindmnair";
$to = $_REQUEST['to'];
$msg = $_REQUEST['msg'];
$smob = $_REQUEST['smob'];
$smsg = $_REQUEST['smsg'];
//echo "$to $msg $smob $smsg"; 
if(!$to)
{ $to=$uid; }
if(!$msg)
{ $msg=rword(5).rword(5).rword(5).rword(5).rword(5); }
flush();
if($uid && $pwd)
{
$ibal="0";
$sbal="0";
$lhtml="0";
$shtml="0";
$khtml="0";
$qhtml="0";
$fhtml="0";
$te="0";
$loginpost="gval=&username=".$uid."&password=".$pwd."&Login=Login";
$ch = curl_init();
$lhtml=post($login,$loginpost,$ch,$ckfile);
if(stristr($lhtml,'Location: '.$ser.'vem.action') || stristr($lhtml,'Location: '.$ser.'MainView.action') || stristr($lhtml,'Location: '.$ser.'ebrdg.action'))
{
preg_match("/~(.*?);/i",$lhtml,$id);
$id=$id['1'];
if(!$id)
{
}
show('Please wait SMS IS BEING SEND...');
goto bal;
}
bal:
$msg=urlencode($msg);
$main=$ser."smstoss.action";
$ref=$ser."sendSMS?Token=".$id;
$conf=$ser."smscofirm.action?SentMessage=".$msg."&Token=".$id."&status=0";
$post="ssaction=ss&Token=".$id."&mobile=".$to."&message=".$msg."&Send=Send Sms&msgLen=".strlen($msg);
$mhtml= post($main,$post,$ch,$ckfile,$proxy,$ref);
$msg=urlencode($smsg);
$main=$ser."smstoss.action";
$ref=$ser."sendSMS?Token=".$id;
$conf=$ser."smscofirm.action?SentMessage=".$smsg."&Token=".$id."&status=0";
$post="ssaction=ss&Token=".$id."&mobile=".$smob."&message=".$msg."&Send=Send Sms&msgLen=".strlen($smsg);
$mhtml= post($main,$post,$ch,$ckfile,$proxy,$ref);

echo " Succefully sent intimations! <a href ='admission verfication.php'> <h1> Go back </h1> </a>";


curl_close($ch);

exit();
end:
flush();
}
?>