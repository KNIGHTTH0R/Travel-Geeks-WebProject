
<html>
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
<body>
<h1> Travel Geeks </h1>
<div> Posts </div>

<div><h1><a href="demo.php"> Travel Geeks </a></h1> </div>



 <?php

require("Cookiebro.php");
callID();
/*$currentuser = $_COOKIE['user'];
$s1 = "select user_id from users where email = '$currentuser'";
$jsn1=getJSONFromDB($s1);
$jr2=json_decode($jsn1);
$currentID= $jr2[0]->user_id; // cookiebro's job*/
//print_r($GLOBALS);
$s =$_FILES['file']['tmp_name'];
$n = $_FILES['file']['name'];
$ar=explode("/",$_FILES['file']['type']);
//echo $currentID; //yes they work, continue from here
//echo $currentuser;
$m = $_POST['message'];
$s2 = $_POST['Season'];
$sim = $_POST['similar'];
$type = $_POST['type'];
echo $m; echo '<br>';
//echo  $_REQUEST['Season']. " " .$_REQUEST['similar'];
$sql = "insert into post_content values(null,'$currentID','$m','$s2','$type','$sim','uploads/".$n."')";
//echo $sql;
if ($ar[0]!='image'){
echo "file type not supported";

}
else {
if(move_uploaded_file($s,"uploads/".$n)){
  if(updateSQL($sql)){
    echo "Post has been Added, User . ";
  }
  else{
    echo "DB Error!";
  }

}

else {

  echo "file upload error";
}

}





 ?>
</body>
</html>
