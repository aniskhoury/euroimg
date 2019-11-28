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

$param = "";
if (isset($_POST['textacercar'])){
	$param = "%".$_POST['textacercar']."%";
}

  $stmt = $conexio->prepare("SELECT * FROM imatges WHERE descripcio LIKE ?");
    $stmt->bind_param('s', $param);
    $stmt->execute();
    $result = $stmt->get_result();
	
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["descripcio"];
    }
	var_dump($result);
	die();
	
$sentencia = $conexio->prepare("select * FROM  `imatges` WHERE `descripcio` LIKE %?%");
$sentencia->bind_param("s",$param);
$sentencia->execute();
$resultat = $sentencia->get_result();

var_dump($resultat);
die();
while ($fila = $resultat->fetch_array(MYSQLI_NUM)) {
	var_dump($fila);
}

die();

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
		
	<?php  ?>
	
	
	

	<?php
	$sentencia = "SELECT * from tags";

	$resultat = $conexio->query($sentencia);
	while ($tag = $resultat->fetch_assoc()) {
		echo ($tag['nom']);
	}
	?>
</body>	
			



?>