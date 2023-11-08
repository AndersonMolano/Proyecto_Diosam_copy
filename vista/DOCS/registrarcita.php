<?php
    session_start();
    include("../../controlador/registro_cita.php")

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
      <form METHOD="POST" class="login-form">
        <h2>Registro</h2>
        <div class="form-floating mb-3">
            <?php

                if(isset($_SESSION['name_user'])){
                    // echo '<label for="floatingInput">Nombre:</label>';
                    echo '<input type="text" class="form-control" id="floatingInput" name="name" value="' . $_SESSION['name_user'] . '" readonly>';
                }else{
                    echo 'a';
                }
            ?>
    
            
          </div> 
           <div class="form-floating mb-3">
            <select class="form-select" id="selectServicio" name="selectServicio">
                <?php

                    include("../../controlador/listar_servicios.php");

               
                    
                    for($i=1;$i<=$total_servicios;$i = $i + 1){
                        

                        $consulta_nombre= "SELECT type_servi from servicio where id_servi = $i";
                        $resulado_nombre= mysqli_query($conexion, $consulta_nombre);
                        
                        $nombre = mysqli_fetch_array($resulado_nombre);
                        $nombre_servicio = $nombre['type_servi'];
                            
                        echo '<option value="' . $i . '">' . $nombre_servicio . '</option>';
                                     
                    }
                ?>
                
            </select>
            <label for="selectServicio">Selecciona un Servicio</label>
        </div>
          <div class="form-floating mb-3">
          <label for="fecha"></label>
          <input type="date" id="fecha" name="fecha" onchange="validarFecha()">
          </div>
          <div class="form-floating mb-3">
            <label for="hora"></label>
            <input type="time" id="hora" name="hora"  oninput="validarHora()">
          </div>
          <br>

<div class="buttom-1">
    <div class="button-danger">
    <input type="submit" class="btn btn-danger" value="Agendar cita" name="registro_cita" ></input>
      </div>  
</div>
    </body>



    <script>
    function validarFecha() {
        var inputFecha = document.getElementById("fecha");
        var fechaIngresada = new Date(inputFecha.value);
        var fechaHoy = new Date();

        if (fechaIngresada < fechaHoy) {
            alert("La fecha no puede ser anterior a hoy.");
            inputFecha.value = ''; // Limpia el campo de fecha
        }
    }

    function validarHora() {
        var inputHora = document.getElementById("hora");
        var horaIngresada = inputHora.value;

        if (horaIngresada < "07:00" || horaIngresada > "20:00") {
            alert("Ingresa una hora entre las 7:00 AM y las 8:00 PM.");
            inputHora.value = ""; // Limpia el campo de hora
        }
    }
</script>
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
    
    


   