@extends('layouts.default')

@section('content')

<div class="row">

    <div class="col-md-3 principal-buttons-section" >
        <a href="/users_crear_usuario"> <button type="button" class="btn btn-default cajas-page-button" >
            Crear Usuario
        </button></a>
        <br>
        <a href="/users_listar_usuarios">  <button type="button" class="btn btn-default cajas-page-button" >
            Listar Usuarios
        </button> </a>

    </div>

    @yield('users_content')

</div>
@stop