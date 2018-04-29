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

<h1 style="text-align: center; font-size: 50px;"> List of tourist spots </h1>

<div style="text-align: center;">
	<?php
		require("db_rw.php");
		//echo "<a href='".$link_address."'>Link</a>";
		$country_name = $_GET["country_name"];
		//echo $country_id;
		$s="select * from tourist_spot where country= '$country_name' ";
		//echo $s;
		$jsn=getJSONFromDB($s);
		$jr=json_decode($jsn);
		for ($i=0; $i < count($jr); $i++) {
			print "<img src='".$jr[$i]->imageloc."' alt='sample image' height='420' width='420'/></br>";
echo "<h2>";
			echo $jr[$i]->name; echo "</h2>";
			echo $jr[$i]->address; echo "<h2>";
echo $jr[$i]->description; echo "<h2>";
			echo $jr[$i]->country; echo "</h2>";
			echo "<br>";
		}
	?>
</div>
