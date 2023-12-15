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
        var reports = {!!\App\Models\Report::get()!!}
    </script>
    <style>
        .accident-marker {
            width: 25px;
            height: 25px; 
            border-radius: 100%; 
        }
    </style>
</head>
<body>
    <script src='https://api.mapbox.com/mapbox-gl-js/v3.0.0/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v3.0.0/mapbox-gl.css' rel='stylesheet' />
    <link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.1.1/mapbox-gl-directions.css" type="text/css">
    <div class="bg-gray-200 flex"
    x-data="{map:null, marker: null, currentLat: null, currentLng: null, nearby: [], check: false,  showDescription(message) {
        alert(message); 
    }}"
    x-init="
    
    mapboxgl.accessToken = 'pk.eyJ1IjoiZWxlemVya3ciLCJhIjoiY2wxNHE4d2E5MHRvMTNkczA1anltY3lybSJ9.T2bcLRSnEZB_LNGM7Qs5Mw';
    
    
    {{-- const maxBounds = [
        [ 120.463, 14.9137,], 
        [120.5273, 14.9918], 
    ];  --}}

    const renderMap = (lat, lng) => {
        map = new mapboxgl.Map({
            container: 'map', // container ID
            style: 'mapbox://styles/mapbox/streets-v11', // style URL
            center: [lng, lat], // starting position [lng, lat]
            zoom: 12, // starting zoom
            {{-- maxBounds,  --}}
        });
        

        {{-- map.fitBounds(maxBounds);  --}}

        map.on('load', function () {
            for(let r of reports) {
                const el = document.createElement('div')
                el.className = 'accident-marker'; 
                let bg = 'red';
                if (r.type == 'Serious') bg = 'orange';
                if (r.type == 'Moderate') bg = 'yellow';
                if(r.type == 'Minor') bg = 'green'; 
                el.style.background = bg; 
                let _marker = new mapboxgl.Marker(el)
                    .setLngLat([r.lng, r.lat])
                    .addTo(map); 
            } 
            nearby = reports.filter( r => {
                return calculateDistance(r.lat, r.lng, lat, lng) <= 10; 
            })
            if (nearby.length && check) {
                speakText(); 
            }
            marker = new mapboxgl.Marker()
                    .setLngLat([lng, lat])
                    .addTo(map); 
        }); 
        
    }

    

    const successCurrentPositionCB = ({coords}) => {
        console.log(coords); 
        let {latitude, longitude} = coords; 
        currentLat = latitude; 
        currentLng = longitude; 
        
        renderMap(latitude, longitude)
    }

    function speakText() {
        const utterance = new SpeechSynthesisUtterance('You are near the location where the incident occurred.');
  
        // Optional: Set speech synthesis options (voice, rate, pitch, etc.)
        // For example:
        // utterance.voice = speechSynthesis.getVoices()[0]; // Set voice
        // utterance.rate = 1.0; // Set speaking rate
        // utterance.pitch = 1.0; // Set pitch
  
        // Speak the provided text
        window.speechSynthesis.speak(utterance);
      }

    function calculateDistance(lat1, lon1, lat2, lon2) {
        const earthRadiusKm = 6371;
      
        const dLat = degreesToRadians(lat2 - lat1);
        const dLon = degreesToRadians(lon2 - lon1);
      
        const a =
          Math.sin(dLat / 2) * Math.sin(dLat / 2) +
          Math.cos(degreesToRadians(lat1)) *
            Math.cos(degreesToRadians(lat2)) *
            Math.sin(dLon / 2) *
            Math.sin(dLon / 2);
      
        const c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
      
        const distance = earthRadiusKm * c;
        return distance;
      }
      
      function degreesToRadians(degrees) {
        return degrees * (Math.PI / 180);
      }


    navigator.geolocation.watchPosition(successCurrentPositionCB, () => {
        console.log('error')
    })
    "
    >
        <div id='map' class="w-2/3"></div>
        <div id="menu" class="w-1/3 p-2">
            <div class=" p-2 rounded bg-white">
                <h1 class="text-center font-mono">Your Current Location Coordinates </h1>
                <div class="text-sm">
                    Latidude: <span class="font-bold" x-text="currentLat"></span>
                </div>
                <div class="text-sm">
                    Longitude: <span class="font-bold" x-text="currentLng"></span>
                </div>
            </div>
            <div class="p-2 rounded bg-white mt-2">
                <h1 class="text-center font-mono">Near accident location.</h1>
                <template x-for="item in nearby" :key="item.id">
                <div ">
                    <div  class="flex justify-between text-xs p-2 shadow-xl border-2">
                        <div>
                        <span x-text="item.lat">
                        </span>
                        -
                        <span x-text="item.lng">
                        </span>
                        </div>
                        <div x-on:click="showDescription(item.descriptions)">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"><path fill="none" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 1 1-18 0a9 9 0 0 1 18 0"/></svg>   
                        </div>
                    </div>
                </div>
                </template>
            </div>
            <div class="flex justify-between mt-2 text-xs">
                <input x-model="check" type="checkbox">
                <p>
                    Enable Voice Alert?
                </p>
            </div>
        </div>
    </div>
</body>
</html>