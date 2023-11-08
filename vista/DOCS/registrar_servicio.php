<?php
  require_once("../../modelo/conexion.php");
  include("../../controlador/registrar_servi.php");

?>


<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Lobster+Two:ital,wght@0,700;1,700&display=swap');
          </style>
        <link rel="stylesheet" href="../CSS/docs.css">
        <title>Diosam</title> 
    </head>
    <header>
      <div class="container">
          <div class="row align-items-center">
              <div class="col-md-6">
                  <a class="navbar-brand" href="#">
                      <img src="../IMG/logoDS.png" alt="Bootstrap" width="100" height="80">
                      <span class="texto">Diosam</span>
                  </a>
              </div>
              <div class="col-md-6">
                  <nav>
                      <ul class="nav justify-content-end">
                          <li class="nav-item">
                              <a class="nav-link" href="../../index.php">Inicio</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="galeria.php">Galería</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="about.php">Conócenos</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="#">Visítanos</a>
                          </li>
                          <?php
                    
                          if(isset($_SESSION['email_user']) && $_SESSION['rol'] == 1 ){
                              require_once("../template/user_log.php");
                              echo('<li class="nav-item">
                              <a class="inicia-sesion" href="../../rest/usuarios.html">administrar Usuarios</a>
                              </li>');
                              echo('<li class="nav-item">
                                <a class="inicia-sesion" href="registrar_servicio.php">Agregar servicio</a>
                                </li>');
                              
                          }else if(isset($_SESSION['email_user'])){ 
                              require_once("../template/user_log.php");

                              }else{
                                  echo('<li class="nav-item">
                                  <a class="inicia-sesion" href="login.php">Iniciar Sesión</a>
                                  </li>');
                              }
                          ?>
                      </ul>
                  </nav>
              </div>
          </div>
      </div>
  </header>
      <body>
       <form class="login-form" method="POST">
        <h2>Registra un nuevo servicio</h2>
       
        <div class="form-floating mb-3">
    
            <input  maxlength="50" type="name" class="form-control" id="type_servi" name="type_servi" placeholder="Tipo" required autofocus>
            <label for="floatingInput">Ingresa el nombre del servicio</label>
          </div> 
          <div class="form-floating mb-3">
            <input minlength="4" maxlength="50"  class="form-control" id="descrip_servi" placeholder="Descripcion" name="descrip_servi" required>
            <label for="floatingInput">Ingresa la descripcion del servicio</label>
          </div>
          <div class="form-floating mb-3">
            <input maxlength="40" type="text" class="form-control" id="price_servi" placeholder="Precio" name="price_servi" required>
            <label for="floatingInput"> Ingresa el precio del servicio </label>
          </div>
          <div class="button-danger">
            <input type="submit" class="btn btn-danger" value="Registrarse" name="registro_servi" ></input>
          </div>  
         <br>
         <br>
         
         </button>
       </form>
      </body>





      <footer>
  <div class="contenido">
      <ul>
          <li>Información de contacto:</li>
          <li>Teléfono: 123-456-789</li>
          <li>Correo: info@example.com</li>
          <li>Dirección: Calle Principal, Ciudad</li>
      </ul>
  </div>
</footer>
    </html>
    

    
    
   