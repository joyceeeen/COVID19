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
 var random = Math.floor(Math.random() * 5);
$.getJSON("/json/covid19", function(json) {
  $.each(json.COVID19, function(key, data) {
   heatMapData.push({
     location: new google.maps.LatLng(data.Lat,data.Lng),
     weight: data.NumberOfCase
   });
  });
}).done(function(json){
  var heatmap = new google.maps.visualization.HeatmapLayer({
  data: heatMapData,
  radius: 20,
  opacity:1,
  dissipating: true
  });
  heatmap.setMap(map);
});

$.getJSON("/json/covid19", function(json) {
  $.each(json.COVID19, function(key, data) {
   heatMapData.push({
     location: new google.maps.LatLng(data.Lat,data.Lng),
     weight: data.NumberOfCase
   });
  });
}).done(function(json){
  var heatmap = new google.maps.visualization.HeatmapLayer({
  data: heatMapData,
  radius: 20,
  opacity:1,
  dissipating: true
  });
  heatmap.setMap(map);
});

var markers = [];


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
