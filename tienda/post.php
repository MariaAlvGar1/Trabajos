<?php

#conectamos con el php que hace la conexion a la bd
include_once ("conexion.php");

$con=conectar();
#string lenth (para saber la cantidad de caracteres)
#isset , trigger de pulsar
#trim elimina los espacios del principio y del final
$password_regex = "/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/";

if(isset($_POST["guardar"])){
   
    
    if (strlen($_POST["user"])>1 &&
    strlen($_POST["password"])>1 &&
    strlen($_POST["password1"])>1  ){
        #entra si se han completado los campos
        if($_POST['password']==$_POST['password1']){
            #entra si ambas contraseñas coinciden
            echo("<script>console.log('PHP: " . "las contraseñas coinciden" . "');</script>");
            if(preg_match($password_regex, $_POST["password"])){
                $user=trim($_POST['user']);
                $password=trim($_POST['password']);
                $cifrado=password_hash($password, PASSWORD_DEFAULT, array("cost"=>12));
                #el coste es la dificultad del encriptado, gasta mas recursos
                $consulta="INSERT INTO usuarios( name, password) VALUES ('$user','$cifrado')";
                $resultado=mysqli_query($con,$consulta);
                header("Location: index.php");


            } else{
                #imprimir nota de Recuerda que ....
                echo("<script>console.log('PHP: " . "no cumple el regex" . "');</script>");
            }
        }else{
             #las contraseñas no coinciden
        }
        #para ver si cumple las condiciones de la reg ex
       
    }else{
        #aqui no ha completado los campos
      
        echo("<script>console.log('PHP: " . "no campos completos" . "');</script>");
    }
}else{
    echo("<script>console.log('PHP: " . "fin" . "');</script>");
}


?>