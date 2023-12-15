<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        body,html {
            margin: 0px;
            padding: 0px; 
        }
        #map {
            height: 100vh; 
        }
        #menu {
            height: 100vh;
        }
    </style>

    <script>
        var reports = @json(\App\Models\Report::get()->pluck('lat', 'lng'))
    </script>
</head>
<body>
    <script src='https://api.mapbox.com/mapbox-gl-js/v3.0.0/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v3.0.0/mapbox-gl.css' rel='stylesheet' />
    <link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.1.1/mapbox-gl-directions.css" type="text/css">
    <div class="bg-gray-200 flex"
    x-data="{map:null, marker: null, currentLat: null, currentLng: null}"
    x-init="
    
    mapboxgl.accessToken = 'pk.eyJ1IjoiZWxlemVya3ciLCJhIjoiY2wxNHE4d2E5MHRvMTNkczA1anltY3lybSJ9.T2bcLRSnEZB_LNGM7Qs5Mw';

    
    const maxBounds = [
        [ 120.463, 14.9137,], 
        [120.5273, 14.9918], 
    ]; 

    const renderMap = (lat, lng) => {
        map = new mapboxgl.Map({
            container: 'map', // container ID
            style: 'mapbox://styles/mapbox/streets-v11', // style URL
            center: [lng, lat], // starting position [lng, lat]
            zoom: 22, // starting zoom
            maxBounds, 
        });

        map.fitBounds(maxBounds); 

        map.on('load', function () {
            marker = new mapboxgl.Marker({draggable:true, })
                    .setLngLat([lng, lat])
                    .addTo(map); 


                    map.addSource('heatmap-data', {
                        type: 'geojson', 
                        geometry: {
                            type: 'Point', 
                            coordinates: [ 120.463, 14.9507,], 
                        },
                        properties: {
                            // Add properties as needed for each feature
                            name: 'Location A',
                            value: 10
                          }
                    })
            
                    map.addLayer({
                        'id': 'heatmap-layer',
                        'type': 'heatmap',
                        'source': 'heatmap-data',
                        'paint': {
                          // Configure the heatmap properties here (e.g., radius, intensity, color stops)
                          'heatmap-radius': 20,
                          'heatmap-intensity': 1,
                          // Add more heatmap properties as needed...
                        }
                      });
        }); 


        
        
        
        
    }

    const successCurrentPositionCB = ({coords}) => {
        console.log(coords); 
        let {latitude, longitude} = coords; 
        currentLat = latitude; 
        currentLng = longitude; 
        
        renderMap(latitude, longitude)
    }
    navigator.geolocation.watchPosition(successCurrentPositionCB, () => {
        console.log('error')
    })
    "
    >
        <div id='map' class="w-2/3"></div>
        <div id="menu" class="w-1/3 p-2">
            <div class=" p-2 rounded bg-white">
                <h1>Your Current Location Coordinates </h1>
                <div class="text-sm">
                    Latidude: <span class="font-bold" x-text="currentLat"></span>
                </div>
                <div class="text-sm">
                    Longitude: <span class="font-bold" x-text="currentLng"></span>
                </div>
            </div>
        </div>
    </div>
</body>
</html>