<?php

require_once("includes/database.php");
require_once("includes/function.php");

$iduri = $_GET["id"];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css"/>
</head>
<body>

<?php
if(empty($iduri)){

    $_SESSION["erreur"]="mauvaise requete,passer parametre ".$_GET["id"];
    redirect_to("Blog.php");

}
$sql = "SELECT * FROM sinistre where idSinistre ='$iduri' ";
$stmt=$dbh->query($sql);

while($data=$stmt->fetch()) {

    $id = $data["idSinistre"];
    $date = $data["dateDeclarationSinistre"];
    $title = $data["etatSinistre"];
    $categories = $data["numSinistre"];
    $autheur = $data["typeSinistre"];

}

?>

info sinistre <br/>

<h1> id sinistre : <?php  echo $id ;?></h1> <br/>
<h2>date : <?php  echo $date ;?></h2> <br/>
<h2>etat : <?php  echo $title ;?></h2> <br/>
<h2>numero sinistre : <?php  echo $categories ;?></h2> <br/>
<h2>type : <?php  echo $autheur ;?></h2> <br/>


<div class="col-lg-6 mb-2">
    <a href="dashsinistre.php" > retourn au menu </a>
</div>


</body>
