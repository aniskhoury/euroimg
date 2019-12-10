<?php
/*  #######################################################
	####           Page for search images by tags.      ###
	#######################################################
	##               Autor: Anïs Khoury Ribas            ##
	##               Per Meinsa Sistemas S.L.            ##
	##                      25/11/2019                   ##
	#######################################################
 */
/*Load the fragments of the website, like header, navigation, etc*/

include("fragments.php");
include("messages.php");
include("configuration.php");
?>
<!DOCTYPE html>
<html lang="en">

<meta http-equiv="Content-type" content="text/html; charset=utf-8" />

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title></title>
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
<body>
	<?php echo fragmentNavigator(); ?>
	<?php
	$idImage = "";
	echo "<br><br><br><br>";
	if (isset($_GET['idImage'])){
		$idImage = $_GET['idImage'];
	}else{
		echo "<br><center>Error loading Image.</center>";
		echo fragmentFooter(); 
		echo fragmentFooterAbsolut(); 
		die();
	}
	$sentence = "SELECT * FROM images where id=".$idImage;
		
	$result = $connection->query($sentence);
	while ($row = $result->fetch_assoc()) {
		$path = $row['path'];
		$imgHtml = '<center> <img src="'.$row['path'].'"></center>';
		echo $imgHtml;
	}
	?>
	
	<?php echo fragmentFooter(); ?>
<?php echo fragmentFooterAbsolut(); ?>
</body>	