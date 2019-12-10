<?php
/*  #######################################################
	##        Page of galery de galeria de EuroIMG       ##
	#######################################################
	##               Autor: Anïs Khoury Ribas            ##
	##               Per Meinsa Sistemas S.L.            ##
	##                      25/11/2019                   ##
	#######################################################
	
	
*/
/*Load the fragments of the web, like header, navigation, messages...*/

include("fragments.php");
include("messages.php");
include("configuration.php");


function showPathImagesSearch(){
	global $connection;
	$textSearch = "";
	if (isset($_POST['textsearch'])){
		$textSearch = "%".$_POST['textsearch']."%";
	}

	$stmt = $connection->prepare("SELECT * FROM images WHERE description LIKE ?");
	$stmt->bind_param('s', $textSearch);
	$stmt->execute();
	$result = $stmt->get_result();
		
		
	while($row = $result->fetch_assoc()) {
		$description = $row["description"];
		$path = $row["path"];
		$webImatge = '<a style="color:black" href="'.$path.'">'.$description.'</a>';
		$img = '<img src="'.$path.'" alt="'.$description.'" height="80" width="80" >';
		$img = '<a target="_blank" href="'.$path.'">'.$img.'</a>';
		echo "<br><br>".$webImatge;
		echo $img;
	}
}
	

?>

<!DOCTYPE html>
<html lang="">

<meta http-equiv="Content-type" content="text/html; charset=utf-8" />

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title></title>
  <!-- Custom fonts for this theme -->
  <?php echo fragmentStylesScripts(); ?>

  <header class="masthead bg-primary text-white text-center">
	<center>
		<?php showPathImagesSearch();    ?>
	</center>
   <br><br> 
  </header>
  
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
		


<?php echo fragmentFooter(); ?>
<?php echo fragmentFooterAbsolut(); ?>
</body>	

