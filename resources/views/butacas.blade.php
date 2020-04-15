@extends('layouts.app')

@section('content')
<div class="container">

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin=""/>
<script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js" integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew==" crossorigin=""></script>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Butacas</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="input-group mb-3 ">
                      <table class="table">
                          <thead>
                            <tr>
                              <th scope="col">Letra</th>
                              <th scope="col">#1</th>
                              <th scope="col">#2</th>
                              <th scope="col">#3</th>
                              <th scope="col">#4</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row">A</th>
                              <td><a href="#" class="btn btn-primary">Elegir</a></td>
                              <td><a href="#" class="btn btn-primary">Elegir</a></td>
                              <td><a href="#" class="btn btn-primary">Elegir</a></td>
                              <td><a href="#" class="btn btn-primary">Elegir</a></td>
    
                            </tr>
                            <tr>
                              <th scope="row">B</th>
                              <td><a href="#" class="btn btn-primary">Elegir</a></td>
                              <td><a href="#" class="btn btn-primary">Elegir</a></td>
                              <td><a href="#" class="btn btn-primary">Elegir</a></td>
                              <td><a href="#" class="btn btn-primary">Elegir</a></td>
  
                            </tr>
                            <tr>

                              <th scope="row">C</th>
                              <td><a href="#" class="btn btn-primary">Elegir</a></td>
                              <td><a href="#" class="btn btn-primary">Elegir</a></td>
                              <td><a href="#" class="btn btn-primary">Elegir</a></td>
                              <td><a href="#" class="btn btn-primary">Elegir</a></td>
  
                            </tr>
                          </tbody>
                        </table>
                    <!-- Fin table -->

                    <div class="input-group mb-3">
                      <select class="custom-select" id="inputGroupSelect02">
                        <option selected>A#1</option>
                        <option value="1">A#2</option>
                        <option value="2">A#3</option>
                        <option value="3">A#4</option>
                        <option value="4">B#1</option>
                        <option value="5">B#2</option>
                        <option value="6">B#3</option>
                        <option value="7">B#4</option>
                        <option value="8">C#1</option>
                        <option value="9">C#2</option>
                        <option value="10">C#3</option>
                        <option value="11">C#4</option>
                      </select>
                      <div class="input-group-append">
                        <label class="input-group-text" for="inputGroupSelect02">Butaca</label>
                      </div>
                    </div>
  
              </div>



            </div>
        </div>

    </div>
    
</div>

@endsection
