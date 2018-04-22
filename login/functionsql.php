<?php
require("db_rw.php");
function loadsql(){

	//$xml=simplexml_load_file("users.xml") or die("Error: Cannot create object");
	global $auth;

$sql = "select * from users";
$a =  getDataFromDB($sql);
//$auth=array();
foreach($a as $v ){
	$auth[$v["email"]]=$v["password"];
}
}

?>
