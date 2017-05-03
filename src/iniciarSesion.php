
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
      <title>Iniciar Sesion</title>
    </head>

    <body>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="../js/materialize.js"></script>
      <script type="text/javascript" src="../js/comprobarIniciarSesion.js"></script>

      <!-- Barra de navegacion -->
      <nav>
        <div class="nav-wrapper teal"><!-- Color -->
         <a class="brand-logo"><i class="material-icons">chat</i>Tuita</a>
          <a href="!#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="registro.php">Registrarse</a></li>
            <li><a href="index.php">Pagina Principal</a></li>
          </ul>
          <ul class="side-nav" id="mobile-demo">
            <li><a href="registro.php">Registrarse</a></li>
            <li><a href="index.php">Pagina Principal</a></li>
          </ul>
        </div>
      </nav>
      <!-- Fin Barra de navegacion -->
      <main>
        <!-- Formulario -->
        <div class="row">
            <?php
                $usuario = $pass = "";
                if($_SERVER["REQUEST_METHOD"] == "POST"){
                    require_once('../php/controlador.php');
                    $usuario = testearDato($_POST["usuario"]);
                    $pass = testearDato($_POST["password"]);
                }
            ?>
          <form class="col s12" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" onsubmit="return comprobarDatos()">
            <!-- Esto es para que quede en medio con respecto a la altura -->
            <div class="row section">
              <div class="col s4"></div>
              <div class="col s4">
                <h4>Inicio de Sesion</h4>
              </div>
            </div>
            <!-- //////////////////////////////////////////////////////// -->
            <div class="row">
              <div class="col s4"></div>
              <div class="col s4 hoverable">
              <div class="input-field col s12">
                <i class="material-icons prefix">perm_identity</i>
                <input id="id_usuario" type="text" class="validate" name="usuario" onchange="comprobarUsuario()">
                <label for="id_usuario">Usuario</label>
                <p id="error_usuario" class="red-text"></p>
                <?php
                    $encontrado = false;
                    if($usuario != ""){
                      if(buscar($usuario)){
                      		$encontrado = true;
                      }
                    }
                ?>
              </div>
              <div class="input-field col s12">
                <i class="material-icons prefix">info_outline</i>
                <input id="id_password" type="password" class="validate" name="password" onchange="comprobarContrasenia()">
                <label for="id_password">ContraseÃ±a</label>
                <p id="error_pass" class="red-text"></p>
                <?php
                    if($pass != ""){
                      if($encontrado){
                        if(autenticar($usuario, $pass)){
                              session_start();
                              $_SESSION["usuario"] = $usuario;
                              header('Location: index.php');
                        }
                        else{
                            echo '<p id="error_usuario" class="red-text">La contraseña no es correcta</p>';
                        }
                      }
                    }
                ?>
              </div>
            </div>
            </div>
            <div class="row section">
              <div class="col s4"></div>
              <div class="col s4">
                <button class="waves-effect waves-teal btn-flat"><i class="material-icons right">thumb_up</i>Iniciar Sesion</button>
              </div>
            </div>
          </form>
        </div>
        <!-- Formulario -->
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
