<?php

/*

// Coordonées actuelles
$currentGps = $_GET['lon'].','.$_GET['lat'];

// Rechercher le code INSEE de la position actuelle
$codeInsee = getCodeInsee($currentGps);

// Rechercher les bornes de ce code INSEE (filtre)
$borneIds[id] = $coordonnees;
// SELECT id, coordonnees FROM bornes WHERE code_insee = :code_insee

// Rechercher la borne la plus proches
foreach($borneIds as $borneId => $borneGps) {
	$distance = getDistance($currentGps, $borneGps);
	$borneDistances[$borneId] = $distance;
}

// Récupération de la borne la plus proches
$borneIdPlusProche = array_keys($borneDistances, min($borneDistances));

// Récupération des infos associées à la borne la plus proche
// SELECT * FROM bornes WHERE id = :id;



*/