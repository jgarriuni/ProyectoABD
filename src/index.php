
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
    </head>

    <body>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="../js/materialize.js"></script>

      <!-- Barra de navegacion -->
      <nav>
        <div class="nav-wrapper teal"><!-- Color -->
         <a class="brand-logo"><i class="material-icons">chat</i>Tuita</a>
          <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <?php
                require('../php/controlador.php');
                session_start();
                if(!empty($_SESSION["usuario"])){
                    if($_SESSION["usuario"] != null){
                        echo "<li><a href='miPerfil.html'>Hola, ".$_SESSION["usuario"]."</a></li>";
                        echo "<li><a href='#'>Cerrar Sesion<a></li>";
                    }
                    else{
                        echo "<li><a href='registro.php'>Registrarse</a></li>";
                        echo "<li><a href='iniciarSesion.php'>Iniciar Sesion</a></li>";
                    }
                }
                else{
                    echo "<li><a href='registro.php'>Registrarse</a></li>";
                    echo "<li><a href='iniciarSesion.php'>Iniciar Sesion</a></li>";
                }
            ?>
          </ul>
          <ul class="side-nav" id="mobile-demo">
              <?php
              if(!empty($_SESSION['usuario'])){
                  if($_SESSION['usuario'] != null){
                      echo "<li><a href='miPerfil.html'>Hola, ".$_SESSION["usuario"]."</a></li>";
                      echo "<li><a href=>Cerrar Sesion<a></li>";
                 }
                 else{
                     echo "<li><a href='registro.php'>Registrarse</a></li>";
                     echo "<li><a href='iniciarSesion.php'>Iniciar Sesion</a></li>";
                 }
             }
             else{
                 echo "<li><a href='registro.php'>Registrarse</a></li>";
                 echo "<li><a href='iniciarSesion.php'>Iniciar Sesion</a></li>";
             }
             ?>
          </ul>
        </div>
      </nav>
      <!-- Fin Barra de navegacion -->
      <main>
        <!-- Carrusel de Bienvenida -->
        <div class="slider">
          <ul class="slides">
            <li>
              <img src="../img/textingphoto1.jpg"> <!-- random image -->
              <div class="caption center-align grey-text text-lighten-3">
                <h3>Bienvenido a mi aplicacion</h3>
                <h5 class="light grey-text text-lighten-3">Proyecto de Ampliacion de bases de datos</h5>
              </div>
            </li>
            <li>
              <img src="../img/textingphoto2.jpg"> <!-- random image -->
              <div class="caption right-align black-text">
                <h3>¿De que trata?</h3>
                <h5 class="light black-text">Es una aplicacion estilo twitter</h5>
              </div>
            </li>
            <li>
              <img src="../img/textingphoto3.jpg"> <!-- random image -->
              <div class="caption left-align black-text">
                <h3>¿Que puedo hacer en ella?</h3>
                <h5 class="light black-text">Puedes twittear a todos, a un grupo o por privado</h5>
              </div>
            </li>
            <li>
              <img src="../img/textingphoto4.jpg"> <!-- random image -->
              <div class="caption center-align black-text">
                <h3>¿Y que mas?</h3>
                <h5 class="light black-text">¡Compartir lo que quieras!</h5>
              </div>
            </li>
          </ul>
        </div>
        <!-- Fin Carrusel -->

        <!-- Promocion -->
        <div class="row">
          <div class="col s4">
            <div class= "center-align">
              <i class="large material-icons">language</i>
              <h5>Es internacional</h5>
              <p>Puedes hablar con gente de todo el mundo y compartir lo que quieras</p>
            </div>
          </div>
          <div class="col s4">
            <div class= "center-align">
              <i class="large material-icons">query_builder</i>
              <h5>Es 24/7</h5>
              <p>Disponible a cualquier hora del dia desde cualquier parte del mundo</p>
            </div>
          </div>
          <div class="col s4">
            <div class= "center-align">
              <i class="large material-icons">lock_outline</i>
              <h5>Es segura</h5>
              <p>Tenemos un equipo de tecnicos mejorando cada dia la seguridad</p>
            </div>
          </div>
        </div>
        <!-- Fin Promocion -->
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
