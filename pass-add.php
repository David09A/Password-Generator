<?php

include('database.php');

if(isset($_POST['pass'])) {
  $passgen = $_POST['pass'];
  $query = "INSERT INTO passcopied (passcopy) VALUES ('$passgen');";
  $result = mysqli_query($connection, $query);

  if (!$result) {
    die('Query Failed.');
  }

  //echo "New password in history";
}/*else {
  echo "Passwords are not coming ".$_POST['pass'];
}*/


?>
