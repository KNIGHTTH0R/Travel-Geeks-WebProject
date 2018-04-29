<?php
error_reporting(0);
require("db_rw.php");
function callID(){
global $currentID;
global $currentuser;
global $rol;
global $userimg;
global $con;

$currentuser = $_COOKIE['user'];
$s1 = "select * from users where email = '$currentuser'";
$jsn1=getJSONFromDB($s1);
$jr2=json_decode($jsn1);
$currentID= $jr2[0]->user_id;
$con = $jr2[0]->country;
$rol = $jr2[0]->Role;
/*$s2 ="select Role from users where email = '$currentuser'";
$jsn2=getJSONFromDB($s2);
$jr = json_decode($jsn2);*/



}


function callusernames($sql){
  global $uname;
$a = getDataFromDB($sql);
foreach ($a as $v) {
  $uname = $v['Name'];
  $userimg = $v['ImageAddress'];
  print '<img src="'.$v["ImageAddress"].'" alt="sample image" height="50" width="50"/>';
}
}


?>
