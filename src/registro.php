
  <!DOCTYPE html>
  <html>
    <head>
      <meta charset="utf-8">
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../css/materialize.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="../css/style.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <link rel="icon" href="../img/favicon.ico" />
      <title>Tuita</title>

      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="../js/materialize.js"></script>
      <script type="text/javascript" src="../js/comprobar.js"></script>

    </head>

    <body>

      <!-- Barra de navegacion -->
      <nav>
        <div class="nav-wrapper teal"><!-- Color -->
         <a class="brand-logo"><i class="material-icons">chat</i>Tuita</a>
          <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="iniciarSesion.php">Iniciar Sesion</a></li>
            <li><a href="index.php">Pagina Principal</a></li>
          </ul>
          <ul class="side-nav" id="mobile-demo">
            <li><a href="iniciarSesion.php">Iniciar Sesion</a></li>
            <li><a href="index.php">Pagina Principal</a></li>
          </ul>
        </div>
      </nav>
      <!-- Fin Barra de navegacion -->
      <main>
      <!-- FORMULARIO REGISTRO -->
       <div class="row">
        <?php
          $nombre = $apellido = $usuario = $contrasenia = $fecha = $gustos = "";
          if($_SERVER["REQUEST_METHOD"] == "POST"){
                require('../php/controlador.php');
                $nombre = testearDato($_POST["Nombre"]);
                $apellido = testearDato($_POST["Apellidos"]);
                $usuario = testearDato($_POST["Usuario"]);
                $contrasenia = testearDato($_POST["Contrasenia"]);
                $fecha = testearDato($_POST["Fecha"]);
            }
        ?>
        <form class="col s12" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" onsubmit="return comprobarDatos()">
          <div class="row"><!-- DATOS NOMBRE Y USUARIO -->
            <div class="input-field inline col s6">
              <input id="id_nombre" type="text" class="validate" name="Nombre" onchange="comprobarNombre()">
              <label id="id_label_nombre" for="id_nombre">Nombre *</label>
              <p id="error_nombre" class="red-text"></p>
            </div>
            <div class="input-field col s6">
              <input id="id_apellidos" type="text" class="validate" name="Apellidos" onchange="comprobarApellidos()">
              <label for="id_apellidos">Apellidos *</label>
              <p id="error_apellidos" class="red-text"></p>
            </div>
          </div>
          <div class="row">
             <div class="input-field col s12">
              <input id="id_usuario" type="text" class="validate" name="Usuario" onchange="comprobarUsuario()">
              <label for="id_usuario">Nombre de Usuario *</label>
              <p id="error_usuario" class="red-text"></p>
              <?php
                if($usuario != ""){
                  if(buscar($usuario)){
                    echo '<p id="error_usuario" class="red-text">El usuario ya esta registrado</p>';
                  }
                  else{
                      insertar($usuario, $nombre, $apellido, $contrasenia, $fecha);
                      //session_start();
                      //$_SESSION["usuario"] = $usuario;
                      header('Location: index.php');
                  }
                }
              ?>
            </div>
          </div>
          <div class="row"><!-- PARA CONTRASEÑA -->
            <div class="input-field col s6">
              <input id="id_password" type="password" class="validate" name="Contrasenia" onchange="comprobarContrasenia()">
              <label for="id_password">Contraseña *</label>
              <p id="error_contrasenia" class="red-text"></p>
            </div>
            <div class="input-field col s6">
              <input id="id_password_repetir" type="password" class="validate" name="Contrasenia2" onchange="comprobarContrasenia()">
              <label for="id_password_repetir">Repite la contraseña *</label>
              <p id="error_contrasenia2" class="red-text"></p>
            </div>
          </div>

          <div class = "row">
          <div class="col s4">
              <label>Gusto Musical*</label>
               <select class="browser-default">
                 <option value="" disabled selected>Selecciona tu estilo preferido</option>
                 <option value="1">Rock</option>
                 <option value="2">Dance</option>
                 <option value="3">Rap</option>
                 <option value="4">Musica clasica</option>
               </select>
          </div>
          <div class="col s4">
            <label for="id_fecha">Fecha de nacimiento *</label>
            <input id="id_fecha" type="date" name="Fecha" onchange="comprobarFecha()">
            <p id="error_fecha" class="red-text"></p>
          </div>
          </div>
          <div class="row">
            <div class="col s4">
              <label class="red-text">Los campos con * son obligatorios</label>
            </div>
            <div class="col s4 m4 l6">
              <button class="btn">
                Registrarse
                <i class="material-icons right">send</i>
              </button>
            </div>
            <div class="col s4"></div>
          </div>
        </form>
      </div>
      <!-- FIN FORMULARIO REGISTRO -->
      </main>
      <!-- Footer de la pagina -->
      <footer class="page-footer teal"><!-- Color -->
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Acerca del proyecto</h5>
                        <p class="grey-text text-lighten-4">En estos enlaces podras ver mas en detalle la arquitectura y que he usado</p>
                </div>
                <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">Links</h5>
                        <ul>
                            <li><a class="grey-text text-lighten-3" href="#!">Arquitectura</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">Bases de datos</a></li>
                        </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                <a class="grey-text text-lighten-4 centre" href="#!">Proyecto de Ampliacion de Bases de Datos</a>
            </div>
        </div>
      </footer>
      <!-- Fin Footer de pagina -->
    </body>
    <script type="text/javascript" src="../js/functions.js"></script>
  </html>
