<?php
session_start();

if(isset($_SESSION["logeado"])){
    echo("<script>console.log('PHP: " . "ya estas loggeado" . "');</script>");
    #para no entrar en bucle, comprobamos url para saber si redirigir o no 
    if (str_contains($_SERVER['REQUEST_URI'], 'login.php') || str_contains($_SERVER['REQUEST_URI'], 'registro.php')) {
        header("Location: index.php");
        echo "Checking the existence of the empty string will always return true";
    }
 
} else{
    echo("<script>console.log('PHP: " . "no estas loggeado" . "');</script>");
    if (str_contains($_SERVER['REQUEST_URI'], 'login.php') || str_contains($_SERVER['REQUEST_URI'], 'registro.php')) {
        
    }else{
        header("Location: login.php");
    }
    
}
?>