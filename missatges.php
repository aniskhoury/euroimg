<?php
/*  #######################################################
	##      Textos de la web per diferents llengues      ##
	#######################################################
	##               Autor: Anïs Khoury Ribas            ##
	##               Per Meinsa Sistemas S.L.            ##
	#######################################################
/*Obtenim la llengua de l'usuari*/
$llengua       = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
/*
	###########################
	### Codis dels idiomes  ###
	###########################
	Web: https://www.metamodpro.com/browser-language-codes
	
	Principals llengues de EuroIMG:
	ca -> català
	eu -> euskera
	gl -> gallec
	po -> portuguès
	it -> italià
	fr -> francès
	de -> alemany
	ga -> irlandès
	el -> grec
	nl -> holandès
	
	en -> anglès
*/
$codisLlengues  = ["ca"=>0, "eu"=>1,"gl"=>2,"po"=>3,"it"=>4, "fr"=>5,"de"=>6,"ga"=>7, "el"=>8,"nl"=>9,"es"=>10];
$codiLlengua   = 0;

if (isset($codisLlengues[$llengua])){
	$codiLlengua = $codisLlengues[$llengua];
}

$missatges[0]["index"]["titolIndex"] = "EuroIMG - Web per pujar imatges";
$missatges[1]["index"]["titolIndex"] = "EuroIMG - irudiak igotzeko web";
$missatges[2]["index"]["titolIndex"] = "EuroIMG - Web para cargar imaxes";
$missatges[3]["index"]["titolIndex"] = "EuroIMG - web para fazer upload de imagens";
$missatges[10]["index"]["titolIndex"] = "EuroIMG - Web para subir imagenes";

$missatge[1]["index"]["principisIndex"] = '	
		<p>0) Tota la web i serveis d\'EuroIMG tenen llicència GPL i es respecta la llicència de l\'usuari. </p>
		<p>1) Tenim els servidors ubicats en Europa. No posem les teves dades a Amazon Clound, Microsoft Azure, i altres serveis cloud</p>
		<p>2) <b>Seguim les directives i lleis europees en privacitat i protecció de dades</b>.Només entreguem les dades per ordre judicial, a diferència d\'altres països anglosaxons.</p>
		<p>3) Estamos enfocados a las directrices de la Unión Europea: <b>Llibertat d\'informació, creació i publicació de dades</b>.<br>
		<p>4) Ens enfoquem a donar servei als ciutadans europeus, però també s\'accepten usuaris d\'altres països, però les seves dades estaran ens ervidor europeus i seguiran les mateixes lleis que els residents europeus.<br>
		<p>5) No ens apropiem de les imatges.<b>Els drets de propietat, explotació i autoria de les imatges pujades pels usuaris es respecten.</b>.<br>
		<p>6) La responsabilitat legal del correcte us del servei recau en l\'usuari que ha pujat l\'imatge.<br>
		<p>7) <b>Paguem els impostos en Europa</b><br>
		<p>8) <b>Treballem amb la moneda euro</b>. El ingrès d\'altres divises serà convertit en euros i la covnersió dependrà de la cotització del mercat de divises.</b>.<br>
		<p>9) Servei pensat per dissenyadors gràfics, fotògrafs, il·lustradors, artistes i usuaris particulars.
		<p>10) Tractem de fer una empresa inclusiva, acceptant la diversitat humana, lingüística i cultural de l\'Unió Europea.'; 
$missatge[10]["index"]["principisIndex"] = '	
		<p>0) Toda la web y los servicios de EuroIMG son GPL y el contenido Creative Commons </p>
		<p>1) <b>Tenemos los servidores en Europa</b>. No ponemos tus datos en Amazon cloud, Microsoft Azure, etc.<br></p>
		<p>2) <b>Seguimos las leyes Europeas de privacidad</b>. Solamente entregamos datos con orden judicial, a diferencia de ciertos paises anglosajones.<br></p>
		<p>3) Estamos enfocados a las directrices de la Unión Europea: <b>Libre circulación de personas, capitales e información</b>.<br>
		<p>4) Nos enfocamos en dar servicios a los ciudadanos europeos<br>
		<p>5) No nos apropiamos de las imagenes. <b>Los derechos (de la propiedad, explotación y autoría) de las imagenes subidas por los usuarios se respetan</b>.<br>
		<p>6) La responsabilidad del uso del servicio recae en el usuario que ha subido la imagen.<br>
		<p>7) <b>Pagamos impuestos en Europa</b>y nuestros trabajadores cotizan en Estados y países de la Unión Europea<br>
		<p>8) <b>Trabajamos con el euro</b>. El ingreso con otras divisas  será convertido en euros y la conversión dependera de la cotización del mercado de divisas.<br>
		<p>9) Pensado para diseñadores gráficos, fotógrafos, ilustradores y artistas.
		<p>10) Tratamos de hacer una empresa inclusiva, aceptando la diversidad humana, lingüística y cultural de los países de la Unión Europea.'; 
$missatge[1]["textSobreNosaltres"] = '
		EuroIMG és una web que ofereix serveis d\'emmagatzematge d\'imatges de codi lliure. <br>
		Les imatges allotjades a EuroIMG tenen llicència Creative Commons i poden ser utilitzades per qualsevol persona o màquina.';
$missatge[10]["textSobreNosaltres"] = '
		EuroIMG es una web que ofrece servicios de almacenamiento de imagenes de código libre.<br>
		Las imágenes alojadas en EuroIMG tienen licencia Creative Commons, y pueden ser usadas por cualquier persona o máquina.';
?>