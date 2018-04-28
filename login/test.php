
  <?PHP
  require ('db_rw.php');
  $sq = "select Name from  users";
    $a =getDataFromDB($sq);


print_r($a);


echo "<br>";
echo  $a[2]['Name'];
 //echo  $a[0]=>[Name];
foreach ($a as $v) {
  echo $v['Name'];
}



  ?>
