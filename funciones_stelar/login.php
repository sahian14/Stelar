
<?php
  include "config.php";
  if($_POST)
	{
		$email = $_POST['email'];
		$password = $_POST['password'];
		
		$sql = "SELECT * FROM `register` where email = '".$email."' ";
    $query =  mysqli_query($conn, $sql);
    if(mysqli_num_rows($query)>0)
    {
      $row = mysqli_fetch_assoc($query);
      $password_hash = $row['password'];
      if(password_verify($password, $password_hash))
      {
        session_start();
        $_SESSION['name'] = $row['name'];
        header('Location: home.php');
      }
      else
      {
        echo "<script> alert('Correo o contraseña incorrectas.'); </script>";
      }
    }
    else
    {
      echo "<script> alert('Correo o contraseña incorrectas.'); </script>";
    }
  }
?>



<link rel="stylesheet" href="login.css">

<div class="container">

  <form class="form-horizontal" method="post" action="">
  <h1>Iniciar Sesión</h1>
           <input  type="email" name="email" placeholder="Correo" required/>
           <input type="password" name="password"placeholder="Contraseña" required/>
           <?php if(isset($mensaje)){
               echo $mensaje;}
           ?>
           <button type="submit" name="Ingresar" id="boton">Ingresar</button>
           <div style="background: #fff;">
           <p class="texto" style="font-family: cursive; background-color: #fff;" >¿No tienes una cuenta? <a href="register.php">Registrate</a></p>
           </div>
         


  </form>
</div>
