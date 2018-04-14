<?php
//session_start();

function loadArray(){
	
	$xml=simplexml_load_file("users.xml") or die("Error: Cannot create object");
	global $auth;


//$auth=array();
foreach($xml->User as $st){
	$auth[(string)$st->Email]=(string)$st->Password;
}
}

?>