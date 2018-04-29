<?php
require("db_rw.php");

if (!isset($_GET['add'])){
$u = $_POST['name'];
$uid = $_POST['id'];
$d = $_POST['des'];

$t = $_POST['type'];
$a = $_POST['address'];
 $c =$_POST['country'];
 $sg = $_POST['sugg'];
 $img = $_POST['img'];
 $s=$_FILES['fileToUpload']['tmp_name'];
 $n=$_FILES['fileToUpload']['name'];
 $ar=explode("/",$_FILES['fileToUpload']['type']);

 print_r($GLOBALS);
 if(empty($u)||empty($d)||empty($t)||empty($c)||empty($sg)||empty($a))
 {
echo "return back you cannot place any field empty";

 }

   else {
     if (empty($_FILES['fileToUpload']['name']))
     {
     //when we find it empty
 $sql = "update tourist_spot SET name= '$u' , type ='$t', description ='$d',country= '$c', address = '$a', suggested_season ='$sg' , imageloc='$img'  where spot_id = '$uid'";
 echo $sql;
 if(updateSQL($sql))
 {
 echo "data has been updated";

 }
 else {

   echo "db error!";
 }

} else {
if ($ar[0]!="image"){
  echo "filetype not supported";
}
else {
$sql2 = "update tourist_spot SET name = '$u',type='$t' , description='$d', country='$c', address='$a', suggested_season='$sg',imageloc= 'uploads/".$n."'   where spot_id='$uid'";
echo $sql2;

if(move_uploaded_file($s,"uploads/".$n) ){
if (updateSQL($sql2) ){

echo "Data has been saved";

} else {
  echo " DB Error!";
}
}  else {
echo   "file upload error";
}

}
}







}

} ?>
