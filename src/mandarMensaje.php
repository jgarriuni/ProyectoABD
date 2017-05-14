<!DOCTYPE html>
<html>
  <?php
    session_start();
    if(!isset($_SESSION['usuario'])){
      header('Location: cerrarSesion.php');
    }
  ?>
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
        <script type="text/javascript" src="../js/comprobarMensaje.js"></script>

      <!-- Barra de navegacion -->
      <nav class="nav-extended teal">
        <div class="nav-wrapper teal"><!-- Color -->
         <a class="brand-logo"><i class="material-icons">chat</i>Tuita</a>
          <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
                <li><a href="miPerfil.php">Volver al perfil</a></li>
                <li><a href="cerrarSesion.php">Cerrar Sesion</a></li>
          </ul>
          <ul class="side-nav" id="mobile-demo">
              <li><a href="miPerfil.php">Volver al perfil</a></li>
              <li><a href="cerrarSesion.php">Cerrar Sesion</a></li>
          </ul>
        </div>
      </nav>
	  <!-- FIN Barra de navegacion -->
      <!--<main>
          <?php
            if($_SERVER["REQUEST_METHOD"] == "POST"){
              echo "post";
                require_once('../php/modelo.php');
                //mandarMensajeATodos($mensaje, $destinatarioGrupo, $destinatarioUsuario, $emisor)
                if(mandarMensajeATodos($_POST['mensaje'], "", "", $_SESSION['usuario'])){
                  header('Location: miPerfil.php');
                }
          ?>
          <form class="col s12" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" onsubmit="return mandarMensaje()">
            <div class="row">
                <div class="input-field col s12">
                    <textarea id="id_mensaje" class="materialize-textarea" name="mensaje" data-length="130" onchange="comprobarMensaje()"></textarea>
                    <label for="id_mensaje">Mensaje</label>
                </div>
                <p id="error_mensaje" class="red-text"></p>
            </div>
              <div class="row">
                <p>
                    <input name="destinatario" type="radio" id="id_todos" value="atodos" onchange="comprobarDestinatario()">  
                    <label for="id_todos">Todos</label>    
                    <input name="destinatario" type="radio" id="id_grupo" value="agrupo" onchange="comprobarDestinatario()">  
                    <label for="id_grupo">Grupo</label>
                    <input name="destinatario" type="radio" id="id_usuario" value="ausuario" onchange="comprobarDestinatario()">  
                    <label for="id_usuario">Privado</label>
                </p>
                <p id="error_destinatario" class="red-text"></p>
              </div> 
              <div class="row">
                <div class="col s4"></div>
                    <div class="col s4">
                        <button class="btn"><i class="material-icons right">thumb_up</i>Mandar Tweet</button>
                    </div>
                </div>
          </form>
        </main>-->
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