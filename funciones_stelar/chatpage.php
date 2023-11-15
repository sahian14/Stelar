<?php 
	session_start();
	if(isset($_SESSION['name']))
	{

		include "config.php"; 
		
		$sql="SELECT * FROM `chat`";

		$query = mysqli_query($conn,$sql);
	}
?>


<meta http-equiv="refresh" content="20">
<link rel="stylesheet" href="chatpage.css">
<header>
   <nav>
   <a class="navbar-brand" href="#">
    <img src="images/Logo_javchat.png" width="200" height="200" alt="">
  
  </a>
  <a href="logout.php" id="boton">Cerrar Sesión</a>

   </nav>
  </header>
<script>

      $(document).ready(function(){
        
        var trigger = $('.container .display-chat '),
            container = $('#content');
        
        // Fire on click
        trigger.on('click', function(){
          
          var $this = $(this),
            target = $this.data('target');       
          
          
          container.load(target + '.php');
          
          
          return false;
        });
      });
    </script>


<div class="container">
<p>&nbsp</p>
  <center><h2>Anuncios importantes para  <span style="color:#6818a5;"><?php echo $_SESSION['name']; ?> </span></h2>
	<label>La información más relevante para ti</label>
  </center></br>
   <div class="display-chat" id = "display-chat">
<?php
	if(mysqli_num_rows($query)>0)
	{
		while($row= mysqli_fetch_assoc($query))	
		{
?>
		<div class="message">
			<p>
				<span><?php echo $row['name']; ?> :</span>
				<?php echo $row['message']; ?>
			</p>
		</div>
<?php
		}
	}
	else
	{
?>
<div class="message">
			<p>
				No hay ninguna conversación previa.
			</p>
</div>
<?php
	} 
?>

  </div>


  
  <form class="form-horizontal" method="post" action="sendMessage.php">
    <div class="form-group">
      <div class="col-sm-10">          
        <textarea name="msg" class="form-control" placeholder="Ingresa tu mensaje acá..."></textarea>
      </div>
	  <br>
	         
      <div class="col-sm-2">
        <button type="submit" class="btn btn-primary" >Enviar</button>
      </div>

    </div>
  </form>
  <p>&nbsp</p>
</div>
<a href="home.php" id="boton">Volver atrás</a>
<a href="chatdirecto.php" id="boton">Continuar al chat institucional</a>


</body>
</html>

	
	