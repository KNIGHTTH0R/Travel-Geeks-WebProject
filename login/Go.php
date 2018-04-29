<div><h1><a href="demo.php"> Travel Geeks </a></h1> </div>
<body background="images/back3.jpg">
<H1> list of types <h1>



<?php
require("db_rw.php");
//echo "<a href='".$link_address."'>Link</a>";

$s="select imagelocation from spot_types where Type ='Architecture'";
$jsn=getJSONFromDB($s);
$jr=json_decode($jsn);
print '<img src="'.$jr[0]->imagelocation.'" alt="sample image" height="420" width="420"/>';

echo '<a href="DisplayPlaces.php?Architecture">Architecture</a>';


//print_r($jr);
//echo $jr[0]->imagelocation;
echo "<br>";
$s2="select imagelocation from spot_types where Type = 'Natural'";
$jsn1=getJSONFromDB($s2);
$jr2=json_decode($jsn1);
print '<img src="'.$jr2[0]->imagelocation.'" alt="sample image" height="420" width="420"/>';

echo "<a href='DisplayPlaces.php?Natural'>Natural</a>";
echo "<br>";
$s3="select imagelocation from spot_types where Type ='Religious'";
$jsn2 = getJSONFromDB($s3);
$jr3 = json_decode($jsn2);
//$jsn=getJSONFromDB($s3);
//echo $jsn;




//print '<img src="'.$jr[0]->imagelocation.'" alt="sample image" />';

print '<img src="'.$jr3[0]->imagelocation.'" alt="sample image" height="420" width="420" />';//

//echo "<br>";
echo "<a href='DisplayPlaces.php?Religious'>Religious</a>";









?>
