<?php


// include ("includes/validator.php");
$DBhost = "localhost";
$DBuser = "jumcoder_vpn";
$DBpass = "28846150N.com";
$DBname = "jumcoder_vpn";

$DBcon = new MySQLi($DBhost,$DBuser,$DBpass,$DBname);

if ($DBcon->connect_errno) {
    die("ERROR : -> ".$DBcon->connect_error);
}
?>
