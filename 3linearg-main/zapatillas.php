<?php
include('conexion.php');




?>

<!DOCTYPE html>
<html lang="es">
<head>

<title>3linearg</title>


<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&family=Libre+Franklin:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<link rel="stylesheet" href="pagina.css" />
</head>
 



  <body>

  <?php include("header.php"); ?>   
 
   


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Producto</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            padding: 20px;
        }

        .detalle-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-wrap: wrap;
        }

        .detalle-imagen {
            width: 50%;
            padding: 20px;
        }

        .detalle-imagen img {
            width: 100%;
            border-radius: 10px;
        }

        .detalle-info {
            width: 50%;
            padding: 20px;
        }

        .detalle-info h1 {
            font-size: 30px;
            color: #333;
            margin-bottom: 10px;
        }

        .detalle-info p {
            font-size: 18px;
            color: #777;
            margin-bottom: 20px;
        }

        .detalle-info .precio {
            font-size: 24px;
            color: #FF7A00;
            margin-bottom: 20px;
        }

        .detalle-info select, .detalle-info button {
            font-size: 18px;
            padding: 10px;
            margin-bottom: 20px;
            width: 100%;
        }

        .detalle-info button {
            background-color: #FF7A00;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .detalle-info button:hover {
            background-color: #ff5f00;
        }

    </style>
</head>
<body>

    <div class="detalle-container">
    <?php
      $mysqli->set_charset("utf8");

      $idproducto=$_GET['id'];
								
      $query = $mysqli->prepare("SELECT id,nombre,foto,precio,descripcion FROM productos WHERE id = $idproducto");
      $query->execute();
      $query->bind_result($id,$nombre,$foto,$precio,$descripcion);

      while($query->fetch()){

        echo '
       
<div class="detalle-imagen">
            <img src="./img/'.$foto.'" alt="'.$nombre.'">
        </div>

        <div class="detalle-info">
            <h1>'.$nombre.'</h1>
            <p>'.$descripcion.'</p>
            <p><strong>'.$descripcion.'</strong></p>
            <ul>
                <li>Amortiguación de alta densidad</li>
                <li>Suela de goma antideslizante</li>
                <li>Diseño transpirable</li>
                <li>Ligereza para mayor comodidad</li>
            </ul>
            <p class="precio"><strong>Precio: $'.$precio.'</strong></p>




    

            <!-- Selección de Talles -->
            <label for="talle">Selecciona tu talle:</label>
            <select id="talle">
                <option value="36">36</option>
                <option value="37">37</option>
                <option value="38">38</option>
                <option value="39">39</option>
                <option value="40">40</option>
                <option value="41">41</option>
            </select>

            <!-- Botón de Compra -->
            <button onclick="agregarAlCarrito()">Añadir al carrito</button>
        </div>
    </div>

    <script>
        function agregarAlCarrito() {
            // Aquí puedes agregar el código para gestionar el carrito de compras
            alert("¡Producto añadido al carrito!");
        }
    </script>


     ';

      }
      
      
      ?>


<?php include("footer.php");?>

</body>
</html>
