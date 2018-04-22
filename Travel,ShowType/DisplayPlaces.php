






<?php

require ("db_rw.php");
//print_r($GLOBALS);
if(isset ($_GET["Architecture"])){
	$sql = "select imageloc  from tourist_spot where Type = 'Architecture'";
	$a=getDataFromDB($sql);
	foreach($a as $v){
		echo "<p>";
		echo $v["imageloc"];
		print '<img src="'.$v["imageloc"].'" alt="sample image" height="420" width="420"/>';

		//echo $v["name"]." from ".$v["dept"];
		echo "</p>";


}

}
else if (isset ($_GET["Natural"])){
	$sql1 = "select imageloc  from tourist_spot where Type = 'Natural'";
	$a1= getDataFromDB($sql1);
	foreach($a1 as $v){
		echo "<p>";
		echo $v["imageloc"];
		print '<img src="'.$v["imageloc"].'" alt="sample image" height="420" width="420"/>';
		//echo $v["name"]." from ".$v["dept"];
		echo "</p>";
}
}

 else if (isset ($_GET["Religious"])){
	$sql2 = "select imageloc  from tourist_spot where Type = 'Religious'";
	$a2 = getDataFromDB($sql2);
	foreach($a2 as $v){
		echo "<p>";
		echo $v["imageloc"];
		print '<img src="'.$v["imageloc"].'" alt="sample image" height="420" width="420"/>';
		//echo $v["name"]." from ".$v["dept"];
		echo "</p>";
}
}

?>
