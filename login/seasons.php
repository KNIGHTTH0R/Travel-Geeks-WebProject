
<?php

require("db_rw.php");
if(isset($_REQUEST["seasons"]) && strlen($_REQUEST["seasons"])>0){
	$sq="select * from tourist_spot where suggested_season like '".$_REQUEST["seasons"]."%'";
	//echo $sq;
	$a=getDataFromDB($sq);
	foreach($a as $v){


		$c = $v["name"];
		//echo $v["name"];
		echo "<br>";
		//echo $v["address"];

		echo "<br>";
		//echo $v["description"];
 echo "<a href='show.php?spotnames=$c'>$c</a>";


}
}
else{
	echo "Invalid Parameter!";
}


?>
