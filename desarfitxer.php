<?php
/*  #######################################################
	##            Pàgina de pujada del fitxer            ##
	#######################################################
	##               Autor: Anïs Khoury Ribas            ##
	##               Per Meinsa Sistemas S.L.            ##
	##                      25/11/2019                   ##
	#######################################################
	/*
	Com funciona:
		1- Es recorre la llista de fitxers obtenides del formulari de pujar fitxers
		2- S'obté el fitxer i es genera el directori en cas de que no existeixi. El directori
		   es genera amb la data, tal que anymesdia, per exemple amb la data 25/12/2019 seria20191225
		3- Es mou el fitxer al directori destí
		4- Es generan els links per accedit a la web dels fitxers
	*/
/*Carreguem els fragments de la pàgina web, com la capcelera, navegació, etc*/
include("fragments.php");
include("missatges.php");
include("configuracio.php");

?>
<!DOCTYPE html>
<html lang="<?php echo $llengua;?>">

<head>

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

<body id="adalt-de-tot">
<?php echo fragmentNavegador($codiLlengua); ?>
<div class="container">
	<br><br><br><br><br>
<?php
/*#######################################################
  ### Obtenim els tags i la descripció de les imatges ###
  #######################################################
*/
$tags       = "";
$descripcio = "";

if (isset($_POST['tags'])){
	$tags = $_POST['tags'];
}
if (isset($_POST['descripcio'])) {
	$descripcio = $_POST['descripcio'];
}

/*#######################################################
  ###           Recorrem les imatges a pujar          ###
  #######################################################
*/

foreach($_FILES["fitxers"]['tmp_name'] as $key => $tmp_name){

	//Es valida que el fitxer existeixi
	if($_FILES["fitxers"]["name"][$key]) {
	
		$nomfitxer = $_FILES["fitxers"]["name"][$key]; 
		$nomfitxer = md5($nomfitxer).time();
		$source = $_FILES["fitxers"]["tmp_name"][$key];
		$tipusFitxer = $_FILES["fitxers"]["type"];
			
			
		$dataAvui = date("Ymd");			
		//Ruta on es desarà el fitxer
		$directori = 'imatges/'.$dataAvui.'/'; 

		//Es valida si el directori existeix, en cas de que no, es crea
		if(!file_exists($directori)){
			mkdir($directori, 0777) or die("No s'ha pogut crear el directori per desar l'imatge");	
		}
		//Obrim el directori destí
		$dir=opendir($directori); 
		//Generem el directori desti
		$target_path = $directori.''.$nomfitxer; 
			
		//Moure el fitxer i validar que s'hagi creat correctament
		//El primer campo es el origen y el segundo el destino
		if(move_uploaded_file($source, $target_path)) {	
			$resultat = "El archivo  ";
			$resultat .= '<a href="'.$target_path.'" target="_blank">'.$nomfitxer.'</a> se almaceno correctamente <br>';
			echo $resultat;
		}else{	
			echo "Ha ocurrido un error, por favor inténtelo de nuevo.<br>";
		}
		closedir($dir); //Cerramos el directorio de destino
			
		/* Es posa l'ubicació de la imatge i l'usuari que l'ha pujat*/
		$sentencia = $conexio->prepare("INSERT INTO imatges (idusuari, ubicacio, descripcio) VALUES (?,?,?)");
		$sentencia->bind_param("sss",$_SESSION['idusuari'],$target_path,$descripcio);
		$sentencia->execute();

		/*TODO:Es posa el tag de la imatge.*/
		//Separem els tags per comes, els recorrem i els posem a la bbdd associant el tag amb cada imatge
		$tagsSeparats = explode(",",$tags);
		foreach ($tagsSeparats as $tag){
			$sentencia = $conexio->prepare("INSERT INTO tags (nom, idimatge) VALUES (?,?)");
			$sentencia->bind_param("si",$tag,$idImatge);
			$sentencia->execute();
		}
		$url = "https://euroimg.com/".$target_path;
		echo "La url es <a href=".$url.">".$url."</a>";

			
	}
}
?>
</div>
</body>
<?php echo fragmentPeuPagina($codiLlengua); ?>
<!-- Copyright Section -->
<?php echo fragmentAbaixDeTot($codiLlengua); ?>
</html>


