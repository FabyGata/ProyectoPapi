@extends('layouts.default')

@section('content')
<div class="masthead">
    <nav>
        <ul class="nav nav-justified">
            <li><a href="#">Cajas</a></li>
            <li><a href="#">Ventas</a></li>
            <li><a href="#">Configuraciones</a></li>
            <li class="active"><a href="#">Usuarios</a></li>

        </ul>
    </nav>
</div>

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