<?php 
	session_start();
	if(isset($_SESSION['user'])){
	$username = $_SESSION['user'];
	$admin = $_SESSION['admin'];
	}
?>
<html>
  <head>
    <meta name="tipo_contenido" content="text/html;" http-equiv="content-type" charset="utf-8">
	<title>Creditos</title>
    <link rel='stylesheet' type='text/css' href='estilos/style.css' />
	<link rel='stylesheet'
		   type='text/css'
		   media='only screen and (min-width: 530px) and (min-device-width: 481px)'
		   href='estilos/wide.css' />
	<link rel='stylesheet'
		   type='text/css'
		   media='only screen and (max-width: 480px)'
		   href='estilos/smartphone.css' />
  </head>
  <body>
  <div id='page-wrap' height = "1000px">
	<header class='main' id='h1'>

		<?php if(isset($username) &&($username!="")){?>
			<span class="right" style="display:none;"><a href="registrar.php">Registrarse</a></span>
			<span class="right" style="display:none;"><a href="login.php">Login</a></span>
			<span class="right" ><a href="logout.php" id = "url" >Logout</a></span>
			<span class="right"> <font size= "2.5" >Bienvenido: <?php echo $username; ?></font></span>
		<?php } 
		else { ?>
			<span class="right"><a href="registrar.php">Registrarse</a></span>
			<span class="right"><a href="login.php">Login</a></span>
			<span class="right" style="display:none;"><a href="/logout">Logout</a></span>
		<?php } ?>
		
		<h2>Quiz: el juego de las preguntas</h2>
    </header>
	  <nav class='main' id='n1' role='navigation'>
	   <?php 
	   if(isset($username) &&($username!="") && ($admin == "NO")){?>
			<span><a href='layout.php?email=<?php echo $username; ?>'>Inicio</a></span>
			<span><a href='GestionPreguntas.php?email=<?php echo $username; ?>'>Gestionar Preguntas</a></span>
			<span><a href='creditos.php?email=<?php echo $username; ?>'>Creditos</a></span>
		<?php } 
		 
	    else if(isset($username) &&($username!="") && ($admin == "SI")){?>
			<span><a href='layout.php?email=<?php echo $username; ?>'>Inicio</a></span>
			<span><a href='GestionarCuentas.php?email=<?php echo $username; ?>'>Gestionar Cuentas</a></span>
			<span><a href='creditos.php?email=<?php echo $username; ?>'>Creditos</a></span>
		<?php }
		else { ?>
			<span><a href='layout.php'>Inicio</a></spam>
			<span><a href='creditos.php'>Creditos</a></spam>
		<?php } ?>
	   </nav>

    <section class="main" id="s1">

        <div>
            <p><img src="images/tomas.jpg" alt="Foto de Tomas" style="float:left;width:150px;height:150px;">
            <br><br><strong>Nombre y apellido:</strong> <em>Tomas Szemzo</em><br>
            <strong>Especialidad dentro del grado:</strong><em> Ingenieria de software</em><br>
            <strong>Localidad de residencia:</strong><em> Donosti</em></p>
        </div>
        <br><br>
        <div>
            <p><img src="images/fede.jpg" alt="Foto de Fede" style="float:left;width:150px;height:150px;">
            <br><strong>Nombre y apellido:</strong> <em>Federico Buroni</em><br>
            <strong>Especialidad dentro del grado:</strong><em> Ingenieria de software</em><br>
            <strong>Localidad de residencia:</strong><em> Donosti</em></p>
        </div>

    </section>
	<footer class='main' id='f1'>
		<a href='https://github.com/tszemzo/proyectoSW'>Link GITHUB</a>
	</footer>
</div>
</body>
</html>