@extends('layouts.app')

@section('content')
<div class="container">

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin=""/>
<script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js" integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew==" crossorigin=""></script>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Elegir cinema</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="input-group mb-3">
                        <select class="custom-select" id="inputGroupSelect02">
                          <option selected>Elegir...</option>
                          <option value="1">City A</option>
                          <option value="2">City B</option>
                          <option value="3">City C</option>
                        </select>
                        <div class="input-group-append">
                          <label class="input-group-text" for="inputGroupSelect02">Ciudad</label>
                        </div>
                      </div>



                      <div class="input-group mb-3">
                        <select class="custom-select" id="inputGroupSelect02">
                          <option selected>Elegir...</option>
                          <option value="1">Cine A</option>
                          <option value="2">Cine B</option>
                          <option value="3">Cine C</option>
                        </select>
                        <div class="input-group-append">
                          <label class="input-group-text" for="inputGroupSelect02">Cinema</label>
                        </div>
                      </div>

                      <a href="{{URL::to('golistpeli')}}" class="btn btn-primary">Elegir</a>

                </div>

                 <!-- Area Map -->
                <div class="row justify-content-center">
                    <div class="card col-9 " id="mapid" style="width: 600px; height: 400px;">
                    </div>
                </div>
                <!-- Area Scrip map -->
                <script>
                    var mymap = L.map('mapid').setView([51.505, -0.09], 13);

                    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
                        maxZoom: 18,
                        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                            '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                            'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                        id: 'mapbox/streets-v11',
                        tileSize: 512,
                        zoomOffset: -1
                    }).addTo(mymap);
                </script>
            </div>
        </div>

    </div>

</div>

@endsection
