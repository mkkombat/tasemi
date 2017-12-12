<!DOCTYPE html>
<html>

    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   <title>Fan Theories</title>


    <link href="css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="style/style.css" />

  </head>

  <body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Fan Theories</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#" data-toggle="modal" data-target=".bs-example-modal-sm">Iniciar sesión</a></li>
        <li><a href="#" data-toggle="modal" data-target=".bs-example-modal-sm-registrar">Registrate</a></li>
        <li><a href="cerrar_sesion.php">Cerrar sesion</a></li>
      </ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
      <!--modal para iniciar sesión-->
<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
        <div class="modal-header">
         <h2>Iniciar sesión</h2>
        </div>
        <div class="modal-body">
          <form action="archivo_destino.php" method="post" enctype="application/x-www-form-urlencoded">
            <div class="form-group">
              <label for="control1_nombre">Usuario</label>
              <input type="text" name="datos_introducidos_usuario" class="form-control" id="control1_nombre" placeholder="Username" required>
            </div>
            <div class="form-group">
              <label for="control1_contraseña">Contraseña</label>
              <input type="password" name="datos_introducidos_contraseña" class="form-control" id="control1_contraseña" placeholder="Password" required>
            </div>
            <button type="submit" class="btn btn-success btn-block">Entrar</button>
          </form>
        </div>
    </div>
  </div>
</div>
      <!--modal para registrarse-->
<div class="modal fade bs-example-modal-sm-registrar" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
        <div class="modal-header">
         <h2>Regístrate</h2>
        </div>
        <div class="modal-body">
          <form action="archivo_registrar.php" method="post" enctype="application/x-www-form-urlencoded">
            <div class="form-group">
              <label for="control2_nombre">Usuario</label>
              <input type="text" name="datos_registrar_usuario" class="form-control" id="control2_nombre" placeholder="Username" required>
            </div>
            <div class="form-group">
              <label for="control2_contraseña">Contraseña</label>
              <input type="password" name="datos_registrar_contraseña" class="form-control" id="control2_contraseña" placeholder="Password" required>
            </div>
            <button type="submit" class="btn btn-success btn-block">Registrar</button>
          </form>
        </div>
    </div>
  </div>
</div>
     <div class="Exterior">

    <body>

            <img src="Imagenes\Logotipo.png"WIDTH=500 HEIGHT=300 />
        <p>
           Bienvenido a Fan Theories, una pagina donde los usuarios se loguean para debatir sobre las diferentes series determinadas.
        </p>






        <p>
            <em>Fan Theories es una pagina diferente.</em>
            Fan Theories es una pagina donde los usuarios una vez logueados pueden debatir sobre las diferentes series determinadas y teorias, debajo de cada teoria habra un boton de me gusta y uno de no me gusta, si el usuario llegase a hacer click  en cualquiera de los casos aparecera un pedido de justificacion del porque de la votación, también puede optar por solo votar sin dar su opinión del porqué.
        </p>







        <h3>Lista de Series</h3>



        <div class="clase1">
        <h2>The Flash</h2>

        </div>

            <a href="Flash/The Flash.html">
            <img src="Flash/The Flash.jpg" />

        </a>




        <div class="clase2">
        <h2>Arrow</h2>

        <a href="Arrow/arrow.html">
            <img src="Arrow/arrow.jpg"/>
        </a>


            </div>


            <div class="clase3">
        <h2>The Walking dead</h2>

        <a href="The Walking Dead/The Walking Dead.html">
            <img src="The Walking Dead/twe.jpg" />

        </a>


           </div>


            <div class="clase4">
        <h2>DC Legends Of Tomorrow</h2>

        <a href="DC Legends Of Tomorrow/DC Legends Of Tomorrow.html">
            <img src="DC Legends Of Tomorrow/DC Legends Of Tomorrow.jpg"  WIDTH=450 HEIGHT=650/>

        </a>


            </div>



            <div class="clase5">
        <h2>Supergirl</h2>
        <a href="Supergirl/Supergirl.html">
            <img src="Supergirl/Supergirl.jpg"  WIDTH=450 HEIGHT=550/>
        </a>

            </div>


            <div class="clase6">
         <h2>Gotham</h2>
        <a href="Gotham/Gotham.html">
            <img src="Gotham/gotham.jpg"  WIDTH=450 HEIGHT=650/>
        </a>


            </div>

      </div>


         <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/jquery.dropotron.min.js"></script>
  <script src="assets/js/skel.min.js"></script>
  <script src="assets/js/skel-viewport.min.js"></script>
  <script src="assets/js/util.js"></script>
  <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
  <script src="assets/js/main.js"></script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    </body>

