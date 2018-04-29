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
<div><h1><a href="demo.php"> Travel Geeks </a></h1> <br>
<h2><a href="logout.php"> Logout </a></h2>

</div>
<script>
function chk(){
var flag =false;
var k = document.getElementById("span");
k.innerHTML = "";
if (document.getElementById("text").value.length >0){
flag = true;
k.innerHTML = "OK";
//alert("OK");
}
else {
flag =false;
k.innerHTML = "text field empty";

}
return flag;
}


</script>
<html>
<body>

<form action="postingcheck.php" method = "post" enctype="multipart/form-data">
  Select file to upload : <input type="file" name="file" id = "upload">

  <textarea onkeyup="chk()" name="message" style="width:600px; height:400px;" id ="text" ></textarea>


  Season

  <select name ="Season" id ="select">
  <option value="Summer">Summer</option>
  <option value="Rainy">Rainy</option>
  <option value="Fall">Fall</option>
   <option value="Winter">Winter</option>
  <option value="Spring">Spring</option>
	<option value="N/A">N/A</option>


</select>
<br></br>
Content Type <input type = "text" name = "type" id = "content"><br></br>




<span  id = "span" style= "color : red;"></span>
<?PHP
echo "Choose similar place <br>";
require ('db_rw.php');
$sq = "select * from  tourist_spot";
$a =getDataFromDB($sq);

echo '<select  name ="similar">';
foreach ($a as  $v){

echo '<option  value =" '.$v['name'].'" >' .$v['name']. '</option>';

}
echo '<option value ="None">None</option>';
echo '</select>';

?>
<br> </br>
<input type="submit" value ="Confirm Post" onclick="return chk()">






</form>

</body>
</html>
