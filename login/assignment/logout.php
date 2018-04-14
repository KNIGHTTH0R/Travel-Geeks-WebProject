<?php
session_start();
//$_SESSION["flag"]="";  //we zucced session here too
setcookie("flag", false, time() - 1000);
setcookie("user", "", time() - 1000);

header("Location:index.html");
?>