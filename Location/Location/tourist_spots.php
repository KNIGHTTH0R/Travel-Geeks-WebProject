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
			echo $jr[$i]->name;
			echo "<br>";
		}
	?>
</div>