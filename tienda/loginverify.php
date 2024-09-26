<?php
session_start();
include_once ("conexion.php");
$con=conectar();
$user=$_POST["user"];
$password=$_POST["password"];


$query="SELECT password,user_id FROM usuarios where name='$user'";


if ($result = $con->query($query)) {
    #coge el resultado que devuelve
    $row = $result->fetch_row();
    echo("<script>console.log('PHP: " . $row[0] . "');</script>");
    $result->close();
}
$con->close();





echo("<script>console.log('PHP: " . "ha llegado hasta aqui" . "');</script>");


echo("<script>console.log('PHP: " . "ha llegado hasta aqui" . "');</script>");

    #pasamos a verificar la contraseña
   if(password_verify($password, $row[0])==true){
     #login correcto.
     $_SESSION["logeado"]=$row[1];

     echo("<script>console.log('PHP: " . "ha verificado la contraseña" . "');</script>");
     header("Location: index.php");

   }else{
   
    unset($_SESSION["logeado"]);
    #no ha introducido bien algun dato
    header("Location: login.php");

    
   }

?>