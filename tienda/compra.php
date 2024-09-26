<?php
 session_start();
 include_once ("conexion.php");

 $con=conectar();
 $query="SELECT song_id from user_cart  where user_id=".$_SESSION['logeado'];
 $result = $con->query($query);
 while( $row = $result->fetch_array() )
 { $query1="INSERT INTO user_songs (user_id, song_id) Values (".$_SESSION['logeado'].",".$row['song_id'].")";
    $result1 = $con->query($query1);
 }
 $query2="DELETE from user_cart where user_id=".$_SESSION['logeado'];
 $con->query($query2);
?>