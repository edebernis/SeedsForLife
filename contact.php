<?php
if (isset($_POST['inputMessage'])) {

	$name = $_POST['inputName'];
	$firstname = $_POST['inputFirstName'];
	$email = $_POST['inputEmail'];
	$userMessage = $_POST['inputMessage'];

	$page = $_GET['page'];

	$messageToAdmin = "Message provenant du site web:\n\n";
	$messageToAdmin .= "Nom: ".$name."\n";
	$messageToAdmin .= "Prenom: ".$firstname."\n";
	$messageToAdmin .= "Email: ".$email."\n\n";
	$messageToAdmin .= $userMessage;

	if (!mail("contact.seedsforlife@gmail.com", "Message d'un utilisateur", $messageToAdmin, "From: ".$email)) {
		header('Location: '.$page.'.php?send_message=error');
	}

	header('Location: '.$page.'.php?send_message=success');
}
?>