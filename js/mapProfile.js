/**
 * Created by wolf on 9/12/2014.
 */
function initialize() {
    var lat = document.getElementById('latitude').value;
    var lng = document.getElementById('longitude').value;
    var locc = new google.maps.LatLng(lat, lng);
    var mapOptions = {
        zoom: 8,
        center: locc
    };

    var map = new google.maps.Map(document.getElementById('map-canvas'),
        mapOptions);

    var marker = new google.maps.Marker({
        position: locc,
        map: map
    });

    google.maps.event.addListener(map, "click", function (event) {
        //clear the previous marker
        if (marker != null) {
            marker.setMap(null);
        }
        marker = new google.maps.Marker({
            position: event.latLng,
            map: map
        });
        document.getElementById('latitude').value= event.latLng.lat();
        document.getElementById('longitude').value= event.latLng.lng();
        //alert("Latitude: " + event.latLng.lat() + "\r\nLongitude: " + event.latLng.lng());
    });

}

function loadScript() {
    var script = document.createElement('script');
    script.type = 'text/javascript';
    script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&' +
    'callback=initialize';
    document.body.appendChild(script);
}
window.onload = initialize();