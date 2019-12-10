<?php
/*  #######################################################
	##              Page of contact EuroIMG              ##
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
<html lang="">

<meta http-equiv="Content-type" content="text/html; charset=utf-8" />

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Contact</title>
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
		<form method="post" action="contactform.php">
			<div>
				<label for="email">eMail</label><br>
				<input type="email" id="email" name="email"/>
			</div>
			<div>
				<label for="msg">Message</label><br>
				<textarea id="msg" cols="60" rows="4" name="msg"></textarea>
			</div>
			
			<input type="submit" name="submit" value = "Send">
		</form>
	</center>
   <br><br> 
  </header>
<?php echo fragmentFooter(); ?>
<?php echo fragmentFooterAbsolut(); ?>
</body>	
