<?php
if (session_id() != "") {
session_destroy();
}

ini_set('session.use_trans_sid', false);
session_start();
$cod_session = session_id();

define('DB_HOST', '127.0.0.1'); 
define('DB_USERNAME', 'alumno'); 
define('DB_PASSWORD', 'alumnoipm'); 
define('DB_DB', 'basepag');

$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DB);
if (mysqli_connect_errno()) {
	printf("ERROR DE CONEXION: %s\n", mysqli_connect_error());
	exit();
}


$gmail_conectado = '';

$statement2 = $mysqli->prepare("select id,gmail from usuario WHERE sesion LIKE '$cod_session'");
$statement2->execute();
$statement2->bind_result($id_usr_conectado,$gmail_conectado);

while($statement2->fetch()){



}

?>