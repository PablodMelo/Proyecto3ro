<?php

include('db.php');

if (isset($_POST['save_producto'])) {
  $Codigo = $_POST['Codigo'];
  $Nombre = $_POST['Nombre'];
  $Descripcion = $_POST['Descripcion'];
  $Stock = $_POST['Stock'];
  $Precio = $_POST['Precio'];
  $query = "INSERT INTO producto (Codigo,Nombre ,Descripcion , Stock, Precio) VALUES ('$Codigo','$Nombre', '$Descripcion', '$Stock', '$Precio')";
  $result = mysqli_query($con, $query);
  if(!$result) {
  $_SESSION['message'] = 'Error al guardar el producto';
  $_SESSION['message_type'] = 'danger';
  header('Location: index.php');

    
  }else{

  $_SESSION['message'] = 'Producto guardado exitosamente';
  $_SESSION['message_type'] = 'success';
  header('Location: index.php');
}
}

?>
