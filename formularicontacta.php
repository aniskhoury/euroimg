<?php
include("fragments.php");
include("missatges.php");
include("configuracio.php");



?>
<!DOCTYPE html>
<html lang="<?php echo $llengua;?>">

<meta http-equiv="Content-type" content="text/html; charset=utf-8" />

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title></title>
  <!-- Custom fonts for this theme -->
  <?php echo fragmentEstilIScripts(); ?>

	<style>
      #uploader {
        width: 300px;
        height: 200px; 
        background: #f4b342; 
        padding: 10px;
      }
	</style>
</head>
<body>
  <header class="masthead bg-primary text-white text-center">

	<?php echo fragmentNavegador($codiLlengua); 
	?>
	
<?php 
$email = "";
$msg   = "";
if (isset($_POST['email'])){
	$email = $_POST['email'];
}else{
	echo "Debe introducir un eMail para contactar.<br>";
}
if (isset($_POST['msg'])){
	$msg = $_POST['msg'];
}else{
	echo "Debe escribir un mensaje de contacto antes de enviar.";
}
/*
#################################################################################
### Si hi ha un email i un missatge, llavors que desi el missatge de contacta ###
#################################################################################
*/
if ($email != "" && $msg != ""){
	$sentencia = $conexio->prepare("INSERT INTO contacta (email, msg, llegit) VALUES (?,?,?)");
	$llegit = false;
	$sentencia->bind_param("ssi",$email,$msg,$llegit);
	$estatConsulta = $sentencia->execute();
	/* 
	#############################################################
	###  Si hi ha un error al enviar el missatge de contacta  ###
	#############################################################
	*/
	if ($estatConsulta){
		echo "Missatge enviat correctament";
	}else{
		echo "Error al enviar el missatge";
	}
}
?>
  </header>
<?php echo fragmentPeuPagina($codiLlengua); ?>
<?php echo fragmentAbaixDeTot($codiLlengua); ?>
</body>	
