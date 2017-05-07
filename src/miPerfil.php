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
      <nav class="nav-extended teal">
        <div class="nav-wrapper teal"><!-- Color -->
         <a class="brand-logo"><i class="material-icons">chat</i>Tuita</a>
          <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="index.php">Pagina Principal</a></li>
            <li><a href="cerrarSesion.php">Cerrar Sesion</a></li>
          </ul>
          <ul class="side-nav" id="mobile-demo">
            <li><a href="index.php">Pagina Principal</a></li>
            <li><a href="cerrarSesion.php">Cerrar Sesion</a></li>
          </ul>
        </div>
		  <div class="col s12">
			 <ul class="row tabs teal">
				<li class="tab col s4"><a class="white-text" href="#todos">Todos</a></li>
				<li class="tab col s4"><a class="white-text" href="#grupos">Grupos</a></li>
				<li class="tab col s4"><a class="white-text" href="#privados">Privados</a></li>
			  </ul>
		  </div>
      </nav>
	  <!-- FIN Barra de navegacion -->
	  <main>
        <!-- Inicio efecto parallax donde estaran los tuits -->
        <!-- PROBAR UN PARALLAX CONTAINER POR CADA TAB PANEL-->
          <!-- Contenido -->
			  <div id="todos" class="col s12">
				  <div class="row">
					  <div class="col s4">
						<div class="card blue-grey darken-1">
						  <div class="card-content white-text">
							<span class="card-title">Todos</span>
							<p>Todos texto</p>
						  </div>
						</div>
					  </div>
				  </div>
			</div>
          <div id="grupos" class="col s12">
              <div class="row">
                  <div class="col s4">
                    <div class="card blue-grey darken-1">
                      <div class="card-content white-text">
                        <span class="card-title">Grupo</span>
                        <p>Grupo texto</p>
                      </div>
                    </div>
                  </div>
              </div>
          </div>
          <div id="privados" class="col s12">
              <div class="row">
                  <div class="col s4">
                    <div class="card blue-grey darken-1">
                      <div class="card-content white-text">
                        <span class="card-title">Privado</span>
                        <p>Privado text</p>
                      </div>
                    </div>
                  </div>
              </div>
          </div>
          <!-- Fin Contenido -->
        <!-- FIN efecto parallax donde estaran los tuits -->
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
