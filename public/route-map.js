
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
    map.addControl(
        new MapboxDirections({
        accessToken: mapboxgl.accessToken
        }),
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