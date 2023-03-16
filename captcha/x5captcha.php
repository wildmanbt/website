<?php
include("../res/x5engine.php");
$nameList = array("f25","j6n","dp3","yg3","plk","dps","s5h","h64","nnc","7zt");
$charList = array("F","8","D","K","W","E","E","P","R","G");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
