<?php
include("conexion.php");

$error = "";

if(isset($_POST["submit"])) {
	
	$email = $_POST["email_usuario"];
	$clave = $_POST["clave"];

	$statement2 = $mysqli->prepare("select id from usuario WHERE gmail LIKE '$email' and clave LIKE '$clave'");
	$statement2->execute();
	$statement2->bind_result($id_usr);

	while($statement2->fetch()){

		header("Location: pagina.php");

	}
	
	if($id_usr == null) { 
		$error = 1; 
	} else {
		$stmt = $mysqli->prepare("UPDATE usuario SET sesion='$cod_session' WHERE id=$id_usr");
		$stmt->execute();
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
				  ¡Los datos ingresados son incorrectos!
				</div>
				
				<?php  } ?>
				
				
			   <p class="form-title">Ingresa a tu cuenta</p>
				<div class="input-container">
				  <input type="email" name="email_usuario" placeholder="Email">
				  <span>
				  </span>
			  </div>
			  <div class="input-container">
				  <input type="password" name="clave" placeholder="Contraseña">
				</div>
				 <button type="submit" name="submit" class="submit">
				Ingresa
			  </button>

			  <p class="signup-link">
				No tenes una cuenta?
				<a href="signup.php">Registrate</a>
			  </p>
		   </form>

		</article>

	</main>



	<?php include("footer.php");?>
	
</body>
</html>
