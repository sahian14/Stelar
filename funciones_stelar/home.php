<?php 
	session_start();
	if(isset($_SESSION['nombre']))
	{
	
		include "bd.php"; 
		
		$sql="SELECT * FROM `chat`";

		$query = mysqli_query($conn,$sql);
	}
?>

<!doctype html>
<html lang="en">

<head>
  <title>Javichat</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="home.css">

</head>

<body>
  <header>
   <nav>
   <a class="navbar-brand" href="#">
    <img src="images/Logo_javchat.png" width="200" height="200" alt="">
  
  </a>
  <a href="logout.php" id="boton">Cerrar Sesión</a>

   </nav>
  </header>
  <main>
  <link rel="stylesheet" href="home.css">



<div class="container" >
	<br>
  <center><h2>Bienvenid@ <span style="color:#5a189a;"><?php echo $_SESSION['name']; ?> !</span></h2>
  <br><br>
  <img src="images/logoperfil.png" width="250" height="250" alt="">
  <br>
	<label>Clic abajo para ingresar a:</label><br>
	<br><br>
	<a href="chatpage.php" id="boton2">Javchat</a>
	<a href="material de apoyo/horarios.html" id="boton2">Horarios</a>
	<a href="material de apoyo/card.html" id="boton2">Material de apoyo</a>
  </center> 
	<p>&nbsp</p>
  
</div>
<br>
<a href="login.php" id="boton2">Volver a inicio</a>
<p>&nbsp</p>

  </main>
 
</body>

</html>
