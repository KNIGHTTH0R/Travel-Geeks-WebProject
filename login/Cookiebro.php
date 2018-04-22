<?php
require("db_rw.php");
function callID(){
global $currentID;


$currentuser = $_COOKIE['user'];
$s1 = "select user_id from users where email = '$currentuser'";
$jsn1=getJSONFromDB($s1);
$jr2=json_decode($jsn1);
$currentID= $jr2[0]->user_id;

}
?>
