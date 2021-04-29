<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title><?= $titlePage; ?></title>
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" />
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" />
		<link rel="stylesheet" href="css/style.css" />
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<?php if(isset($metaPage)) foreach($metaPage as $meta) echo $meta; ?>
	</head>
	<body>
		<nav class="navbar navbar-default<?php if($pageFileName == 'index.php') echo ' no-margin-bottom'; ?>" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Menu</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.php">Projet Assurance</a>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-left">
						<li<?php if($pageFileName == 'index.php') echo ' class="active"'; ?>><a href="index.php"><span class="glyphicon glyphicon-home"></span> Accueil</a></li>
						<li<?php if($pageFileName == 'bornes.php') echo ' class="active"'; ?>><a href="bornes.php"><span class="glyphicon glyphicon-pawn"></span> Bornes</a></li>
						<li<?php if($pageFileName == 'conseil.php') echo ' class="active"'; ?>><a href="conseil.php"><span class="glyphicon glyphicon-alert"></span> Conseils</a></li>
						<li<?php if($pageFileName == 'melocaliser.php') echo ' class="active"'; ?>><a href="melocaliser.php"><span class="glyphicon glyphicon-map-marker"></span> Me localiser</a></li>
						<li<?php if($pageFileName == 'contactAssistance.php') echo ' class="active"'; ?>><a href="http://localhost/projet-assurance/contactFrom/contactAssistance.html"><span class="glyphicon glyphicon-wrench"></span> Assistance</a></li>

					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li<?php if($pageFileName == 'login.php') echo ' class="active"'; ?>><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Connexion</a></li>
					</ul>
				</div>
			</div>
		</nav>