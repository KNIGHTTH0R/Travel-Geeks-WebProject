<script type="text/javascript">
function chk(){
	var flag=true;
	//var l=document.forms[0].elements[0].value.length;
	//var l=document.forms[0].uname.value.length;
	//var l=document.myform.uname.value.length;
	var fname=document.getElementById("fname").value.length;
	var lname=document.getElementById("lname").value.length;
	var gender=document.getElementById("gender").value.length;
	var mail=document.getElementById("email").value.length;
	var pass=document.getElementById("pass").value.length;
	var conpass=document.getElementById("conpass").value.length;
	var country=document.getElementById("country").value.length;
	var address=document.getElementById("address").value.length;
	//var lp=document.myform.pass.value.length;
	if(fname==0){
		alert("Name empty");
		flag=false;
	}
	else if(lname==0){
		alert("Last Name Empty");
		flag=false;
	}
	else if(gender==0){
		alert("gender empty");
		flag=false;
	}
	else if(mail==0){
		alert("mail empty");
		flag=false;
	}
	else if(country==0){
		alert("Country empty");
		flag=false;
	}
	else if(pass==0){
		alert("password empty");
		flag=false;
	}
	else if(conpass==0){
		alert("password empty");
		flag=false;
	}
	
	
	else if(address ==0){
		alert("address empty");
		flag=false;
	}
	else if (document.getElementById("upload").value.length==0){
alert("No File Selected");
flag =false;
	}	
	if(flag){
		alert("OK");
	}
	return flag;
	
	
}
</script>
<html>
	<head>
		<title> Sign In</title>
		<h1>Travel Diaries</h1>
		<img src = "https://images.freeimages.com/images/large-previews/45d/the-old-atlas-3-1423485.jpg" alt ="World Map" style="width: 40%; HEIGHT : 30%" >
		<style>
			h1 { color : Tomato; 
			text-align : center;
			}
			div{
			text-align : center; 
			color : RED;
			}
			img {
			    display: block;
			    margin-left: auto;
			    margin-right: auto;
			}
		</style> 
	</head>
	<body>
		<form action="sign-up.php" method="post" enctype="multipart/form-data"> 
			<h1> Sign Up Form </h1> 
			<div>
				First Name <input type = "text" name = "fname" id ="fname"/><br>
Last Name <input type = "text" name ="lname" id ="lname"/><br>

Gender<br>
 <input type="radio" name="gender" value="male" id ="gender"> Male<br>
  <input type="radio" name="gender" value="female" id ="gender"> Female<br>
Email <input type = "text" name = "email" id ="email">  <br>
Password <input type ="password" name ="pass" id ="pass"> <br>
Confirm Password <input type = "password" name ="conpass" id ="conpass"> <br>
Nationality <input type = "text" name = "country"  id ="country"> <br>
Addresss <input type = "text" name = "address" id ="address"> <br>

				DOB 
				<select name="dob_date">
				    <option value="1">1</option>  
				    <option value="2">2</option>
				    <option value="3">3</option>
				</select> 
				<select name="dob_month">
				    <option value="January">January</option>
				    <option value="February">February</option>
				    <option value="March">March</option>
				</select> 
				<select name="dob_year">
					<option value="2016">2016</option>
					<option value="2017">2017</option>
					<option value="2018">2018</option>
				</select> 
				<br>
				
				
				<button value="Test" type="button" onclick = "chk()">
					button
				</button>
				<br>
				Select file to upload : <input type="file" name="fileToUpload" id = "upload">
				
				<button value="submit" type="submit" onclick= "return chk()">
					submit
				</button>
					
                    
				
			</div>
		</form>
	</body>
</html>
