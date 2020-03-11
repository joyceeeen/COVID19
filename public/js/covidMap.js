/* Data points defined as a mixture of WeightedLocation and LatLng objects */

var metroManila = new google.maps.LatLng(14.6360918,120.9734213);

var map = new google.maps.Map(document.getElementById('map'), {
  center: metroManila,
  zoom: 10.90,
  mapTypeId: 'roadmap',
  zoomControl:true
});

var heatMapData = [];
var branches = [];
var circles = [];
var markers = [];

//MAKE HEATMAP
$.getJSON("/json/covid19", function(json) {
  $.each(json.COVID19, function(key, data) {
    var loc = new google.maps.LatLng(data.Lat,data.Lng);
    heatMapData.push({
      location: loc,
      weight: data.NumberOfCase
    });

  })
}).done(function(json){
  var heatmap = new google.maps.visualization.HeatmapLayer({
    data: heatMapData,
    radius: 20,
    opacity:1,
    dissipating: true
  });
  heatmap.setMap(map);
});





//ADD RADIUS
function clearCircles() {
  for (var i = 0; i < circles.length; i++) {
    circles[i].setMap(null);
  }
  circles = [];
}

function drop() {
  clearCircles();
  for (var i = 0; i < heatMapData.length; i++) {
    addCirlclesWithTimeout(heatMapData[i], i * 200);
  }
}

function addCirlclesWithTimeout(position, timeout) {

  window.setTimeout(function() {
    circles.push(new google.maps.Circle({
      strokeColor: '#FF0000',
      strokeOpacity: 0.8,
      strokeWeight: 1,
      fillColor: '#FF0000',
      fillOpacity: 0,
      map: map,
      center: position.location,
      radius: 6000
    }));
  }, timeout);
}
//END ADD RADUIS

//ADD MARKERS
function clearMarkers() {
  for (var i = 0; i < markers.length; i++) {
    markers[i].setMap(null);
  }
  markers = [];
}

function dropMarker() {
  clearMarkers();

  $.getJSON("/json/branches", function(json) {
    var image = {
      url: '/images/cebuana.png',
      scaledSize : new google.maps.Size(30, 30),
    };
    $.each(json.Branches, function(key, data) {
      var latLng = new google.maps.LatLng(data.Lat, data.Lng);

      var marker = new google.maps.Marker({
        position: latLng,
        map: map,
        icon: image
      });
      markers.push(marker);
    });

    var markerCluster = new MarkerClusterer(map, markers, {
      imagePath: 'images/'
    });
  });
}
//END ADD MARKERS
