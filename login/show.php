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


</script>
<a href="demo.php">HOME</a>
<style>
#cs{
		font-size:18pt;color:red;
	}
</style>
<input type = "text" id = "spotnames" onkeyup = "search()"  /> Search by spotnames
<img src= "spin.gif" id = "spin" width="20px" height="20px" style="visibility:hidden" /><br/>

<p id="txtHint" style="border-bottom:6px solid red;"></p>
<br/>


<?Php

require("db_rw.php");
//print_r($GLOBALS);
//echo $_REQUEST["spotnames"];
$spotnames = $_REQUEST["spotnames"];
if ( Isset($_REQUEST["spotnames"])){

$sq="select * from tourist_spot where name = '$spotnames' ";
//echo $sq;
$a = getDataFromDB($sq);
//echo $a;
foreach ( $a as $v){
	echo "<div >";
	echo " <h1 style='color:blue ; text-align : center ;' >  $spotnames   ";
	echo $v["address"];
	echo "<br>";
	echo "Country:".$v["country"];
	echo "<br>";
	echo "Type :" .$v['type'];

	echo "<br>";
	echo "Suggested Season:".$v["suggested_season"];
	echo "<br>";



	print "<img src='$v[imageloc]' alt='sample image' height='640' width='640' />";
	echo "<br>";
	echo $v["description"];

	echo "</div>";
	echo "</h1>";
	//echo " <h1 style='color:blue ; text-align : center ;' >  '$v["address"]'   </h1> ";

}








}
?>
