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
<h1 style="text-align: center; font-size: 50px;"> List of countries </h1>
<body background="images/back3.jpg">
<div style="text-align: center;">

	<?php
		require("db_rw.php");

		$s="select * from country";
		$jsn=getJSONFromDB($s);
		$jr=json_decode($jsn);
		for ($i=0; $i < count($jr); $i++) {
			print "<a href='tourist_spots.php?country_name=".$jr[$i]->country_name."'><img src='".$jr[$i]->country_flag_image."' alt='sample image' height='300' width='300'/></br>";
			echo $jr[$i]->country_name."</a>";
			echo "<br>";
		}
	?>

</div>
