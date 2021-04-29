<?php

/* Paramètres de connexion à la base de données */
$database = array(
	'host' => 'localhost', // Serveur de la base de données
	'name' => 'assurance', // Nom de la base de données
	'user' => 'root', // Nom d'utilisateur
	'pass' => '' // Mot de passe
);

###########################
## CONNEXION TO DATABASE ##
###########################

try {
	$dbh = new PDO('mysql:host='.$database['host'].';dbname='.$database['name'], $database['user'], $database['pass']);
}
catch(Exception $e) {
	die('<p><strong>Impossible de se connecter au serveur MySQL.<br />Merci de recommencer dans quelques secondes.</strong><br />Erreur : '.$e->getMessage().'</p>');
}