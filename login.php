<?php
//login.php
$hn ='localhost';
$db ='publications';
$un ='';
$pw ='';

$conn = new mysqli($hn,$db,$un,$pw); 
if(!$conn) die ("Fatal Error");
?>