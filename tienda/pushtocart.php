<?php
 include_once ("conexion.php");
 session_start();
 $con=conectar();
 $query="INSERT INTO user_cart (user_id, song_id) VALUES (".$_SESSION['logeado'].",".$_GET['idsong'].")";
  $con->query($query);

?>