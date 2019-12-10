<?php
/*  #######################################################
	##              Pàgina d'inici de EuroIMG            ##
	#######################################################
	##               Autor: Anïs Khoury Ribas            ##
	##               Per Meinsa Sistemas S.L.            ##
	##                      25/11/2019                   ##
	#######################################################
	
	
*/
/*Load fragments of the website, like header, navigation, messages, etc*/

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

  <title>Upload images</title>
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

	<!-- Masthead -->
	<?php echo fragmentUploadImagesIndex(); ?>

	<!-- Footer -->
	<?php echo fragmentFooter(); ?>

	<!-- Copyright Section -->
	<?php echo fragmentFooterAbsolut(); ?>


</body>

</html>
