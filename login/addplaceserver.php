<style>
div{
	border:4px solid Orange;
	font-family:Comic Sans MS;
	color: Black;
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
require("Cookiebro.php");
callID();
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

 //print_r($GLOBALS);
 if(empty($u)||empty($d)||empty($t)||empty($c)||empty($sg)||empty($a))
 {
echo "return back you cannot place any field empty";

 }

   else {


     if (empty($_FILES['fileToUpload']['name']))
     {
     //when we find it empty
 $sql = "update tourist_spot SET name= '$u' , type ='$t', description ='$d',country= '$c', address = '$a', suggested_season ='$sg' , imageloc='$img'  where spot_id = '$uid'";
 //echo $sql;
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

}
else {
//work from here
//echo "beno"; // work here to add
$u = $_POST['name'];
$d = $_POST['des'];
$t = $_POST['type'];
$a = $_POST['address'];
 $c =$_POST['country'];
 $sg = $_POST['sugg'];
 //$img = $_POST['img'];
 $s=$_FILES['fileToUpload']['tmp_name'];
 $n=$_FILES['fileToUpload']['name'];
 $ar=explode("/",$_FILES['fileToUpload']['type']);
 if(empty($u)||empty($d)||empty($t)||empty($c)||empty($sg)||empty($a))
 {
echo "return back you cannot place any field empty. ";

 }


 if ($ar[0]!="image"){
   echo "filetype not supported";
 }
 else {
   if(move_uploaded_file($s,"uploads/".$n) ){
     $sql = "insert into tourist_spot values(null,'$u','$t','$d','$a','$c','$sg','uploads/".$n."')";
    // echo $sql;
   if (updateSQL($sql) && $rol == "admin" ){
     echo "DB updated. ";
   }
else {
  echo " DB error or you do not have authorization. ";
}

   }
   else {
     echo " FILE UPLOAD ERROR!";
   }
   }

 }






?>
