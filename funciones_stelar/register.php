
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    
    <link rel="stylesheet" href="register.css">
</head>
<body>
    <div>
       <form method="post" action="add_user.php">
           <h1>Registrate</h1>
           <input type="text" name="name" placeholder="Nombre completo" class="dato" required/>
           <input type="email" name="email" placeholder="Correo electronico "class="dato" required/>
           <input type="password" name="password" placeholder="Crear Contraseña"class="dato" required/>
           <p class="perfil">¿Qué perfil eres?</p>
           <select id="type"  name="type">
            <option class="admin"  >Docente o directivo</option>
            <option  class="estu">Estudiante</option>
           </select>
    

          <button type="submit" class="boton" >Regístrate</button>
          <p class="perfil">¿Ya tienes una cuenta? <a href="login.php">Inicia sesión</a></p>
    

       </form>
   </div>
</body>
</html>
