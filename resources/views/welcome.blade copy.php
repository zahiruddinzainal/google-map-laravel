<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Map</title>
    <link rel="stylesheet" href="public/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

</head>

<body>

    <body onload="initializeMap()">
        <div class="container">
            <div>
                <div id="map-canvas"></div>
            </div>
        </div>
    </body>



    <script>
    function initializeMap() {
        console.log('initialize');
        var myOptions = {
            center: new google.maps.LatLng(3.067123, 101.535866),
            zoom: 14,
            mapTypeId: 'roadmap'

        };

        var map = new google.maps.Map(document.getElementById("map-canvas"), myOptions);

        // BLUE PIN 1
        var bluepin1 = new google.maps.Marker({
            position: new google.maps.LatLng(3.071898, 101.529132),
            map: map,
            icon: "http://maps.google.com/mapfiles/ms/icons/blue-dot.png"
        });
        google.maps.event.addListener(bluepin1, "click", function() {
            window.location.href = 'barber/1';
        });

        // BLUE PIN 2
        var bluepin2 = new google.maps.Marker({
            position: new google.maps.LatLng(3.077898, 101.549132),
            map: map,
            icon: "http://maps.google.com/mapfiles/ms/icons/blue-dot.png"
        });
        google.maps.event.addListener(bluepin2, "click", function() {
            window.location.href = 'barber/2';
        });

        // BLUE PIN 3
        var bluepin3 = new google.maps.Marker({
            position: new google.maps.LatLng(3.067898, 101.542132),
            map: map,
            icon: "http://maps.google.com/mapfiles/ms/icons/blue-dot.png"
        });
        google.maps.event.addListener(bluepin3, "click", function() {
            window.location.href = 'barber/3';
        });



    }
    </script>

</html>