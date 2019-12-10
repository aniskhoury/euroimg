<?php
if (!isset($_SESSION)){
	//S'inicialitza sessió amb usuari anònim
	session_start();
	$_SESSION['iduser'] = -1;
}

$user     = "euroimg";
$password = "euroimg";
$database = "euroimg";
$server   = "localhost";
$connection = new mysqli($server, $user, $password, $database);
if ($connection->connect_errno) {
    echo "Error on connection MySQL: " . $connection->connect_error;
}



