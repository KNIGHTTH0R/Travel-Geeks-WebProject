
<script>
function chk(){
	var flag=true;
	//var l=document.forms[0].elements[0].value.length;
	//var l=document.forms[0].uname.value.length;
	//var l=document.myform.uname.value.length;
	var l=document.getElementById("em").value.length;
	var lp=document.getElementById("a").value.length;
	//var lp=document.myform.pass.value.length;
// 	if (1>0){
// alert("hey");	}
if(l==0 || lp==0){
	flag = 'false';
	alert("error!");
}

else if(flag){

	alert("OK");
}

return flag;
}
</script>




<?php
session_start();
if(isset($_GET["error"])){
	echo "Email-Password mismatch";
}

if(isset($_GET["invalid"])){

	echo "invalid credentials";
}
?>


<html>
<style>
h1{
color: Black;
text-align: center;

border: 3px solid green;
padding: 10px;
}

div{
	border:4px solid Orange;
	font-family:Comic Sans MS;
	color: Black;
	text-align: center;
	}
	body { background-color: dark green;
}

h2{
color: Black;
text-align: auto;
border: 3px solid green;
padding: 10px;
}

</style>
<head>
	<title>Travel Geeks</title>
	<h1><a href="demo.php"> Travel Geeks </a></h1>
 <div><h1>
 <a href="Sign.php">Click here for Sign UP </a> </h1></div>

<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div id="block">Hello!</div>
	<div class="form-container">
		<h1 class="page-heading1" id="aa">Login</h1>
		<hr class="hr_pageheading">
		<form action="checkserver.php" method ="post">
			Email:<br>
			<input type="email" name="email" id="em"><br>

			Password:<br>
			<input type="password" name="password" id="a"> <br>
            <INPUT type = "button" value ="Test" onclick = "chk()"  />
			<input type="submit" name="submit" value="Submit" onclick = "return chk()" ><br><br>

		</form>
	</div>
</body>
</html>
