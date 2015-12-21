@extends('ventas')

@section('ventas_content')

    <div class="col-md-9" >
    <div class="panel panel-default">
        <table class="table">
            <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Descripción</th>
            </tr>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->description}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    </div>

@stop