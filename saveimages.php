<?php
/*  #######################################################
	##            Pàgina de pujada del fitxer            ##
	#######################################################
	##               Autor: Anïs Khoury Ribas            ##
	##               Per Meinsa Sistemas S.L.            ##
	##                      25/11/2019                   ##
	#######################################################
	/*
	How it works:
		1- Loop all files pending for upload
		2- Get every file and upload if no exist. Directory will 
		   be created using data day/month/year Example:
		    25/12/2019 should be 20191225
		3- Move file to end directory.
		4- Generate url for access images.
	*/
/*Carreguem els fragments de la pàgina web, com la capcelera, navegació, etc*/
include("fragments.php");
include("messages.php");
include("configuration.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>

	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

  <title>Image uploaded</title>
  <!-- Custom fonts for this theme -->
  <?php echo fragmentStylesScripts(); ?>

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
<?php echo fragmentNavigator(); ?>
<div class="container">
	<br><br><br><br><br>
<?php
/*#######################################################
  ###       Get tags and description of imagges       ###
  #######################################################
*/
$tags        = "";
$description = "";

if (isset($_POST['tags'])){
	$tags = $_POST['tags'];
}
if (isset($_POST['description'])) {
	$description = $_POST['description'];
}

/*#######################################################
  ###              Loop for upload images             ###
  #######################################################
*/


foreach($_FILES["images"]['tmp_name'] as $key => $tmp_name){

	//Es valida que el fitxer existeixi
	if($_FILES["images"]["name"][$key]) {
	
		$fileName = $_FILES["images"]["name"][$key]; 
		$fileName = md5($fileName).time();
		$source = $_FILES["images"]["tmp_name"][$key];
		$tipusFitxer = $_FILES["images"]["type"];
			
			
		$dateNow = date("Ymd");			
		//Path where file will be saved.
		$directory = 'images/'.$dateNow.'/'; 

		//Validate if directory exist. If no exist, create it.
		if(!file_exists($directory)){
			mkdir($directory, 0777) or die("No s'ha pogut crear el directori per desar l'imatge");	
		}
		//Open directory
		$dir=opendir($directory); 
		//Create path directory
		$target_path = $directory.''.$fileName; 
			
		//Move file and validate upload correctly.
		//First is origin and second parameter destinity.
		if(move_uploaded_file($source, $target_path)) {	
			$result = "<br>The image  ";
			$result .= '<a href="'.$target_path.'" target="_blank">'.$fileName.'</a> was saved correctly. <br>';
			echo $result;
		}else{	
			echo "Ha ocurrido un error, por favor inténtelo de nuevo.<br>";
		}
		closedir($dir); //Close directory 
			
		/* Insert path and description from uploaded image.*/
		$sentence = $connection->prepare("INSERT INTO images (iduser, path, description) VALUES (?,?,?)");
		$sentence->bind_param("iss",$_SESSION['iduser'],$target_path,$description);
		$sentence->execute();
		$idImage = $sentence->insert_id;

		/*Splited by tags using coma. Link between tags and images*/
		$tagsSplited = explode(",",$tags);
		foreach ($tagsSplited as $tag){
			$sentence = $connection->prepare("INSERT INTO tags (name, idimage) VALUES (?,?)");
			$sentence->bind_param("si",$tag,$idImage);
			$sentence->execute();
		}
		$url = "https://euroimg.com/".$target_path;
		echo "URL is: <a href=".$url.">".$url."</a><br>";

			
	}
}
?>
</div>
</body>
<?php echo fragmentFooter(); ?>
<!-- Copyright Section -->
<?php echo fragmentFooterAbsolut(); ?>
</html>


