<?php

include("db.php");

if(isset($_GET['CI'])) {
  $Codigo = $_GET['CI'];
  $query = "DELETE FROM producto WHERE CI = $CI";
  $result = mysqli_query($con, $query);
  if(!$result) {
    die("Query Failed.");
  }
  $_SESSION['message'] = 'Usuario removido';
  $_SESSION['message_type'] = 'danger';
  header('Location: index.php');
}

?>
