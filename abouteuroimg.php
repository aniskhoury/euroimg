<?php 
/*  #######################################################
	##                 Pàgina sobre EuroIMG              ##
	#######################################################
	##               Autor: Anïs Khoury Ribas            ##
	##               Per Meinsa Sistemas S.L.            ##
	##                      25/11/2019                   ##
	#######################################################
	
	
*/
/*Carreguem els fragments de la pàgina web, com la capcelera, navegació, etc*/

include("fragments.php");
include("messages.php");
include("configuration.php");
?>

<!DOCTYPE html>
<html lang=">">

<meta http-equiv="Content-type" content="text/html; charset=utf-8" />

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>About EuroIMG uploader images</title>
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
  <header class="masthead bg-primary text-white text-center">
	<center>	
		EuroIMG is a website that offers free-of-charge image storage services. <br>
		The images hosted at EuroIMG are licensed under Creative Commons, and can be used by any person or machine freely.
	</center>
   <br><br> 
  </header>
<?php echo fragmentFooter(); ?>
<?php echo fragmentFooterAbsolut(); ?>
</body>	
