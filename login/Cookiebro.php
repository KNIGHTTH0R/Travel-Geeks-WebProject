<?php
require("db_rw.php");
function callID(){
global $currentID;
global $currentuser;
global $rol;

$currentuser = $_COOKIE['user'];
$s1 = "select * from users where email = '$currentuser'";
$jsn1=getJSONFromDB($s1);
$jr2=json_decode($jsn1);
$currentID= $jr2[0]->user_id;
/*$s2 ="select Role from users where email = '$currentuser'";
$jsn2=getJSONFromDB($s2);
$jr = json_decode($jsn2);*/
$rol = $jr2[0]->Role;



}


function callusernames($sql){
  global $uname;
$a = getDataFromDB($sql);
foreach ($a as $v) {
  $uname = $v['Name'];
}


}
?>
