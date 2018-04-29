
<h1> Edit Places <h1>
<table>
<tr>
  <th> Name </th>  <th> type  </th> <th> Address </th> <th> Country </th>  <th> Suggested Season </th> <th> IMage </th>  <th> Old imagelocation </th><th> New imagelocation </th> <th>  </th><th> Description </th>

        </tr>
<a href="logout.php"> Logout </a>

              <?php
require("db_rw.php");
$sq = "select * from tourist_spot";
$a = getDataFromDB($sq);
foreach ($a as $v) {
  //$vegen = $v['gender'];
  //  $vrole = $v['Role'];
  //echo $vegen;
  echo "<tr><form action='addplaceserver.php' method ='post' enctype='multipart/form-data'  id='usrform'>";
echo "<td><input type ='text' name='name' value='".$v['name']."'></td>";
echo "<td><input type ='text' name='type' value='".$v['type']."'></td>";
echo "<td><input type ='text' name='address' value='".$v['address']."'></td>";
echo "<td><input type ='text' name='country' value='".$v['country']."'></td>";
echo "<td><input type ='text' name='sugg' value='".$v['suggested_season']."'></td>";
echo '<td><img src='."$v[imageloc]".'  height="50" width="50"></td>';

echo "<td><input type ='text' name='img' value='".$v['imageloc']."'></td>";
echo '<td><input type="file" name="fileToUpload" id = "upload"  ></td>';
echo "<td><input type ='hidden' name='id' value='".$v['spot_id']."'></td>";
echo '<td><textarea rows="4" cols="50" name="des">  '."$v[description]".'        </textarea></td>';

echo "<td><input type = 'submit' <td>";
echo "</form></tr>";




}

?>



</table>



<h1> Add Place <h1>

    <table>
    <tr>
      <th> Name </th>  <th> type  </th> <th> Address </th> <th> Country </th>  <th> Suggested Season </th> <th> imageloc </th> <th> description </th>

            </tr>


       <tr><form action='addplaceserver.php?add="ok"' method ='post' enctype="multipart/form-data">
     <td><input type ='text' name='name' ></td>
     <td><input type ='text' name='type' ></td>
     <td><input type ='text' name='address'></td>
     <td><input type ='text' name='country' value></td>
    <td><input type ='text' name='sugg' value></td>

     <td><input type="file" name="fileToUpload" id = "upload"  ></td>

<td><textarea rows="4" cols="50" name="des"> </textarea> </td>
     <td><input type = 'submit' <td>
     </form></tr>




  </table>
