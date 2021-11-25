@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<div class="container">
    <div class="row">
      <div class="col-lg-10 col-xl-9 mx-auto">
        <div class="card card-signin flex-row my-5">
          <div class="card-img-left d-none d-md-flex">
          </div>
          <div class="card-body">
            <h5 class="card-title text-center">Registro De Vacunas</h5>
            <form class="form-signin">

              <div class="form-label-group">
                <input type="text" id="nombre" class="form-control" placeholder="Nombre de la vacuna" required autofocus>
                <label for="inputUserame">Nombre</label>
              </div>

              <div class="form-label-group">
                <input type="text" id="laboratorio" class="form-control" placeholder="Laboratorio" required autofocus>
                <label for="inputUserame">Laboratorio</label>
              </div>

              <div class="form-label-group">
                <input type="text" id="esquema" class="form-control" placeholder="Esquema" required autofocus>
                <label for="inputUserame">Tipo de esquema de dosis</label>
              </div>

              <div class="form-label-group">
                <input type="text" id="cadenaFrio" class="form-control" placeholder="Cadena de Frio" required autofocus>
                <label for="telefono">Cadena de Frio</label>
              </div>

              <div class="form-label-group">
                <input type="text" id="tipoVacuna" class="form-control" placeholder="Tipo de vacuna" required autofocus>
                <label for="telefono">Tipo de Vacuna</label>
              </div>

              <div class="form-label-group">
                <input type="text" id="cantidad" class="form-control" placeholder="Cantidad de vacunas" required autofocus>
                <label for="inputUserame">Cantidad</label>
              </div>

              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Nueva Vacuna</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@stop