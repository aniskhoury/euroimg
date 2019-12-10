<?php
/*  #######################################################
	##        Fragments of code for modular website.     ##
	#######################################################
	##               Autor: Anïs Khoury Ribas            ##
	##               Per Meinsa Sistemas S.L.            ##
	#######################################################
	
*/




function fragmentStylesScripts(){
	$resultat = '  
	<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <!-- Theme CSS -->
    <link href="css/freelancer.min.css" rel="stylesheet">
    <script src="simple-upload.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">';
	return $resultat;
}
function fragmentNavigator(){
	$result = '  
	<nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
		<div class="container">
			<a class="navbar-brand js-scroll-trigger" href="index.php">EuroIMG</a>
			<button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
			Menu
			<i class="fas fa-bars"></i>
			</button>
		  <div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">
			  <li class="nav-item mx-0 mx-lg-1">
				<a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="galery.php">Galery of euroImg</a>
			  </li>
			  <li class="nav-item mx-0 mx-lg-1">
				<a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="about.php">About EuroIMG</a>
			  </li>
			  <li class="nav-item mx-0 mx-lg-1">
				<a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="contact.php">Contact</a>
			  </li>
			  
			 
			</ul>
		  </div>
		</div>
    </nav>';
	
  return $result;
}

function fragmentUploadImagesIndex(){

	global $messages;
	$result = '  <header class="masthead bg-primary text-white text-center">
					<center>
					<form name="formLoadImages" id="formLoadImages" method="post" action="saveimages.php" enctype="multipart/form-data">
						
						<h4 class="text-center">Load multiple images</h4>
						
						<div class="form-group">
							<label class="col-sm-2 control-label">Images</label>
							<div class="col-sm-4">
								<input type="file" class="form-control" id="images[]" name="images[]" multiple="">
							</div>
							<div class="col-sm-4">
							Write the tags, separaded by coma. Example: computer, screen, keyboard,...
								<input type="text" class="form-control" id="tags" name="tags" >
							</div>
							Descripcion of the images<br>
							<textarea rows="4" cols="60" id="description" name="description">
							</textarea>
							<br>
							<button type="submit" class="btn btn-success">Load</button>
						</div>
						
					</form>
					</center>
	</div>
      <!-- Icon Divider -->
      <div class="divider-custom divider-light">
        <div class="divider-custom-line"></div>

        <div class="divider-custom-line"></div>
      </div>

		<!-- Masthead Subheading -->';
		
	$result .= $messages["values"];
	$result .= '</div></header>';
  return $result;
}

function fragmentFooter(){
	$result = '  <footer class="footer text-center">
    <div class="container">
      <div class="row">

        <!-- Footer Location -->
        <div class="col-lg-4 mb-5 mb-lg-0">
          <h4 class="text-uppercase mb-4">Direccion</h4>
          <p class="lead mb-0">C/ Girona, 63
            <br>08009 , Barcelona</p>
        </div>

        <!-- Footer Social Icons -->
        <div class="col-lg-4 mb-5 mb-lg-0">
		<h4 class="text-uppercase mb-4">Privacidad</h4>
			We are committed to the privacy of our users. You are a photographer, designer, artist or individual user
        </div>

        <!-- Footer About Text -->
        <div class="col-lg-4">
          <h4 class="text-uppercase mb-4">License</h4>
          <p class="lead mb-0">All images are licensed under Creative Commons

        </div>

      </div>
    </div>
  </footer>';
  return $result;
}
function fragmentFooterAbsolut(){
	$result = '  <section class="copyright py-4 text-center text-white">
    <div class="container">
      <small>Thanks for use EuroIMG services!</small>
    </div>
  </section>';
  return $result;
}
/*
############################################################
####  Formulari per cercar una imatge desde la galeria  ####
############################################################                  
*/
function fragmentGalerySearcher(){
	$result = '<header class="masthead bg-primary text-white text-center">
					<center>						
						<h4 class="text-center">Search of images</h4>
						<form id="cercador" method="POST" action="searchimagesgalery.php">
								<div class="form-group">
									<div class="col-sm-8">
										Search using description of images <input type="text" name="textsearch">
									</div>
									
								<br>
							<button type="submit" class="btn btn-success">Search</button>
						</form>
					</center>
	</div>';

	$result .= '</div></header>';
	return $result;
}
/*
###################################################################
####  Formulari per cercar una imatge desde la pàgina de tags  ####
###################################################################                 
*/
function fragmentCercaPerTag($codiLlengua){
	$result = '<header class="masthead bg-primary text-white text-center">
					<center>						
						<h4 class="text-center">Search images by tag</h4>
						<form id="searcher" method="POST" action="cercaimatgetags.php">
								<div class="form-group">
									<div class="col-sm-8">
										Write tags <input type="text" name="textacercar">
									</div>
									
								<br>
							<button type="submit" class="btn btn-success">Cercar</button>
						</form>
					</center>
	</div>';

	$result .= '</div></header>';
	return $result;
}
##################################################
##    Funció que retorna imatges aleatories.    ##
## El número d'imatges a retornar s'especifica  ##
##      a la variable quantitatResultats        ##
##################################################
function imatgeAleatoria($codiLlengua,$quantitatResultats){
	$sql = "SELECT * FROM images WHERE id IN (SELECT id FROM (SELECT id FROM images ORDER BY RAND() LIMIT ".$quantitatResultats.") t)";
	

}

###########################################
###  Funció per mostrar tots els tags   ###
###########################################
function mostrarTotsElsTags($codiLlengua){
	$sentence = "SELECT * from tags";

	$result = $conexio->query($sentence);
	while ($tag = $result->fetch_assoc()) {
		echo "<br>".$tag['name'];
	}
}


/*

*/
?>