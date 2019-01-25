<div id="map" style="height: 400px;  width: 100%;  background-color: grey;"></div>
<script type="text/javascript">
function initMap() {
  var center = {lat: 33.680116, lng: -117.172676};
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 10,
    center: center
  });
  var marker = new google.maps.Marker({
    position: center,
    map: map
  });
  
  var locations = [
    ['Los Angeles', 34.052235, -118.243683]
  ];

var infowindow =  new google.maps.InfoWindow({});
var marker, count;
for (count = 0; count < locations.length; count++) {
    marker = new google.maps.Marker({
      position: new google.maps.LatLng(locations[count][1], locations[count][2]),
      map: map,
      title: locations[count][0]
    });
google.maps.event.addListener(marker, 'click', (function (marker, count) {
      return function () {
        infowindow.setContent(locations[count][0]);
        infowindow.open(map, marker);
      }
    })(marker, count));
  }
}
</script>
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA5sTHJ-Lf2WLlTyOdfS22XKe5VY5_dXqE&callback=initMap">
</script>