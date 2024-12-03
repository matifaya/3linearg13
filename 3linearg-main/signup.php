<?php
include("conexion.php");

$error = "";

if(isset($_POST["submit"])) {
	
	$email = $_POST["email_usuario"];
	$clave = $_POST["clave"];
	$clave2 = $_POST["clave2"];

	if($email == null || $clave == null || $clave2 == null) { 
		$error = 1; 
	} else {
		
		if($clave == $clave2) {
			$stmt = $mysqli->prepare("INSERT INTO usuario (gmail,clave,sesion) VALUES ('$email','$clave','nuevo')");
			$stmt->execute();
			
			header("Location: login.php");
			
		} else {
			$error = 2;
		}
		
		
	}

	
}



?>

<!doctype html>
<html>
<head>
<html lang="es">
<meta charset="utf-8" />
 
<title>3linearg</title>


<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&family=Libre+Franklin:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<link rel="stylesheet" href="pagina.css" />

<link rel="stylesheet" href="login.css" />

</head>

<body>
	<?php include("header.php"); ?>
 
	<main>
		<article>

			<form class="form" method="post">
				
				<?php if($error == 1) {?>
				
				<div class="alert alert-danger" role="alert">
				  Complete todos los datos
				</div>
				
				<?php  } ?>
				
				<?php if($error == 2) {?>
				
				<div class="alert alert-danger" role="alert">
				  Las contraseñas son distintas
				</div>
				
				<?php  } ?>
				
				
			   <p class="form-title">Crea tu cuenta</p>
				<div class="input-container">
					<input type="email" name="email_usuario" placeholder="Email">
					
				</div>
				<div class="input-container">
				  <input type="password" name="clave" placeholder="Contraseña">
				</div>
				<div class="input-container">
				  <input type="password" name="clave2" placeholder="Repetir Contraseña">
				</div>
				 <button type="submit" name="submit" class="submit">
				Registrate
			  </button>

			  <p class="signup-link">
				Ya tenes una cuenta?
				<a href="login.php">Ingresá</a>
			  </p>
		   </form>

		</article>

	</main>



	<?php include("footer.php");?>
	
</body>
</html>
