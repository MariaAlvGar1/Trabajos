<?php include_once("sessionverify.php") ;
include_once ("conexion.php");
$con=conectar();
$query="SELECT name FROM usuarios where user_id = ".$_SESSION['logeado'];
if ($result = $con->query($query)) {
  #coge el resultado que devuelve
  $row = $result->fetch_row();
  $nombre=$row[0];

}
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-icons/font/bootstrap-icons.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link rel="stylesheet" href="css/estilos1.css">
  <script src="./js/js.js"></script>

  <title>Maria carrito</title>

</head>

<body>
  <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-black fixed-top">
    <!-- Container wrapper -->
    <div class="container-fluid">
      <!--  button -->
      <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#sidebarMenu"
        aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>

      <!-- logo -->
      <a class="navbar-brand" href="#" style="margin-left:20px;">
        <i class="bi  bi-person-square "></i>
        <h5 onclick=borrarSesion(); class="btn">LOG OUT</h5>
      </a>


      <div class="text-light" style="margin-left:40px;">
        <!-- con el = solo se sacan valores -->
        <h5>Bienvenido,
          <?= $nombre?>
        </h5>
      </div>
      <!-- Search form -->
      <form class="d-none d-md-flex input-group w-auto my-auto">
        <span class="border-0" style="margin-top: 7px;"><i class="bi bi-search"
            style="color:white;margin-right: 15PX;"></i></span>
        <input autocomplete="off" type="search" class="form-control rounded text-light" placeholder=''
          style="min-width: 225px; background-color:black;" />

      </form>
      <div class="btn btn-light" onclick=carrito();>
        <i class="bi bi-cart4"></i>
      </div>




      <!-- Avatar -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle hidden-arrow d-flex align-items-center" href="#" id="navbarDropdownMenuLink"
          role="button" data-mdb-toggle="dropdown" aria-expanded="false">

          <img src="img/logo2.png" height="65" alt="Logo" class="rounded-circle" style="margin-top:-25px;"
            loading="lazy" />
        </a>
      </li>
      </ul>
    </div>

  </nav>
  <!-- Termina la navegacion -->
  <div class="col-1" style=" height: 150px; "> </div><!--ESPACIO EN BLANCO-->
  <i class="bi bi-x-square text-light equis" onclick="index()" style="margin-left:205vh;  position:relative; text-decoration:none;"> </i>
  <table class="table table-striped table-dark " style=" width: 200vh; margin-left: auto;
  margin-right: auto">

<?php


echo "<tr>";
echo "<thead>";
echo "<th scope='col'>Artista</th>";
echo "<th scope='col'>Canción</th>";
echo "<th scope='col'>Precio</th>";
echo "<th scope='col'></th>";
echo "</thead>";
#para sacar los datos del las canciones 
$query="SELECT so.artist,so.title,so.price, usca.cart_id FROM songs so INNER JOIN  user_cart usca ON usca.song_id = so.song_id WHERE usca.user_id = ".$_SESSION['logeado'];
$result = $con->query($query);
while( $row = $result->fetch_array() )
{ echo("<script>console.log('PHP: " . $row[0] .$row[1] . $row[2] . "');</script>");
    
  echo "<td>" . "$row[0]" . "</td>";

 echo "<td>" . "$row[1]". "</td>";

 echo "<td>" . "$row[2]" . "</td>";

 echo"<td onclick='borrarcarrito(".$row[3].")'><i class='bi bi-trash3-fill'></i><td>";

 echo "</tr>";
}
$con->close();

echo "</table>";
?>
 </table>
 <div class="col-1" style=" height: 40px;"> </div><!--ESPACIO EN BLANCO-->
 <button class="btn" style="margin-left:100vh;" onclick='comprar()'> COMPRAR</button>
</body>

</html>