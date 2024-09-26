<?php include_once("sessionverify.php");?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-icons/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="css/estilos.css">

  <title>Maria</title>

</head>

<body class="login">
  <section class="vh-1000 gradient-custom" style="margin-top:-14px;">

    <div class="container py-5 h-100">

      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card bg-dark text-white" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">
              <i class="bi bi-x-square text-light equis"
                style="margin-left:380px; position:relative; text-decoration:none;" onclick="login()"> </i>

                <div class="col-1" style=" height: 20px;"> </div><!--ESPACIO EN BLANCO-->

                <h3>REGISTRO</h3>
                <div class="col-1" style=" height: 80px;"> </div><!--ESPACIO EN BLANCO-->

              <form action="post.php" method="post">
                
              <div class="form-group">

                    <input type="text" class="form-control" id="inlineFormInputName" placeholder="Nombre de usuario" name="user">
                    </div>
                <div class="col-1" style=" height: 40px;"> </div><!--ESPACIO EN BLANCO-->

                <div class="form-group">
                  <input type="password" class="form-control" placeholder="Contraseña" name="password">
                  <label for="exampleInputPassword1"><small class="font-weight-light  text-light">    <br>(Recuerda que la contraseña debe tener al menos una mayúscula, una minúscula, un numero, y un caracter especial. Ademas, debe tener entre 8 y 15 caracteres.)</small></label>
                </div>
                <div class="col-1" style=" height: 40px;"> </div><!--ESPACIO EN BLANCO-->

                <div class="form-group">
                  <input type="password" class="form-control"placeholder="Repite la contraseña" name="password1">
                </div>
                <div class="col-1" style=" height: 40px;"> </div><!--ESPACIO EN BLANCO-->

                <div class="form-check">
                  <input type="checkbox" class="form-check-input" >
                  <label class="form-check-label" for="exampleCheck1">Acepto las condiciones de uso y de privacidad</label>
                </div>

                <div class="col-1" style=" height: 40px;"> </div><!--ESPACIO EN BLANCO-->
                
                <input type="submit" class="btn btn-primary" name="guardar">
              </form>

              
             



            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">SUSCRITO</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p id="text"></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</body>
<script src="js/js.js"></script>

</html>