<!doctype html>
<html lang="es">
  <head>
      <base href="<?php echo base_url(); ?>">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel="stylesheet" href="css/estilos.css" >

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
      <div class="row justify-content-center">
        <div id="login" class="col-4 shadow-lg p-3 mb-5 bg-white rounded">
          <h3 id="titulo">Iniciar Sesion</h3>
          <form action="index.php/Login/Validar" method="POST"> 
            <input class="form-control" type="text" name="email" placeholder="Correo">
            <input class="form-control" type="Password" name="cve" placeholder="Password">
            <?php  if (isset($error)) {?>
              <span class="error">Nombre de Usuario/Clave incorrecto</span>    
            <?php } ?>
            <input class ="btn btn-primary"type="submit" name="validar">
          </form>
        </div>

        
      </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.min.js" ></script>

    <script src="js/bootstrap.min.js"></script>
  </body>
</html>