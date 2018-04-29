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
<script>
function search() {
	var v=document.getElementById("seasons").value;
	//var v2=document.getElementById("mytext2").value;
	var  xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			var m=document.getElementById("txtHint");
			m.innerHTML=xmlhttp.responseText;
			//alert(xmlhttp.responseText);
		}
	};
 	//var url="server.php?ist=ok&un="+v+"&cg="+v2;
 	var url="seasons.php?seasons="+v;
	//alert(url);
	xmlhttp.open("GET", url,true);
	xmlhttp.send();
}

// adding ajax to our home
</script>

<input type = "text" id = "seasons" onkeyup = "search()"  /> Search by seasons
<p id="txtHint" style="border-bottom:6px solid red;"></p>
<br/>

<div><h2> <a href="demo.php">Travel Geeks, A Travel Diary </a> </h2> <br> </div>

<?php
require("Cookiebro.php");
$sql = "select DISTINCT suggested_season, count(*) as number from tourist_spot GROUP by suggested_season ";
//echo $sql;

$a = updateSQL($sql);
foreach ($a  as $v) {
  $sq="select * from tourist_spot where suggested_season like '".$v["suggested_season"]."%'";
$b = getDataFromDB($sq);

  echo "<h2>";
  echo $v['suggested_season']; echo "<br>";
  echo  "Amount: ".$v['number']; echo "<br>";
  foreach ($b as $v1) {
    $c = $v1["name"];
    echo "<a href='show.php?spotnames=$c'>$c</a>";
   echo$v1["address"]. " ||";

print "<img src='$v1[imageloc]' alt='sample image' height='60' width='60' />";
  }
echo "</h2>";
  // code...
}













 ?>
