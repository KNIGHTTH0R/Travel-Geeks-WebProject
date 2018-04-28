<style>
div{
	border:4px solid cyan;
	font-family:courier;
	color: white;
	text-align: center;
	}
	body { background-color: lightblue;
}
</style>


<body background="images/back.jpg">
<script>
function search() {
	document.getElementById("spin").style.visibility="visible";
	var v=document.getElementById("spotnames").value;
	//var v2=document.getElementById("mytext2").value;
	var  xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			var m=document.getElementById("txtHint");
			m.innerHTML=xmlhttp.responseText;
			document.getElementById("spin").style.visibility="hidden";
			//alert(xmlhttp.responseText);
		}
	};
 	//var url="server.php?ist=ok&un="+v+"&cg="+v2;
 	var url="searchserver.php?spotnames="+v;
	//alert(url);
	xmlhttp.open("GET", url,true);
	xmlhttp.send();
}

// adding ajax to our home
</script>

<input type = "text" id = "spotnames" onkeyup = "search()"  /> Search by spotnames
<img src= "spin.gif" id = "spin" width="20px" height="20px" style="visibility:hidden" /><br/>

<p id="txtHint" style="border-bottom:6px solid red;"></p>
<br/>



<?php
require('Cookiebro.php');
callID();
session_start();//cookies here too
//this is mainly for user, but i'll manupulate after hitting this what can be done both for user and admin
echo "hola";
//print_r($GLOBALS);
ECHO "<h1 style='color : red;'> HOME </H1>";
//if(isset($_SESSION["flag"]) && $_SESSION["flag"]=="go" && isset($_SESSION["user"]))





if(isset($_COOKIE['flag']) && isset($_COOKIE['user'])){

if ($rol == 'admin')

{
	echo "Welcome  " .$rol."-> ".$_COOKIE['user'];
//echo	"Welcome User " . $_SESSION["user"] ;echo '<br>';

	echo '<a href="logout.php"> Logout </a>'; echo '<br>';
	echo '<a href="AdminEdit.php"> Admin Edit </a>'; echo '<br>';
	echo '<a href="postform1.php"> POST </a>'; echo '<br>';

	//echo '<a href="postform1.html"> Post </a>'; we dont need this for cookie
}

else {
	echo "Welcome  " .$rol."-> ".$_COOKIE['user'];
//echo	"Welcome User " . $_SESSION["user"] ;echo '<br>';

	echo '<a href="logout.php"> Logout </a>'; echo '<br>';
	echo '<a href="Edit.php"> Edit </a>'; echo '<br>';
	echo '<a href="postform1.php"> POST </a>'; echo '<br>';


}
}
else {
echo "Welcome Stranger";


}

$sqlcontent =" select * from post_content";
$a= getDataFromDB($sqlcontent);
foreach ($a  as $v) {
	echo "<h4> Post by   </h4>";
	$sql = "select * from users where  user_id= '$v[user_id]'";
	callusernames($sql);
	echo $uname . " Content Type " .  $v['content_type']  ;
	echo  "<div>";
echo $v['Text'];
echo "</div>";

echo  "<div>";
echo "Similar Places : ".$v['similar_places']."";
echo "</div>";
echo  "<div>";
print '<img src="'.$v["postimage"].'" alt="sample image" height="420" width="420"/>';
echo "</div>";


//echo $v[]


}


?>
