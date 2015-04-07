<<<<<<< HEAD
<?php
    session_start();
    include('acceso_db.php');
?> 
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bienvenido Administrador</title>
<!-- Import materialize.css-->
<link rel="stylesheet" type="text/css" href="assets/css/materialize.css" media="screen,projection"/>
<link rel="stylesheet" type="text/css" href="assets/css/estilos.css">  
<link rel="stylesheet" type="text/css" href="assets/css/celular.css">
<!--Let browser know website is optimized for mobile -->
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no-"/>
</head>
<body>
    <!-- Menu de navegación-->
	 <div class="navbar-fixed">
    <nav>
      <div class="nav-wrapper">
        <a href="acceso.php" class="brand-logo">ACISUM.com</a>
        <ul class="right hide-on-med-and-down">
          <li>
          <?php
if(isset($_SESSION['usuario_nombre'])) {
	?>
Bienvenido: <a href="perfil.php?id=<?=$_SESSION['usuario_id']?>"><strong><?=$_SESSION['usuario_nombre']?></strong></a><br/>
	<?php
	?>
	<?php
	    }
	?>    </li>
          <li><a href="registro.php">Nuevo usuario</a></li>
        <li><a href="logout.php">Cerrar sesión</a></li>
          </ul>
      </div>
    </nav>
  </div>
<!-- Termina codigo de menu de navegación-->
<div class="boton-salir">
  <a href="logout.php">Cerrar sesión</a>
</div>
<!--Inicia codigo de lista de reproducción-->
<!--Reproductor-->
<div class="video-posicion">
<iframe width=700 height=500 src="https://www.youtube.com/embed/CyAuxyhul2U" frameborder="0" allowfullscreen></iframe>
 </div>
<!-- Buscador -->
<div class="contenedor-lista">
<input type="text" id="bus" name="bus" placeholder="Escribe tu canción" onkeyup="loadXMLDoc()" required />
<input type="submit" value="AGREGAR" id="no-estilo" class="waves-effect waves-light btn-large" id="btnagregar">
<div id="myDiv"></div>
</div>
<!-- Lista -->

<script type="text/javascript" src="assets/js/jquery-2.1.3.js"></script>
<script type="text/javascript" src="assets/js/effects.js"></script>
<script type="text/javascript" src="assets/js/materialize.min.js"></script>
<script type="text/javascript" src="assets/js/ajax.js"></script>
</body>
</html>
=======
<!DOCTYPE html>
<html lang="en" class="no-js">

    <head>

        <meta charset="utf-8">
        <title>**ACISUM**</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- CSS -->
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=PT+Sans:400,700'>
        <link rel="stylesheet" href="assets/css/reset.css">
        <link rel="stylesheet" href="assets/css/supersized.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

    </head>

    <body>
        <div class="page-container">
            <h1>Iniciar sesión</h1>
  <?php 
    session_start(); 
    include('acceso_db.php'); 
    if(empty($_SESSION['usuario_nombre'])) { // comprobamos que las variables de sesión estén vacías         
?> 
            <form action="comprobar.php" method="post">
                <input type="text" name="usuario_nombre" class="username" placeholder="Nombre de usuario">
                <input type="password" name="usuario_clave" class="password" placeholder="Contraseña">
                <button type="submit" name="enviar">Entrar</button>
                <div class="error"><span>+</span></div>
            </form>
    <?php 
 }else { 
      header("Location: index.php");
 
    } 
?>
        </div>
        <!-- Javascript -->
        <script src="assets/js/jquery-2.1.3.js"></script>
        <script src="assets/js/supersized.3.2.7.min.js"></script>
        <script src="assets/js/supersized-init.js"></script>
        <script src="assets/js/scripts.js"></script>

    </body>

</html>

>>>>>>> e87103e8ebdb47f843cb6982fc28656e7b347afb
