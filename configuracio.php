<?php
if (!isset($_SESSION)){
	//S'inicialitza sessió amb usuari anònim
	session_start();
	$_SESSION['idusuari'] = -1;
}

$usuari   = "euroimg";
$clau     = "euroimg";
$bbdd     = "euroimg";
$servidor = "localhost";
$conexio = new mysqli($servidor, $usuari, $clau, $bbdd);
if ($conexio->connect_errno) {
    echo "Fallo al conectar a MySQL: " . $conexio->connect_error;
}



