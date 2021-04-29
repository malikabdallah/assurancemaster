<?php
$titlePage = 'Bornes';
$pageFileName = basename(__FILE__);
require_once 'includes/top.php';
require_once 'includes/database.php';

function getDistance($pointFirst, $pointSecond) {
	$api = simplexml_load_string(file_get_contents('https://maps.google.com/maps/api/directions/xml?language=fr&origin='.$pointFirst.'&destination='.$pointSecond.'&sensor=false&key=AIzaSyAglzZIGr3CwrGuZMqMl0VBc189Y7ExBhw'));
	return $api->route->leg->distance->value . ',' . $api->route->leg->duration->value;
}

function getCodeInsee($point) {
	$gpsData = explode(',', $point);
	$api = json_decode(file_get_contents('https://api-adresse.data.gouv.fr/reverse/?lon='.$gpsData[1].'&lat='.$gpsData[0]));
	return $api->features[0]->properties->citycode;
}

// Récupération des bornes
$sth = $dbh->prepare('SELECT * FROM bornes WHERE id = :id LIMIT 1');
$sth->execute(array(':id' => 1));
$result = $sth->fetch();
$borne = $result['nom_station'];

// Récupération du code INSEE (citycode) en fonction des coordonnées
// var_dump(getCodeInsee('47.9012654,1.90333'));

// Test distance entre deux points
// var_dump(getDistance('47.9012654,1.90333', '48.82084,2.32558'));
?>
<section class="container">
	<div class="panel panel-primary">
		<div class="panel-heading"><?= $titlePage ?></div>
		<div class="custom-content center-block">
			<p>Test SQL : <?= $borne ?></p>
			<p>Retrouvez les bornes ci-dessous :</p>
			<div class="table-responsive">
				<table class="table table-striped table-hover no-margin-bottom">
					<tr>
						<th>Nom</th>
						<th colspan="2">Action</th>
					</tr>
					<tr>
						<td><strong>Test</strong></td>
						<td>Blabla</td>
						<td class="text-right"><a class="btn btn-primary btn-xs" href="#" data-toggle="tooltip" data-placement="top" title="Bouton 1"><span class="glyphicon glyphicon-send"></span></a></td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</section>
<?php require_once 'includes/bottom.php'; ?>