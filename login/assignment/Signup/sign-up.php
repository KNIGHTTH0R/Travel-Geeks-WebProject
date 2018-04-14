<?php
require("db_rw.php");
$firstname = $_POST["fname"];     
$lastname = $_POST["lname"]; 
$gender = $_POST["gender"];
$email = $_POST["email"];
$password =$_POST["pass"];
$confirm_password = $_POST["conpass"]; 
$country = $_POST["country"];
$address =$_POST["address"];
$dob_date =$_POST["dob_date"];
$dob_month =$_POST["dob_month"];
$dob_year =$_POST["dob_year"];
$redirect_url = "index.php";

$s=$_FILES['fileToUpload']['tmp_name'];
$n=$_FILES['fileToUpload']['name'];
$ar=explode("/",$_FILES['fileToUpload']['type']);

if(empty($firstname) || empty($lastname) || empty($gender) || empty($email) || empty($password) || empty($confirm_password) || empty($country) || empty($address) || empty($dob_date) || empty($dob_month) || empty($dob_year)){
	echo "You can't leave any field empty. Please go back to sign up page.";//not necessary
	?>
</br> 
	<a href="index.php">< Back to Sign-up Page</a>
	<?php
} else {
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)){  
		echo "Email is invalid.";
		?>
		</br>
		<a href="index.php">< Back to Sign-up Page</a>
		<?php
	} else {
		if(strcmp($password, $confirm_password) != 0){
			echo "Passwords dont match.";
			?>
			</br>
			<a href="index.php">< Back to Sign-up Page</a>
			<?php
		} else {
			echo "Signed up Successfully"; 
			echo '<br/>';

		/*	$myfile = fopen("signup.txt", "w") or die("Unable to open file!"); 
			fwrite($myfile, $firstname. ",");
			fwrite($myfile, $lastname. ","); 
			fwrite($myfile, $gender. ",");
			fwrite($myfile, $country. ",");
			fwrite($myfile, $address. ","); 
			fwrite($myfile,$password. ",");
			fwrite($myfile, $dob_date. ",");
			fwrite($myfile, $dob_month. ",");
			fwrite($myfile, $dob_year. ",");
			fclose($myfile);*/
			
			
			
			if($ar[0]!="image"){
	echo "Filetype not supported";
}
else if(file_exists("uploads/".$n)){
	echo "Filename exists : ".$n;
}
else{
	if(move_uploaded_file($s,"uploads/".$n)){
		$s="insert into users values(null,'$password','$email','$address',null,'$gender','$firstname','$lastname','uploads/".$n."')";
		echo $s;
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
	}
	// note to self u can start from here 
	
	
}
 




// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//   if (empty($_POST["name"])) {
//     $nameErr = "Name is required";
//   } else {
//     $name = test_input($_POST["name"]);
//   }

//   if (empty($_POST["email"])) {
//     $emailErr = "Email is required";
//   } else {
//     $email = test_input($_POST["email"]);
//   }

//   if (empty($_POST["website"])) {
//     $website = "";
//   } else {
//     $website = test_input($_POST["website"]);
//   }

//   if (empty($_POST["comment"])) {
//     $comment = "";
//   } else {
//     $comment = test_input($_POST["comment"]);
//   }

//   if (empty($_POST["gender"])) {
//     $genderErr = "Gender is required";
//   } else {
//     $gender = test_input($_POST["gender"]);
//   }
// }




?>