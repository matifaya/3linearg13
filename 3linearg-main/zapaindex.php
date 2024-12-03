<?php
include('conexion.php');




?>




<!DOCTYPE html>
<html lang="es">
    <title>3linearg</title>


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&family=Libre+Franklin:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <link rel="stylesheet" href="pagina.css" />
    </head>
     
    
    
    
      <body>


      	<?php include("header.php"); ?> 
     
       




<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo de Zapatillas</title>
    <style>


        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #f5f5f5;
            padding: 20px;
        }

        .catalogo-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            gap: 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .producto {
            width: 30%;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
            transition: transform 0.3s;
        }

        .producto img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
        }

        .producto h3 {
            font-size: 20px;
            margin: 15px 0;
            color: #333;
        }

        .producto p {
            font-size: 16px;
            color: #777;
            margin-bottom: 20px;
        }

        .producto .precio {
            font-size: 18px;
            color: #FF7A00;
            margin-bottom: 15px;
        }

        .producto:hover {
            transform: translateY(-10px);
        }

        .producto a {
            text-decoration: none;
        }

        .boton-ver-mas {
            background-color: #FF7A00;
            color: white;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .boton-ver-mas:hover {
            background-color: #ff5f00;
        }

        /* Responsividad */
        @media screen and (max-width: 768px) {
            .producto {
                width: 100%;
            }
        }
    </style>
</head>
<body>

    <div class="catalogo-container">
      <?php
      $mysqli->set_charset("utf8");
								
      $query = $mysqli->prepare("SELECT id,nombre,foto,precio,descripcion FROM productos WHERE tipo = 1 ORDER BY nombre");
      $query->execute();
      $query->bind_result($id,$nombre,$foto,$precio,$descripcion);

      while($query->fetch()){

        echo '
        <!-- Producto '.$id.' -->
        <div class="producto">
            <img src="./img/'.$foto.'" alt="'.$nombre.'">
            <h3>'.$nombre.'</h3>
            <p>'.$descripcion.'</p>
            <p class="precio">$'.$precio.'</p>

                <a class="boton-ver-mas" href="zapatillas.php?id='.$id.'">Ver detalles</a>

        </div>
        ';

      }
      
      
      ?>



<!-- 
      
        <div class="producto">
            <img src="./img/zapa2.webp" alt="Zapatilla Running 1">
            <h3>Zapatilla Running 1</h3>
            <p>Comodidad para tus entrenamientos diarios.</p>
            <p class="precio">$99.99</p>
            <a href="detalle_producto.html?producto=1">
                <button class="boton-ver-mas">Ver detalles</button>
            </a>
        </div>

        <div class="producto">
            <img src="./img/zapa10.webp" alt="Zapatilla Casual 2">
            <h3>Zapatilla Casual 2</h3>
            <p>Estilo y confort para el día a día.</p>
            <p class="precio">$89.99</p>
            <a href="detalle_producto.html?producto=2">
                <button class="boton-ver-mas">Ver detalles</button>
            </a>
        </div>

        <div class="producto">
            <img src="./img/zapa11.webp" alt="Zapatilla Deportiva 3">
            <h3>Zapatilla Deportiva 3</h3>
            <p>Resistencia y soporte para tus entrenamientos intensos.</p>
            <p class="precio">$119.99</p>
            <a href="detalle_producto.html?producto=3">
                <button class="boton-ver-mas">Ver detalles</button>
            </a>
        </div>

        <div class="producto">
            <img src="./img/zapa12.webp" alt="Zapatilla Running 4">
            <h3>Zapatilla Running 4</h3>
            <p>Perfecta para entrenamientos largos.</p>
            <p class="precio">$129.99</p>
            <a href="detalle_producto.html?producto=4">
                <button class="boton-ver-mas">Ver detalles</button>
            </a>
        </div>


        <div class="producto">
            <img src="./img/zapa13.webp" alt="Zapatilla Casual 5">
            <h3>Zapatilla Casual 5</h3>
            <p>Diseño moderno para tu estilo urbano.</p>
            <p class="precio">$79.99</p>
            <a href="detalle_producto.html?producto=5">
                <button class="boton-ver-mas">Ver detalles</button>
            </a>
        </div> -->
    </div>

    <?php include("footer.php");?>

</body>
</html>
