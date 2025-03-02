<h5 class="title is-5 has-text-centered is-uppercase">Iniciar sesión</h5>

<form class="form-container" action="" method="POST" autocomplete="off">
		

		<div class="">
			<label class="form-group from-group-label">Usuario</label>
			<div class="control">
			    <input class="form-control" type="text" name="login_usuario" pattern="[a-zA-Z0-9]{4,20}" maxlength="20" required >
			</div>
		</div>

		<div class="">
		  	<label class="form-group from-group-label">Clave</label>
		  	<div class="">
		    	<input class="form-control" type="password" name="login_clave" pattern="[a-zA-Z0-9$@.-]{7,100}" maxlength="100" required >
		  	</div>
		</div>

		<p class="has-text-centered mb-4 mt-3">
			<button class="form-btn" type="submit" >Iniciar sesion</button>
		</p>

		<?php 	 
			
				if(isset($_POST['login_usuario']) && isset($_POST['login_clave'])){
					
						require_once "./php/iniciarSession.php";
				
				}

				?>
	</form>

	<?php
					/*	

				
						<script>
document.getElementById('loginForm').addEventListener('submit', function(e) {
    e.preventDefault();

    const formData = new FormData(this);

    fetch('login.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        console.log(data); // Aquí puedes manejar la respuesta del servidor
        alert(data);
    })
});
</script>

				}*/
	

?>