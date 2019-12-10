<?php
/*  #######################################################
	##              Page of galery EuroIMG               ##
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
	
	<?php echo fragmentGalerySearcher(); ?>
	
	Random tags:
	<?php 
	/*#############################################
	  ###########     Show all tags     ###########
	  #############################################*/
	$numRowsTags = 1;
	$sentence = "SELECT * FROM tags order by RAND() LIMIT ".$numRowsTags;

	$result = $connection->query($sentence);
	while ($row = $result->fetch_assoc()) {
		$url = "image.php?idImage=".$row['idimage'];
		$urlHtml = ' <a href="'.$url.'" target="_blank">'.$row['name'].'</a> ';
		echo ($urlHtml);
	}
	?>
<?php echo fragmentFooter(); ?>
<?php echo fragmentFooterAbsolut(); ?>
</body>	

			
