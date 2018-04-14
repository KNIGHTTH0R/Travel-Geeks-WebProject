<?php
session_start();//cookies here too
echo "hola";
ECHO "<h1 style='color : red;'> HOME </H1>";
//if(isset($_SESSION["flag"]) && $_SESSION["flag"]=="go" && isset($_SESSION["user"]))
if(isset($_COOKIE['flag']) && $_COOKIE['flag']){	

if (isset($_COOKIE['user']))

{
	echo "Welcome User " . $_COOKIE['user'];
//echo	"Welcome User " . $_SESSION["user"] ;echo '<br>';

	echo '<a href="logout.php"> Logout </a>'; echo '<br>';
	//echo '<a href="postform1.html"> Post </a>'; we dont need this for cookie 
}
}
 
?>

 


