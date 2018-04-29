<style>
div{
	border:4px solid Red;
	font-family:Comic Sans MS;
	color: Aqua;
	text-align: center;
	}
	body { background-color: lightblue;
}

h2{
color: Black;
text-align: auto;
border: 3px solid green;
padding: 10px;
}
</style>

<div><h1><a href="demo.php"> Travel Geeks </a></h1> </div>
<?php
require("db_rw.php");
$u = $_POST['fname'];
$l = $_POST['lname'];
$e = $_POST['email'];
$p = md5($_POST['password']);
 $g =$_POST['gender'];
 $r =$_POST['role'];
 $uid = $_POST['userid'];
 $a = $_POST['address'];
 $dob = $_POST['dob'];
 $country = $_POST['country'];
 if(empty($u)||empty($l)||empty($e)||empty($p)||empty($g)||empty($r)||empty($a)||empty($dob)||empty($country)){
echo "return back you cannot place any field empty";

 }

   else {
$sql = "update users SET Name= '$u' , Lastname ='$l', email ='$e',country= '$country', password = '$p', gender ='$g' , dob='$dob' , address='$a' , Role = '$r' where user_id = '$uid'";
//echo $sql;
if(updateSQL($sql)){
echo "data has been updated";

}
else{
  echo "DB Error!";
}

}

?>









?>
