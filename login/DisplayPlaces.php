

<style>
div{
	border:4px solid Orange;
	font-family:Comic Sans MS;
	color: Black;
	text-align: center;
	 background-color: #bca;
	 width: 500px;
	 margin: 0 auto;
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


<div><h1><a href="demo.php"> Travel Geeks </a></h1> </div>

<?php

require ("db_rw.php");
//print_r($GLOBALS);
if(isset ($_GET["Architecture"])){
	$sql = "select *  from tourist_spot where Type = 'Architecture'";
	$a=getDataFromDB($sql);
	foreach($a as $v){
		echo "<div>";
		echo $v["name"];
		echo $v["address"];
		echo $v["country"];

		print '<img src="'.$v["imageloc"].'" alt="sample image" height="420" width="420"/>';

		//echo $v["name"]." from ".$v["dept"];
		echo "</div>";
echo "<h2>";
echo $v["description"];
echo "</h2>";

}

}
else if (isset ($_GET["Natural"])){
	$sql1 = "select *  from tourist_spot where Type = 'Natural'";
	$a1= getDataFromDB($sql1);
	foreach($a1 as $v){
		echo "<div>";
		echo $v["name"];
echo $v["address"];
echo $v["country"];
		echo $v["imageloc"];
		print '<img src="'.$v["imageloc"].'" alt="sample image" height="420" width="420"/>';
		//echo $v["name"]." from ".$v["dept"];
		echo "</div>";
		echo "<h2>";
		echo $v["description"];
		echo "</h2>";
}
}

 else if (isset ($_GET["Religious"])){
	$sql2 = "select *  from tourist_spot where Type = 'Religious'";
	$a2 = getDataFromDB($sql2);
	foreach($a2 as $v){
		echo "<div>";
		echo $v["name"];
		echo $v["address"];
		echo $v["country"];
		echo $v["imageloc"];
		print '<img src="'.$v["imageloc"].'" alt="sample image" height="420" width="420"/>';
		//echo $v["name"]." from ".$v["dept"];
		echo "</div>";
		echo "<h2>";
		echo $v["description"];
		echo "</h2>";
}
}

?>
