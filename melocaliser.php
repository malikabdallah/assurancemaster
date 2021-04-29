<?php
$titlePage = 'Bornes';
$pageFileName = basename(__FILE__);
require_once 'includes/top.php';




?>
<section class="container">
  <div class="panel panel-primary">
    <div class="panel-heading">Informations positions GPS</div>
    <div class="custom-content center-block">

      <p>Votre position :</p>
      <div class="table-responsive">
        <table class="table table-striped table-hover no-margin-bottom">
          <tr>
            <th>Latitude</th>
            <th colspan="2" id="infolatitude"> Autorisez la localisation pour afficher</th>
          </tr>
          <tr>
            <td><strong>Longitude</strong></td>
            <td id="infolongitude"> Autorisez la localisation pour afficher</td>
            <td class="text-right"><a class="btn btn-primary btn-xs" href="#" data-toggle="tooltip" data-placement="top" title="Bouton 1"><span class="glyphicon glyphicon-send"></span></a></td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</section>



<aside class="container">
  



    <div class="col-md-4">
      <h2><span class="glyphicon glyphicon-map-marker"></span> Maps :</h2>

 <div id="map">




    <div id="map"></div>
    <script>
      // Note: This example requires that you consent to location sharing when
      // prompted by your browser. If you see the error "The Geolocation service
      // failed.", it means you probably did not give permission for the browser to
      // locate you.
      var map, infoWindow;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 6
        });
        infoWindow = new google.maps.InfoWindow;

        // Try HTML5 geolocation.
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };

            infoWindow.setPosition(pos);
            infoWindow.setContent('Location found.');
            infoWindow.open(map);
            map.setCenter(pos);
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }
      }

      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
        infoWindow.open(map);
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCxIn83UI_BtQzlVBWMB3yq1BIop3U5Sxc&callback=initMap">
    </script>






 </div>
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



      <script>
          function maPosition(position) {
            var infopos = "Position GPS :\n"; 
            var infolatit = position.coords.latitude;
            var infolongit = position.coords.longitude;


            document.getElementById("infoposition").innerHTML = infopos;
            document.getElementById("infolatitude").innerHTML = infolatit;
            document.getElementById("infolongitude").innerHTML = infolongit;


          }

          if(navigator.geolocation)
            navigator.geolocation.getCurrentPosition(maPosition);
          </script>


</aside>
<?php require_once 'includes/bottom.php'; ?>
=======
<div id="infolatitude"></div>
<div id="infolongitude"></div>
<script>
    function maPosition(position) {
        var infolatit = position.coords.latitude;
        var infolongit = position.coords.longitude;
        document.getElementById("infolatitude").innerHTML = infolatit;
        document.getElementById("infolongitude").innerHTML = infolongit;
        // document.getElementById("#lien").href="bornes_search.php?lon="+infolongit+"&lat="+infolatit;
    }
    if(navigator.geolocation)
        navigator.geolocation.getCurrentPosition(maPosition);
</script>




<?php require_once 'includes/bottom.php'; ?>