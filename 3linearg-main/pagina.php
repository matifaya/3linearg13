<?php include("conexion.php");?>
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


<style>
	* {
		margin: 0;
		padding: 0;
		box-sizing: border-box;
	}
	

	/* Contenedor principal */
	.catalogo-container {
		width: 100%;
		max-width: 1200px;
		margin-top: 27% ;
		padding: 20px;
	}

	.carrusel {
		position: absolute;
		overflow: hidden;
	}

	.carrusel-contenido {
		display: flex;
		transition: transform 0.5s ease-in-out;
		animation: carruselAnimacion 12s infinite;
	}

	.carrusel-item {
		flex: 0 0 100%; /* Aseguramos que cada item ocupe todo el espacio disponible */
		margin: 0;
		border-radius: 12px;
		background-color: #fff;
		box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
		position: relative;
		overflow: hidden;
	}

	.carrusel-item img {
		width: 100%;
		height: 50%;
		object-fit: cover;
		border-radius: 12px;
	}

	.item-descripcion {
		text-align: center;
		padding: 20px;
	}

	.item-descripcion h3 {
		font-size: 20px;
		color: #333;
		margin-bottom: 10px;
	}

	.item-descripcion p {
		font-size: 16px;
		color: #777;
		margin-bottom: 20px;
	}
	.zapa2 {
	  height: 4%;
	}
	.zapa3 {
	  height: 4%;
	}
	.zapa4 {
	  height: 4%;
	}
	.zapa5 {
	  height: 4%;
	}
	.zapa6 {
	  height: 4%;
	  
	}

	.boton-compra {
		background-color: #FF7A00;
		color: white;
		border: none;
		padding: 10px 20px;
		font-size: 16px;
		cursor: pointer;
		border-radius: 5px;
		transition: background-color 0.3s;
	}

	.boton-compra:hover {
		background-color: #ff5f00;
	}
	

	/* Animación para el carrusel */
	@keyframes carruselAnimacion {
		0% {
			transform: translateX(0);
		}
		20% {
			transform: translateX(-100%);
		}
		40% {
			transform: translateX(-200%);
		}
		60% {
			transform: translateX(-300%);
		}
		80% {
			transform: translateX(-400%);
		}
		100% {
			transform: translateX(0);
		}
	}

	/* Responsividad */
	@media screen and (max-width: 768px) {
		.carrusel-item {
			flex: 0 0 90%;
		}
	}

</style>

</head>

<body>
	<?php include("header.php"); ?>
 
	<main>

		<div class="slideshow"></div>

		<article>

			<div class="ropa">
			  <div class="col-md-6 text-center"><a href="zapaindex.php"><img src="./img/fotozapafondo.webp" alt="" id="zapatillas" ></a><h4 class="mt-2">ZAPATILLAS</h4></div>
			  <div class="col-md-6 text-center"><a href="indumentaria.php"><img src="./img/indumentaria.png" alt="" id="indumentaria"></a><h4 class="mt-2">INDUMENTARIA</h4></div>
			</div>
			<div class="row marcas"> 
				  <div class="col-md-2 offset-md-1 text-center"><a href="https://www.nike.com.ar/" target="_blank"><img src="./img/nike.png" id="nike"></a> </div>
				  <div class="col-md-2 text-center"><a href="https://www.adidas.com.ar/" target="_blank"><img src="./img/adidas.png" id="adidas"></a></div>
				  <div class="col-md-2 text-center"><a href="https://www.underarmor.com.ar/" target="_blank"><img src="./img/underarmor.png" id="underarmor"></a> </div>
				  <div class="col-md-2 text-center"><a href="https://www.nike.com.ar/nike/jordan" target="_blank"><img src="./img/jordan.png" id="jordan"></a></div>
				  <div class="col-md-2 text-center"><a href="https://www.peak.com.ar/" target="_blank"><img src="./img/peak.png" id="peak"></a></div>

			</div>

		</article>

	</main>



	<?php include("footer.php");?>
	
</body>
</html>
