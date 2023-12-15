@extends('layouts.app')

@section('content')
<div class="container">
    <script src='https://api.mapbox.com/mapbox-gl-js/v3.0.0/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v3.0.0/mapbox-gl.css' rel='stylesheet' />
    <a href="{{route('reports.index')}}" class="btn btn-link">
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path fill="currentColor" d="m7.825 13l5.6 5.6L12 20l-8-8l8-8l1.425 1.4l-5.6 5.6H20v2H7.825Z"/></svg>
        <span>
            Back to Report list
        </span>
    </a>
    <div class="card">
        <div class="card-header">
            <div >
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 24 24"><path fill="currentColor" d="M3 21v-2h18v2H3Zm0-4v-2h12v2H3Zm0-4v-2h18v2H3Zm0-4V7h12v2H3Zm0-4V3h18v2H3Z"/></svg>
                    <span>New Report</span>
                </div>
            </div>
        </div>
        
        <div id='map' style='width: 100%; height:400px'></div>
        <div class="card-body"
        x-data="{
            lat: null, 
            lng: null, 
        }"
        x-init="
            mapboxgl.accessToken = 'pk.eyJ1IjoiZWxlemVya3ciLCJhIjoiY2wxNHE4d2E5MHRvMTNkczA1anltY3lybSJ9.T2bcLRSnEZB_LNGM7Qs5Mw';

            const renderMap = (latArg, lngArg) => {

                lat = latArg
                lng = lngArg

                const maxBounds = [
                    [ 120.463, 14.9137,], 
                    [120.5273, 14.9918], 
                ]

                map = new mapboxgl.Map({
                    container: 'map', // container ID
                    style: 'mapbox://styles/mapbox/streets-v11', // style URL
                    center: [lngArg, latArg], // starting position [lngArg, latArg]
                    zoom: 12, // starting zoom
                    maxBounds, 
                });
            
                let markerOptions = {
                    draggable:true, 
                }
                
                marker = new mapboxgl.Marker(markerOptions)
                    .setLngLat([lngArg, latArg]).addTo(map); 
            
                // marker events 
                marker.on('dragend', function (e) {
                    let lngLat = e.target.getLngLat(); 
                    console.log(lngLat.lng); 
                    lat = lngLat.lat; 
                    lng = lngLat.lng; 
                })
            }
            


            const successCurrentPositionCB = ({coords}) => {
                console.log(coords); 
                let {latitude, longitude} = coords; 
                renderMap(latitude, longitude)
            }

            // getting location 
            navigator.geolocation.watchPosition(successCurrentPositionCB, (error) => {
                console.log('error -> ', error)
            })
        "
        >
            <form action="{{route('reports.store')}}" method="POST" enctype="multipart/form-data">
                @csrf 
                <div class="row">
                    <div class="col">
                        <div class="my-3">
                            <label for="" class="form-label">Latitude</label>
                            <input name="lat" type="text" class="form-control" readonly x-bind:value="lat">
                        </div>
                    </div>
                    <div class="col">
                        <div class="my-3">
                            <label for="" class="form-label">Longitude</label>
                            <input name="lng" type="text" class="form-control" readonly x-bind:value="lng">
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Report Type (required)</label>
                    <select class="form-select" name="type" id="" required>
                        @foreach (\App\Models\ReportType::get() as $item)
                            <option value="{{$item->type}}">{{$item->type}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Description (required)</label>
                    <textarea required name="descriptions" class="form-control" placeholder="Aa"></textarea>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="" class="form-label">Attach Image (maximum of 5mb only.)</label>
                        <input class="d-block" type="file" name="image" accept="image/*">
                    </div>
                    <div class="col">
                        <label for="" class="form-label">Attach Video (maximum of 5mb only.)</label>
                        <input class="d-block" type="file" name="video" accept="video/*">
                    </div>
                </div>
                <button class="btn w-full btn-primary mt-3 w-100">
                    <span style="display:inline-block; transform: rotate(-45deg)">
                        <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 24 24"><path fill="currentColor" d="M4.4 19.425q-.5.2-.95-.088T3 18.5V14l8-2l-8-2V5.5q0-.55.45-.837t.95-.088l15.4 6.5q.625.275.625.925t-.625.925l-15.4 6.5Z"/></svg>
                    </span>
                    <span>
                        SUBMIT
                    </span>
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
