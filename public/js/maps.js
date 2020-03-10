$(document).ready(function(){
  if($('#map').length){
    var map = new google.maps.Map(document.getElementById('map'), {
      center: new google.maps.LatLng(12.0211369,120.2522607),
      zoom: 6,
      mapTypeId: 'terrain',
      zoomControl:true
    });


    $.getJSON("/json/ras", function(json) {
      var json1 = JSON.parse(json);
      $.each(json1.data, function(key, data) {

        var latLng = new google.maps.LatLng(data.Lat, data.Lng);

        var infowincontent = '<div style="color:#333"><strong>'+data.Branch+'</strong><br></div>';
        var image = {
        url: '/images/'+data.Icon,
        scaledSize : new google.maps.Size(30, 30),
        };
        var marker = new google.maps.Marker({
          position: latLng,
          animation: google.maps.Animation.DROP,
          map: map,
          title: data.Company+' - '+data.Branch,
          icon: image
        });

        var infowindow = new google.maps.InfoWindow({
          content: infowincontent
        });
        marker.addListener('click', function() {
          infowindow.open(map, marker);
        });
      });
    });
  }
});
