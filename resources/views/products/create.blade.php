@extends('ventas')

@section('ventas_content')

    <div class="col-md-9" >

        {!! Form::open(['route' => 'products.store']) !!}

        {!! Form::label('name', 'Nombre', ['class' => '']) !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}

        {!! Form::label('description', 'Descripción', ['class' => '']) !!}
        {!! Form::text('description', null, ['class' => 'form-control']) !!}

        {!! Form::submit('Añadir producto y lenguita', ['class' => 'btn btn-default']) !!}

        {!! Form::close() !!}

    </div>

@stop