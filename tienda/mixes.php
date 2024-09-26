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

  <title>Tus canciones</title>

</head>



<body>
  <header>
    <!-- Sidebar -->
    <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-black">
      <div class="position-sticky">
        <div class="list-group list-group-flush mx-3 mt-4">
          <div class="col-1" style=" height: 40px;"> </div><!--ESPACIO EN BLANCO-->
          <a href="#" class="list-group-item list-group-item-action py-2 ripple" aria-current="true" onclick=index();>
            <i class="fas fa-tachometer-alt fa-fw me-3"></i><span>Inicio</span>
          </a>
          <a href="#" class="list-group-item list-group-item-action py-2 ripple">
            <i class="fas fa-chart-pie fa-fw me-3"></i><span>Explorar</span>
          </a>
          <div class="col-1" style=" height: 40px;"> </div><!--ESPACIO EN BLANCO-->
          <a class="text-decoration-none text-light"><i class="fas fa-lock fa-fw me-3"></i><span>
              <h4>Mi música</h4>
            </span></a>
          <a href="#" class="list-group-item list-group-item-action py-2 ripple" onclick=mixes();><i
              class="fas fa-chart-line fa-fw me-3"></i><span><i class="bi bi-music-player"></i> Tus canciones</span></a>
          <a href="#" class="list-group-item list-group-item-action py-2 ripple">
            <i class="fas fa-chart-pie fa-fw me-3"></i><span><i class="bi bi-youtube"></i> Videos</span>
          </a>
          <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i
              class="fas fa-chart-bar fa-fw me-3"></i><span><i class="bi bi-music-note-list"></i> Playlists </span></a>
          <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i
              class="fas fa-globe fa-fw me-3"></i><span><i class="bi bi-card-list"></i> Playlist de amigos</span></a>
          <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i
              class="fas fa-building fa-fw me-3"></i><span><i class="bi bi-mic"></i> Artistas</span></a>

        </div>
      </div>
    </nav>
    <!-- Barra lateral -->

    <!-- navegacion -->
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
          <i class="bi bi-person-square "></i>
          <h5 class="btn" onclick=borrarSesion();>LOG OUT</h5>
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
          <a class="nav-link dropdown-toggle hidden-arrow d-flex align-items-center" href="#"
            id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">

            <img src="img/logo2.png" height="65" alt="Logo" class="rounded-circle" style="margin-top:-25px;"
              loading="lazy" />
          </a>
        </li>
        </ul>
      </div>

    </nav>
    <!-- Termina la navegacion -->
  </header>


  <!--Pagina principal-->
  <main style="margin-top: 58px;">
  <div class='container mx-auto mt-4' >
  <div class='row'>
    
  <?php
  $con=conectar();
  $query="SELECT so.song_id, so.artist,so.title, so.price FROM songs so INNER JOIN user_songs usso ON usso.song_id=so.song_id WHERE usso.user_id = ".$_SESSION['logeado'];


  $result = $con->query($query);
  while( $row = $result->fetch_array()){ 
    echo("<script>console.log('  $row[0]. $row[1].$row[2].$row[3]  ');</script>");
   $img = "img/$row[0].jpg";
   echo("<script>console.log('  $img  ');</script>");
   
  echo  "<div class='col-md-4' style='margin-top:34px;'>";
  echo  "<div class='card' style='width: 18rem;'>";
  echo  "<img src='$img' class='card-img-top' alt=''>";
  echo   "<div class='card-body'>";
  echo    "<h4 class='card-title' style='margin-top:15px'>$row[2]</h4>";
  echo    "<p class='card-text'>$row[1]</p>";
  echo    "<a href='#' class='btn ' style='margin-left:20px;'><i class='fab fa-github' ><i class='bi bi-play-fill'></i></i></a>";
  echo    "<footer class='blockquote-footer' style='margin-top:auto;'><h6> <h6></footer>";
  echo     " </blockquote>";
           
  echo    " </div>";
  echo     "</div>";
  echo  "</div>";
 
  }
  $con->close();
  
       ?> 
  </div>
  </div>
  </main>
  <!--Termina la pagina principal-->
</body>


</html>