<form action="../php/user_new.php" method="POST" class="formularioAjax form-container" autocomplete="off">  
        <label class="form-group form-group-label" for="nombre">Nombre:</label>
        <input class="form-control" type="text" name="nombre" required>
        <label for="apellido">Apellido:</label>
        <input class="form-control" type="text" name="apellido" required>
        <label for="email">Email:</label>
        <input class="form-control" type="email" name="email">
        <label  for="telefono">Telefono:</label>
        <input class="form-control" type="phone" name="telefono">
        <label for="usuario">Usuario:</label>
        <input class="form-control" type="text" name="usuario" required>
        <label>Clave:</label>
        <input class="form-control" type="password" name="contrasenia" required>
        <label>Repetir clave:</label>
        <input class="form-control" type="password" name="contrasenia2" required>
        <input class="form-btn" type="submit" value="Registrarse">
        

</form>