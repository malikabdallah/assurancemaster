<?php

?>
<html>
<head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">

</head>

<header class="jumbotron text-center">


    <div class="container">
        <a class="btn btn-primary btn-lg" href="#">Nouvelle demande &raquo;</a>
        <a class="btn btn-primary btn-lg" href="http://localhost/projet-assurance/index.php"> Retour </a></p>
    </div>
</header>

<aside class="container">

    <div class="col-md-4">
        <h2><span class="glyphicon glyphicon-record"></span> Infos position :</h2>
        <div id="infoposition"></div>
        <div id="infolatitude"> <p>Latitude : </p> </div>
        <div id="infolongitude"> <p>Longitude :</p></div>
        <script>
            function maPosition(position) {
                var infopos = "Position GPS :\n";
                var infolatit = position.coords.latitude;
                var infolongit = position.coords.longitude;


                document.getElementById("infoposition").innerHTML = infopos;
                document.getElementById("infolatitude").innerHTML = infolatit;
                document.getElementById("infolongitude").innerHTML = infolongit;



                document.getElementById("#lien").href="bornes_search.php?lon="+infolongit+"&lat="+infolatit;

            }

            if(navigator.geolocation)
                navigator.geolocation.getCurrentPosition(maPosition);
        </script>
    </div>


    <a id="#lien" href="">
chercher bornes
    </a>

    <div class="col-md-4">
        <h2><span class="glyphicon glyphicon-map-marker"></span> Maps :</h2>

        <div id="map"></div>
        <script>
            var map;
            function initMap() {
                map = new google.maps.Map(document.getElementById('map'), {
                    center: {lat: -34.397, lng: 150.644},
                    zoom: 8
                });
            }
        </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCxIn83UI_BtQzlVBWMB3yq1BIop3U5Sxc&callback=initMap"
                async defer></script>



    </div>






</aside>

</html>