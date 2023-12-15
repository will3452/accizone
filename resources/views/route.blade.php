<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Routes {{$lat}} - {{$lng}}</title>
    <style>
        body,html {
            margin: 0px;
            padding: 0px; 
        }
        #map {
            width: 100vw;
            height: 100vh; 
        }
    </style>
</head>
<body>
    <script src='https://api.mapbox.com/mapbox-gl-js/v3.0.0/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v3.0.0/mapbox-gl.css' rel='stylesheet' />
    <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.1.1/mapbox-gl-directions.js"></script>
<link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.1.1/mapbox-gl-directions.css" type="text/css">
    <div id='map'></div>
    
    <script>
        
        mapboxgl.accessToken = 'pk.eyJ1IjoiZWxlemVya3ciLCJhIjoiY2wxNHE4d2E5MHRvMTNkczA1anltY3lybSJ9.T2bcLRSnEZB_LNGM7Qs5Mw';

        var map; 
        var marker; 


        const renderMap = (lat, lng) => {
            map = new mapboxgl.Map({
                container: 'map', // container ID
                style: 'mapbox://styles/mapbox/streets-v11', // style URL
                center: [lng, lat], // starting position [lng, lat]
                zoom: 10, // starting zoom
            });
            let direction = new MapboxDirections({
                accessToken: mapboxgl.accessToken
            });
            direction.setOrigin([lng, lat])
            direction.setDestination([{{$lng}}, {{$lat}}])
            map.addControl(
                direction, 
                'top-left'
            );
            
        }

        const successCurrentPositionCB = ({coords}) => {
            console.log(coords); 
            let {latitude, longitude} = coords; 
            renderMap(latitude, longitude)
        }
        navigator.geolocation.getCurrentPosition(successCurrentPositionCB, () => {
            alert('Getting current position error!'); 
        })
    </script>
</body>
</html>