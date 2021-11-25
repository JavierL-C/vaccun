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
            <h5 class="card-title text-center">Registro Paciente</h5>
            <form class="form-signin">

              <div class="form-label-group">
                <input type="text" id="cedula" class="form-control" placeholder="Cedula" required autofocus>
                <label for="inputUserame">Cedula</label>
              </div>

              <div class="form-label-group">
                <input type="text" id="nombre" class="form-control" placeholder="Nombre" required autofocus>
                <label for="inputUserame">Nombre</label>
              </div>

              <div class="form-label-group">
                <input type="text" id="apellido" class="form-control" placeholder="Apellido" required autofocus>
                <label for="inputUserame">Apellido</label>
              </div>

              <div class="form-label-group">
                <input type="text" id="telefono" class="form-control" placeholder="Teléfono" required autofocus>
                <label for="telefono">Teléfono</label>
              </div>

              <div class="form-label-group">
                <input type="text" id="celular" class="form-control" placeholder="Celular" required autofocus>
                <label for="telefono">Celular</label>
              </div>

              <div class="form-label-group">
                <input type="text" id="email" class="form-control" placeholder="Email" required autofocus>
                <label for="inputUserame">Email</label>
              </div>

              <div class="form-label-group">
                <input type="text" id="direccion" class="form-control" placeholder="Direccion" required autofocus>
                <label for="inputUserame">Direccion</label>
              </div>

              <div class="form-label-group">
                <input type="date" id="inputUserame" class="form-control" placeholder="Fecha" required autofocus>
                <label for="inputUserame">Fecha</label>
              </div>

              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Nuevo usuario Paciente</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@stop