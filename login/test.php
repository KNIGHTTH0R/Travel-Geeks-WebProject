
  <?PHP
  require ('db_rw.php');
  $sq = "select * from  tourist_spot";
    $a =getDataFromDB($sq);

  echo '<select  name ="similar">';
 foreach ($a as  $v){




echo '<option  value =" '.$v['name'].'" >' .$v['name']. '</option>';


  }

  echo '</select>';

  ?>
