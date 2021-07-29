<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Map</title>
    <link rel="stylesheet" href="public/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <style>
    a[href^="http://maps.google.com/maps"],
    a[href^="https://maps.google.com/maps"],
    a[href^="https://www.google.com/maps"] {
        display: none !important;
    }

    .gm-bundled-control .gmnoprint {
        display: block;
    }

    .gmnoprint:not(.gm-bundled-control) {
        display: none;
    }
    </style>
</head>

<body>

    <body onload="initializeMap()">
        <div class="container">
            <div>
                <div id="map-canvas"></div>
            </div>
        </div>
        <div class="footer">
            <div class="content">
                <div class="buttons center">
                    <div class="action_btn">
                        <button name="submit" class="action_btn submit" type="submit" value="Save"
                            onclick="postclient()">I need haircut</button>
                        <button name="submit" class="action_btn cancel" type="submit" value="Cancel"
                            onclick="postbarber()">I am barber</button>
                        <p id="saved"></p>
                    </div>
                </div>
            </div>
        </div>
    </body>



    <script>
    function postbarber() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(registerasbarber);
        } else {
            console.log('Geolocation is not supported by this browser.');
        }
    }

    function postclient() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(registerasclient);
        } else {
            console.log('Geolocation is not supported by this browser.');
        }
    }

    function registerasclient(position) {
        // alert(position.coords.latitude + " / " + position.coords.longitude);
        window.location.href = 'client/' + position.coords.latitude + "/" + position.coords.longitude;
    }

    function registerasbarber(position) {
        // alert(position.coords.latitude + " / " + position.coords.longitude);
        window.location.href = 'barber/' + position.coords.latitude + "/" + position.coords.longitude;
    }



    function initializeMap() {
        console.log('initialize');
        var myOptions = {
            center: new google.maps.LatLng(3.067123, 101.535866),
            zoom: 14,
            mapTypeId: 'roadmap',
            disableDefaultUI: true

        };

        var map = new google.maps.Map(document.getElementById("map-canvas"), myOptions);

        // GPS - CURRENT LOCATION
        var gps = new google.maps.Marker({
            position: new google.maps.LatLng(3.062898, 101.542132),
            map: map,
            icon: "http://maps.google.com/mapfiles/kml/pal4/icon49.png"
        });
        google.maps.event.addListener(gps, "click", function() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition);
            } else {
                console.log('Geolocation is not supported by this browser.');
            }
        });

        // BLUE PIN 1
        var bluepin1 = new google.maps.Marker({
            position: new google.maps.LatLng(3.071898, 101.529132),
            map: map,
            icon: "http://maps.google.com/mapfiles/ms/icons/blue-dot.png"
        });
        google.maps.event.addListener(bluepin1, "click", function() {
            window.location.href = 'profile-barber';
        });

        // BLUE PIN 2
        var bluepin2 = new google.maps.Marker({
            position: new google.maps.LatLng(3.077898, 101.549132),
            map: map,
            icon: "http://maps.google.com/mapfiles/ms/icons/blue-dot.png"
        });
        google.maps.event.addListener(bluepin2, "click", function() {
            window.location.href = 'profile-barber';
        });

        // BLUE PIN 3
        var bluepin3 = new google.maps.Marker({
            position: new google.maps.LatLng(3.067898, 101.542132),
            map: map,
            icon: "http://maps.google.com/mapfiles/ms/icons/blue-dot.png"
        });
        google.maps.event.addListener(bluepin3, "click", function() {
            window.location.href = 'profile-barber';
        });

        // RED PIN 1
        var bluepin1 = new google.maps.Marker({
            position: new google.maps.LatLng(3.057898, 101.532132),
            map: map,
            icon: "http://maps.google.com/mapfiles/ms/icons/red-dot.png"
        });
        google.maps.event.addListener(bluepin1, "click", function() {
            window.location.href = 'profile-client';
        });





    }
    </script>

</html>