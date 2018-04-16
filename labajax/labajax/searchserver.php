<!DOCTYPE HTML>  
<script>
show(){
	
	var v =document.getElementById("ok");

	
	
}


</script>


<?php
require("db_rw.php");
if(isset($_REQUEST["spotnames"]) && strlen($_REQUEST["spotnames"])>0){
	$sq="select * from tourist_spot where name like '".$_REQUEST["spotnames"]."%'";
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
else if(isset($_REQUEST["ist"])){
	$s="insert into student values('null','".$_REQUEST["un"]."','".$_REQUEST["cg"]."','CS')";
	echo $s;
	if(updateSQL($s))
		echo "Data Saved";
	else
		echo "Data Save Error!";
}
else{
	echo "Invalid Parameter!";
}
//echo "this output is from server<br>";
$i=0;
$s="";
while($i<1000000){
	$s.="abcbcbaba";$i++;
}
?>