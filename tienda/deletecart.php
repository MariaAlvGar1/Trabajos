<?php
 include_once ("conexion.php");
 session_start();
 $con=conectar();
 $query="DELETE from user_cart where cart_id=".$_GET['idcarrito']. " and user_id=" .$_SESSION['logeado'];
  $con->query($query);
  

?>