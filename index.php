<?php
$titlePage = 'Projet Assurance';
$pageFileName = basename(__FILE__);
$metaPage = array(
	'<meta name="description" content="Sauvegardez gratuitement vos Snaps sans alerter l\'émetteur d\'un screenshot. Envoyez des Snaps à partir d\'images présentes sur votre ordinateur. Affichez vos Snaps sans les indiquer comme ouvert." />',
	'<meta name="robots" content="index, follow, all" />'
);
require_once 'includes/top.php';
?>
<header class="jumbotron text-center">
	<div class="container">
		<img src="images\logo.png" alt="" /><br />
		<h1>Projet Assurance</h1>
		<p>Assistance véhicule électrique</p>
		<p class="lead">Localisez les bornes de recharges les plus proches.<br />Dépannage en cas de panne et d'immobilisation.</p>
		<p><a class="btn btn-default btn-lg" href="#" target="_blank">Dossier existant</a> 
		<a class="btn btn-primary btn-lg" href="#">Nouvelle demande &raquo;</a> 
		<a class="btn btn-primary btn-lg" href="http://localhost/projet-assurance/melocaliser.php">Me localiser </a></p>

	</div>
</header>
<aside class="container">
	<div class="row">
		<div class="col-md-4">
			<h2><span class="glyphicon glyphicon-save text-primary"></span> Localiser</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
		</div>
		<div class="col-md-4">
			<h2><span class="glyphicon glyphicon-th-large text-primary"></span> Diagnostic automatique</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
		</div>
		<div class="col-md-4">
			<h2><span class="glyphicon glyphicon-send text-primary"></span> Sinistre</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
		</div>
	</div>
</aside>
<?php require_once 'includes/bottom.php'; ?>