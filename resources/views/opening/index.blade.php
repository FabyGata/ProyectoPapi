@extends('caja')

@section('caja_content')

    <div class="col-md-9" >
        <div class="panel panel-default">
            <table class="table">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Monto</th>
                </tr>
                <tbody>
                @foreach($openings as $opening)
                    <tr>
                        <td>{{$opening->id}}</td>
                        <td>{{$opening->amount}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@stop