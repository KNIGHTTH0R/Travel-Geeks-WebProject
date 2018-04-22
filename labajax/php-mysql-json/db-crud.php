<?php
require("db_rw.php");

$s="select * from student";
if(isset($_GET["cg"]))
	$s="select * from student where cgpa>".$_GET["cg"];
//echo $s."<br>";
if(isset($_GET["uname"]) && isset($_GET["pass"]) && $_GET["uname"]=="abc" && $_GET["pass"]=="123"){
	$jsn=getJSONFromDB($s);
	echo $jsn."<br>";
}
//$jd=json_decode($jsn,true);
//echo "<pre>";print_r($jsn);echo "</pre>";
/*foreach($jd as $v){
	echo $v->name." from ".$v->dept." with CGPA : ".$v->cgpa;
	echo "<br>";
}*/
/*foreach($jd as $v){
	echo $v["name"]." from ".$v["dept"]." with CGPA : ".$v["cgpa"];
	echo "<br>";
}*/
/*
$s="insert into student values('".$_REQUEST['id']."','".$_REQUEST['name']."','".$_REQUEST['cg']."')";
echo $s;
$num=updateSQL($s);
echo $num." row(s) updated";
*/
//echo getJSONFromDB("select * from student");
?>