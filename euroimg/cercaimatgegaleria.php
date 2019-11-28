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


function mostrarRutaImatgesCerca(){
	global $conexio;
	$textACercar = "";
	if (isset($_POST['textacercar'])){
		$textACercar = "%".$_POST['textacercar']."%";
	}

	$stmt = $conexio->prepare("SELECT * FROM imatges WHERE descripcio LIKE ?");
	$stmt->bind_param('s', $textACercar);
	$stmt->execute();
	$resultat = $stmt->get_result();
		
		
	while($fila = $resultat->fetch_assoc()) {
		$descripcio = $fila["descripcio"];
		$ruta = $fila["ubicacio"];
		$webImatge = '<a style="color:black" href="'.$ruta.'">'.$descripcio.'</a>';
		$img = '<img src="'.$ruta.'" alt="'.$descripcio.'" height="80" width="80" >';
		$img = '<a target="_blank" href="'.$ruta.'">'.$img.'</a>';
		echo "<br><br>".$webImatge;
		echo $img;
	}
}
	

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
  
  <header class="masthead bg-primary text-white text-center">
	<center>
		<?php mostrarRutaImatgesCerca();    ?>
	</center>
   <br><br> 
  </header>
  
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
		


<?php echo fragmentPeuPagina($codiLlengua); ?>
<?php echo fragmentAbaixDeTot($codiLlengua); ?>
</body>	

