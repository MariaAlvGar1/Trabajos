<?php include_once("sessionverify.php")?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-icons/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="css/estilos.css">

  <title>Maria log in </title>

</head>

<body class="login">
  <section class="vh-1000 gradient-custom" style="margin-top:-14px;">

    <div class="container py-5 h-100">

      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card bg-dark text-white" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">
              <i class="bi bi-x-square text-light equis"  style="margin-left:380px; position:relative; text-decoration:none;"> </i>
              <div class="col-1" style=" height: 40px;"> </div><!--ESPACIO EN BLANCO-->

              <h3>LOG IN</h3>
                <div class="col-1" style=" height: 80px;"> </div><!--ESPACIO EN BLANCO-->

              <form action="loginverify.php" method="post">
                
              <div class="form-group">

                    <input type="text" class="form-control" id="inlineFormInputName" placeholder="Nombre de usuario" name="user">
                    </div>
                <div class="col-1" style=" height: 40px;"> </div><!--ESPACIO EN BLANCO-->

                <div class="form-group">
                  <input type="password" class="form-control" placeholder="Contraseña" name="password">
                 
                </div>
                <div class="col-1" style=" height: 40px;"> </div><!--ESPACIO EN BLANCO-->

                

                <div class="form-check">
                  <input type="checkbox" class="form-check-input" >
                  <label class="form-check-label" for="exampleCheck1">Recordar contraseña</label>
                </div>

                <div class="col-1" style=" height: 40px;"> </div><!--ESPACIO EN BLANCO-->
                
                <input type="submit" class="btn btn-primary" name="guardar">
              </form>
              <div class="col-1" style=" height: 40px;"> </div><!--ESPACIO EN BLANCO-->

              
              <div>
                <p class="mb-0">¿No tienes una cuenta? <a href="registro.php"
                    class="text-white-50 fw-bold">Regístrate</a>
                </p>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
<script src="js/js.js"></script>

</html>