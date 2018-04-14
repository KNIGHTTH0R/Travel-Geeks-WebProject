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
//$dob_month =$_POST["dob_month"];
//$dob_year =$_POST["dob_year"];
$redirect_url = "index.php";

$s=$_FILES['fileToUpload']['tmp_name'];
$n=$_FILES['fileToUpload']['name'];
$ar=explode("/",$_FILES['fileToUpload']['type']);

if(empty($firstname) || empty($lastname) || empty($gender) || empty($email) || empty($password) || empty($confirm_password) || empty($dob) || empty($address) ){
	echo "You can't leave any field empty. Please go back to sign up page.";//not necessary

} else {
	
	
	  
			echo "Signed up Successfully"; 
			echo "<br/>";

		/*	$myfile = fopen("signup.txt", "w") or die("Unable to open file!"); 
			fwrite($myfile, $firstname. ",");
			fwrite($myfile, $lastname. ","); 
			fwrite($myfile, $gender. ",");
			fwrite($myfile, $country. ",");
			fwrite($myfile, $address. ","); 
			fwrite($myfile,$password. ",");
			fwrite($myfile, $dob. ",");
			
			fclose($myfile);*/
			
			if($ar[0]!="image"){
	echo "Filetype not supported";
}
/*else if(file_exists("uploads/".$n)){
	echo "Filename exists : ".$n;
}*/
else{
 if(move_uploaded_file($s,"uploads/".$n)){
		$s="insert into users values(null,'$md5','$email','$address','$dob','$gender','$firstname','$lastname','uploads/".$n."')";
		echo $s;
		echo $dob;
		if(updateSQL($s)){
			echo "Data Inserted into DB";
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
	
	// note to self u can start from here 
	
	

 ?>