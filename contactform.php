<?php
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
  <header class="masthead bg-primary text-white text-center">

	<?php echo fragmentNavigator(); 
	?>
	
<?php 
$email = "";
$msg   = "";
if (isset($_POST['email'])){
	$email = $_POST['email'];
}else{
	echo "You must enter an eMail to contact.<br>";
}
if (isset($_POST['msg'])){
	$msg = $_POST['msg'];
}else{
	echo "You must write a contact message before sending message.";
}
/*
#################################################################################
### If there is an email and a message, then you can send the contact message ###
#################################################################################
*/
if ($email != "" && $msg != ""){
	$sentence = $connection->prepare("INSERT INTO contact (email, msg, readed) VALUES (?,?,?)");
	$readed = false;
	$sentence->bind_param("ssi",$email,$msg,$readed);
	$stateSentence = $sentence->execute();
	/* 
	################################
	###  check possible errors   ###
	################################
	*/
	if ($stateSentence){
		echo "Message sended correctly.";
	}else{
		echo "Error sending contact message.";
	}
}
?>
  </header>
<?php echo fragmentFooter(); ?>
<?php echo fragmentFooterAbsolut(); ?>
</body>	
