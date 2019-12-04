<?php
/*  #######################################################
	##  Fragments de codi per modularitzar la pàgina web ##
	#######################################################
	##               Autor: Anïs Khoury Ribas            ##
	##               Per Meinsa Sistemas S.L.            ##
	#######################################################
	
*/
//include('missatges.php');



function fragmentEstilIScripts(){
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
function fragmentNavegador($codiLlengua){
	global $missatge;
	$resultat = '  
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
				<a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="galeria.php">Galeria de euroImages</a>
			  </li>
			  <li class="nav-item mx-0 mx-lg-1">
				<a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="sobreeuroimg.php">Sobre EuroIMG</a>
			  </li>
			  <li class="nav-item mx-0 mx-lg-1">
				<a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="contacta.php">Contacta</a>
			  </li>
			  
			 
			</ul>
		  </div>
		</div>
    </nav>';
	
  return $resultat;
}

function fragmentPujarImatgesInici($codiLlengua){

	global $missatge;
	$resultat = '  <header class="masthead bg-primary text-white text-center">
					<center>
					<form name="formulariPujarFitxers" id="formulariPujarFitxers" method="post" action="desarfitxer.php" enctype="multipart/form-data">
						
						<h4 class="text-center">Cargar Multiple Archivos</h4>
						
						<div class="form-group">
							<label class="col-sm-2 control-label">Archivos</label>
							<div class="col-sm-4">
								<input type="file" class="form-control" id="fitxers[]" name="fitxers[]" multiple="">
							</div>
							<div class="col-sm-4">
							Escribe los tags,separados por coma. Ejemplo: ropa, hombre, pantalón
								<input type="text" class="form-control" id="tags" name="tags" >
							</div>
							Descripción de la imagen.<br>
							<textarea rows="4" cols="60" id="descripcio" name="descripcio">
							</textarea>
							<br>
							<button type="submit" class="btn btn-success">Cargar</button>
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
		
	$resultat .= $missatge[$codiLlengua]["index"]["principisIndex"];
	$resultat .= '</div></header>';
  return $resultat;
}

function fragmentPeuPagina($codiLlengua){
	$resultat = '  <footer class="footer text-center">
    <div class="container">
      <div class="row">

        <!-- Footer Location -->
        <div class="col-lg-4 mb-5 mb-lg-0">
          <h4 class="text-uppercase mb-4">Dirección</h4>
          <p class="lead mb-0">C/ Girona, 63
            <br>08009 , Barcelona</p>
        </div>

        <!-- Footer Social Icons -->
        <div class="col-lg-4 mb-5 mb-lg-0">
		<h4 class="text-uppercase mb-4">Privacidad</h4>
			Estamos comprometidos con la privacidad de nuestros usuarios. Seas fotógrafo, diseñador, artista o usuario particular
        </div>

        <!-- Footer About Text -->
        <div class="col-lg-4">
          <h4 class="text-uppercase mb-4">Licencia</h4>
          <p class="lead mb-0">GPL para el código y Creative Commons para el contenido.

        </div>

      </div>
    </div>
  </footer>';
  return $resultat;
}
function fragmentAbaixDeTot($codiLlengua){
	$resultat = '  <section class="copyright py-4 text-center text-white">
    <div class="container">
      <small>Gracias por confiar en nuestros servicios de EuroIMG!</small>
    </div>
  </section>';
  return $resultat;
}
/*
############################################################
####  Formulari per cercar una imatge desde la galeria  ####
############################################################                  
*/
function fragmentGaleriaCercador($codiLlengua){
	$resultat = '<header class="masthead bg-primary text-white text-center">
					<center>						
						<h4 class="text-center">Busqueda de imagenes</h4>
						<form id="cercador" method="POST" action="cercaimatgegaleria.php">
								<div class="form-group">
									<div class="col-sm-8">
										Busca por la descripción de las imagenes <input type="text" name="textacercar">
									</div>
									
								<br>
							<button type="submit" class="btn btn-success">Buscar</button>
						</form>
					</center>
	</div>';

	$resultat .= '</div></header>';
	return $resultat;
}
/*
###################################################################
####  Formulari per cercar una imatge desde la pàgina de tags  ####
###################################################################                 
*/
function fragmentCercaPerTag($codiLlengua){
	$resultat = '<header class="masthead bg-primary text-white text-center">
					<center>						
						<h4 class="text-center">Cerca d\'imatges per tag</h4>
						<form id="cercador" method="POST" action="cercaimatgetags.php">
								<div class="form-group">
									<div class="col-sm-8">
										Cerca per tags <input type="text" name="textacercar">
									</div>
									
								<br>
							<button type="submit" class="btn btn-success">Cercar</button>
						</form>
					</center>
	</div>';

	$resultat .= '</div></header>';
	return $resultat;
}
##################################################
##    Funció que retorna imatges aleatories.    ##
## El número d'imatges a retornar s'especifica  ##
##      a la variable quantitatResultats        ##
##################################################
function imatgeAleatoria($codiLlengua,$quantitatResultats){
	$sql = "SELECT * FROM imatges WHERE id IN (SELECT id FROM (SELECT id FROM imatges ORDER BY RAND() LIMIT ".$quantitatResultats.") t)";
	

}

###########################################
###  Funció per mostrar tots els tags   ###
###########################################
function mostrarTotsElsTags($codiLlengua){
	$sentencia = "SELECT * from tags";

	$resultat = $conexio->query($sentencia);
	while ($tag = $resultat->fetch_assoc()) {
		echo "<br>".$tag['nom'];
	}
}


/*

*/
?>