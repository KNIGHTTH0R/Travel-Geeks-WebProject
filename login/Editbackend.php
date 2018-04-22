<?php


require("db_rw.php");
$firstname = $_POST["fname"];
$lastname = $_POST["lname"];
$gender = $_POST["gender"];
$email = $_POST["email"];
$password =$_POST["pass"];
$md5 =  md5($_POST["pass"]);
$confirm_password = $_POST["conpass"];
$country = $_POST["country"];
$address =$_POST["address"];
$dob =$_POST["dob"];
$r = $_POST["r"];
//$role = $_POST["role"];
$currentuser = $_COOKIE['user'];
//$dob_month =$_POST["dob_month"];
//$dob_year =$_POST["dob_year"];
$redirect_url = "index.php";

$s=$_FILES['fileToUpload']['tmp_name'];
$n=$_FILES['fileToUpload']['name'];
$ar=explode("/",$_FILES['fileToUpload']['type']);

if(empty($firstname) || empty($lastname) || empty($gender) || empty($email) || empty($password) || empty($confirm_password) || empty($dob) || empty($address) ){
	echo "You can't leave any field empty. Please go back to sign up page.";//not necessary

} else {


if (isset($_COOKIE['user']) && isset($_COOKIE['flag'])){



			if($ar[0]!="image"){
	echo "Filetype not supported";
}

else{
 if(move_uploaded_file($s,"uploads/".$n)){
//	 $s="insert into users values(null,'$md5','$email','$address','$dob','$gender','$firstname','$lastname','uploads/".$n."','user')";
$s1 = "select user_id from users where email = '$currentuser'";
$jsn1=getJSONFromDB($s1);
$jr2=json_decode($jsn1);
$currentID= $jr2[0]->user_id; //ImageAddress = 'uploads/".$n."',
echo "<br>";
		$s=" update users  SET password= '$password', address = '$address', Name ='$firstname', Lastname='$lastname',  Role ='$r',gender ='$gender',ImageAddress = 'uploads/".$n."',dob  = '$dob' where  user_id ='$currentID'";
		echo $s;
	//	echo $dob;
		if(updateSQL($s)){
echo "data has been updated";

		}
		else{
			echo "DB Error!";
		}
	}
	else{
		echo "File upload error";
	}
}


		}

}
	// note to self u can start from here

echo '<a href="/logout.php"> Logout </a>'; echo '<br>';

 ?>
