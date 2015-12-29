@extends('layouts.default')

@section('content')
<div class="row">

    <div class="col-md-3 principal-buttons-section" >

        <a href="/opening"> <button type="button" class="btn btn-default cajas-page-button" >
                Listar aperturas
            </button></a>
        <br>

        <a href="/opening/create"> <button type="button" class="btn btn-default cajas-page-button" >
                Crear apertura
            </button></a>
        <br>
        <a href="/caja_depositos">  <button type="button" class="btn btn-default cajas-page-button" >
            Depositos
        </button> </a>
        <br>
        <a href="/caja_arqueo"> <button type="button" class="btn btn-default cajas-page-button" >
            Arqueo
        </button> </a>
        <br>
        <a href="caja_cierre">  <button type="button" class="btn btn-default cajas-page-button" >
            Cierre
        </button> </a>


    </div>

    @yield('caja_content')

</div>
@stop