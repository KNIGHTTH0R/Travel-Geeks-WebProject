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


<body background="images/back3.jpg">


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

<div><h2> <a href="Go.php">Spot Types </a> </h2> <br> </div>
 <div><h2> <a href="GoCountry.php">Spots in Countries   </a> </h2> </div>

<div>

	

<?php
include('Cookiebro.php');
callID();
session_start();//cookies here too
//this is mainly for user, but i'll manupulate after hitting this what can be done both for user and admin
echo "Welcome";
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
	echo '<a href="Addplaces.php"> AddPlaces </a>'; echo '<br>';


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
echo '<a href ="index.php">Click Here to Login  </a>  <br>' ;
echo '<a href ="Sign.php">Click here to sign up  </a>  ';
}

$sqlcontent =" select * from post_content";
$a= getDataFromDB($sqlcontent);
foreach ($a  as $v) {
	echo "<h3> Post by   </h3>";
	$sql = "select * from users where  user_id= '$v[user_id]'";
	callusernames($sql);
	echo   "<h3>";
	echo $uname . ", Content Type :" .  $v['content_type']  ;
	echo "</h3>";
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
</div>
