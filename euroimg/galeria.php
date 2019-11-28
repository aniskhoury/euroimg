<?php
/*  #######################################################
	##           Pàgina de galeria de EuroIMG            ##
	#######################################################
	##               Autor: Anïs Khoury Ribas            ##
	##               Per Meinsa Sistemas S.L.            ##
	##                      25/11/2019                   ##
	#######################################################
	
	
*/
/*Carreguem els fragments de la pàgina web, com la capcelera, navegació, etc*/

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

  <title><?php echo $missatges[$codiLlengua]["titolIndex"]; ?></title>
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
	<?php echo fragmentNavegador($codiLlengua); ?>
	
	<?php echo fragmentGaleriaCercador($codiLlengua); ?>
	
	
	<?php 
	/*#############################################
	  ########### Mostrar tots els tags ###########
	  #############################################
	$sentencia = "SELECT * from tags";

	$resultat = $conexio->query($sentencia);
	while ($tag = $resultat->fetch_assoc()) {
		echo ($tag['nom']);
	}*/
	?>
<?php echo fragmentPeuPagina($codiLlengua); ?>
<?php echo fragmentAbaixDeTot($codiLlengua); ?>
</body>	

			
