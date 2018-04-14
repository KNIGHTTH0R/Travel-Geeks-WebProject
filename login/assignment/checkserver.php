<?php
session_start();
$_SESSION["flag"]="";


//$auth=array();
include("function.php");
loadArray();
$u = $_REQUEST['email'];
$_SESSION["user"]=[$u];

$p = $_REQUEST['password'];
$_SESSION["error"] = "";
$checkerror = false;
if($u =="" &&  strlen($_POST["email"]) - strpos($_POST["email"],".") -1 != 3){
$error  .= "incorrect email";
$checkerror = true;
}
if ($p == ""){
	$error .= "blank password";
	$checkerror = true;
}


if(!$checkerror){
	
	
	
	

if(isset($auth[$u]) && $auth[$u]==md5($p) ){
	
	//$_SESSION["flag"]="go";
	//$_SESSION["user"]=$_REQUEST['email'];
	// removing session for rn
	setcookie("flag",true);
	setcookie("user",$_REQUEST['email']);//we applied cookie here couldve used $U 2//
	header ("location:demo.php");
	
}
else {
	echo "invalid $u";
	header ("location:index.php?error");
}
}
else{
	header ("location:index.php?invalid");
	
}


?>