<html>
<style>
div{
	border:4px solid Red;
	font-family:Comic Sans MS;
	color: Aqua;
	text-align: center;
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

<table>
<tr>
  <th>First Name </th>  <th> Last name </th> <th> Country </th> <th> email </th>  <th> Password </th> <th> Address </th> <th> DOB </th>
      <th> Gender </th>
        <th> Role </th>
        </tr>


              <?php
require("db_rw.php");
$sq = "select * from users";
$a = getDataFromDB($sq);
foreach ($a as $v) {
  $vegen = $v['gender'];
    $vrole = $v['Role'];
  //echo $vegen;
  echo "<tr><form action='admineditserver.php' method =post>";
echo "<td><input type ='text' name='fname' value='".$v['Name']."'></td>";
echo "<td><input type ='text' name='lname' value='".$v['Lastname']."'></td>";
echo "<td><input type ='text' name='country' value='".$v['country']."'></td>";
echo "<td><input type ='text' name='email' value='".$v['email']."'></td>";
echo "<td><input type ='text' name='password' value=''></td>";
echo "<td><input type ='text' name='address' value='".$v['address']."'></td>";

echo "<td><input type ='date' name='dob' value='".$v['dob']."'></td>";

echo '<td><input type ="radio" name="gender" value="male" '.($vegen=='male' ? 'checked="checked"' : '').'>Male <br> <input type ="radio" name="gender" value="female" '.($vegen=='female' ? 'checked="checked"' : '').'>Female</td>' ;



//Male <br> <input type ='radio' name='gender' value='".$v['gender']."'> Female</td> ";
//echo "<td><input type ='radio' name='gender' value='".$v['gender']."'></td>";
//'.($value=='United States' ? 'selected="selected"' : '').'

//echo "<td><input type ='text' name='role' value='".$v['Role']."'></td>";
echo '<td><input type ="radio" name="role" value="admin" '.($vrole=='admin' ? 'checked="checked"' : '').'>Admin <br> <input type ="radio" name="role" value="user" '.($vrole=='user' ? 'checked="checked"' : '').'>User</td>' ;

echo "<td><input type ='hidden' name='userid' value='".$v['user_id']."'></td>";

echo "<td><input type = 'submit' <td>";
echo "</form></tr>";




}

?>

  <table>



</html>
