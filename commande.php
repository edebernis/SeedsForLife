<?php
if (isset($_POST['inputNumberTrees'])) {

	include ('functions.php');

	$numberTrees = $_POST['inputNumberTrees'];
	$color = $_POST['selectColor'];
	$name = $_POST['inputName'];
	$firstname = $_POST['inputFirstName'];
	$email = $_POST['inputEmail'];
	$address = $_POST['inputAddress'];
	$postcode = $_POST['inputPostcode'];
	$city = $_POST['inputCity'];

	$page = $_GET['page'];

	$price = getPrice($numberTrees);
	$numberBags = getBagsCount($price);
	
	$message = "Nombre d'arbres plantes: ".$numberTrees."\n";
	$message .= "Prix: ".$price." euros\n";
	$message .= "Nombre de sachets offerts: ".$numberBags."\n";
	$message .= "Couleur: ".$color."\n\n";

	$message .= "Nom: ".$name."\n";
	$message .= "Prenom: ".$firstname."\n";
	$message .= "Email: ".$email."\n\n";

	$message .= "Adresse: ".$address."\n";
	$message .= "Code postal: ".$postcode."\n";
	$message .= "Ville: ".$city."\n";

	$messageToUser = "Seeds For Life vous remercie de votre commande. Nous revenons vers vous dès que possible afin de finaliser celle-ci.\n\n";
	$messageToUser .= "Récapitulatif de votre commande: \n\n";
	$messageToUser .= $message."\n";
	$messageToUser .= "L'equipe de Seeds For Life";

	if (!mail($email, "Votre commande de sachets Seeds For Life", $messageToUser, "From: noreply@seeds4life.fr")) {
		header('Location: '.$page.'.php?send_command=error');
	}

	$messageToAdmin = "Commande de sachets provenant du site web:\n\n";
	$messageToAdmin .= $message;

	if (!mail("contact.seedsforlife@gmail.com", "Commande de sachets", $messageToAdmin, "From: ".$email)) {
		header('Location: '.$page.'.php?send_command=error');
	}

	header('Location: '.$page.'.php?send_command=success');
}
?>