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
$sql = "update users SET Name= '$u' , Lastname ='$l', email ='$e', password = '$p', gender ='$g' , dob= , address='$a' , Role = '$r' where user_id = '$uid'";
echo $sql;/*
if(updateSQL($sql)){
echo "data has been updated";

}
else{
  echo "DB Error!";
}*/



?>









?>
