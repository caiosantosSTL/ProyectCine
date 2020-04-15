@extends('layouts.app')

@section('content')
<div class="container">

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin=""/>
<script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js" integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew==" crossorigin=""></script>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Salas y horas</div>

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
                              <th scope="col">#</th>
                              <th scope="col">Sala</th>
                              <th scope="col">Horario</th>
                              <th scope="col">elegir</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row">1</th>
                              <td>Sala A</td>
                              <td>
                                  <!--drop-->
                                  <div class="input-group mb-3">
                                      <select class="custom-select" id="inputGroupSelect02">
                                        <option selected>11:30</option>
                                        <option value="1">12:00</option>
                                        <option value="2">14:00</option>
                                        <option value="3">15:00</option>
                                      </select>
                                      <div class="input-group-append">
                                        <label class="input-group-text" for="inputGroupSelect02">Horarios</label>
                                      </div>
                                    </div>
  
                              </td>
                              <td><a href="{{URL::to('gobutacas')}}" class="btn btn-primary">Ver</a></td>
    
                            </tr>
                            <tr>
                              <th scope="row">2</th>
                              <td>Sala B</td>
                              <td>
                                  <!--drop-->
                                  <div class="input-group mb-3">
                                      <select class="custom-select" id="inputGroupSelect02">
                                        <option selected>11:30</option>
                                        <option value="1">12:00</option>
                                        <option value="2">14:00</option>
                                        <option value="3">15:00</option>
                                      </select>
                                      <div class="input-group-append">
                                        <label class="input-group-text" for="inputGroupSelect02">Horarios</label>
                                      </div>
                                    </div>
  
                              </td>
                              <td><a href="#" class="btn btn-primary">Ver</a></td>
  
                            </tr>
                            <tr>
                              <th scope="row">3</th>
                              <td>Sala C</td>
                              <td>
                                  <!--drop-->
                                  <div class="input-group mb-3">
                                      <select class="custom-select" id="inputGroupSelect02">
                                        <option selected>11:30</option>
                                        <option value="1">12:00</option>
                                        <option value="2">14:00</option>
                                        <option value="3">15:00</option>
                                      </select>
                                      <div class="input-group-append">
                                        <label class="input-group-text" for="inputGroupSelect02">Horarios</label>
                                      </div>
                                    </div>
  
                              </td>
                              <td><a href="#" class="btn btn-primary">Ver</a></td>
  
                            </tr>
                          </tbody>
                        </table>
                    
  
              </div>



            </div>
        </div>

    </div>
    
</div>

@endsection
