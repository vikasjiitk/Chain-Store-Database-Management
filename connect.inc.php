<?php
$host = 'localhost';
$user='root';
$pass = 'cs315';
$db='chainStores';
if(!mysqli_connect($host,$user,$pass,$db)){
	die('could not connect');
}
// echo 'connected with sever' . '<br />';
?>
