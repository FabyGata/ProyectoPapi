@extends('layouts.default')

@section('content')

    <div class="row">

        <div class="col-md-3 principal-buttons-section" >

            <a href="/configuraciones_impuesto"> <button type="button" class="btn btn-default cajas-page-button" >
                    Impuestos
                </button></a>


            <a href="/configuraciones_vendedor"> <button type="button" class="btn btn-default cajas-page-button" >
                    Vendedor
                </button></a>

            <a href="/configuraciones_dosificaciones">  <button type="button" class="btn btn-default cajas-page-button" >
                    Dosificaciones
                </button> </a>

            <a href="/configuraciones_precios"> <button type="button" class="btn btn-default cajas-page-button" >
                    Lista de Precios
                </button> </a>


        </div>

        @yield('configuraciones_content')

    </div>
@stop