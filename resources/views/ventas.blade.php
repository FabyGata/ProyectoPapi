@extends('layouts.default')

@section('content')
    <div class="row">

        <div class="col-md-3 principal-buttons-section" >
            <a href="/products"> <button type="button" class="btn btn-default cajas-page-button" >
                    Lista de Productos
                </button></a>
            <br>
            <a href="/products/create">  <button type="button" class="btn btn-default cajas-page-button" >
                    Añadir Producto
                </button> </a>
            <br>
        </div>

        @yield('ventas_content')

    </div>
@stop