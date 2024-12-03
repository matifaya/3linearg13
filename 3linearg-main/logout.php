<?php
include("conexion.php");

$stmt = $mysqli->prepare("UPDATE usuario SET sesion='desconectado' WHERE id=$id_usr_conectado");
$stmt->execute();

header("Location: pagina.php");

?>