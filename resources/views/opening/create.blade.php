@extends('caja')

@section('caja_content')


    <div class="col-md-9" >

        {!! Form::open(['route' => 'opening.store']) !!}

        {!! Form::label('amount', 'Monto', ['class' => '']) !!}
        {!! Form::text('amount', null, ['class' => 'form-control']) !!}

        {!! Form::submit('Añadir Apertura', ['class' => 'btn btn-default']) !!}

        {!! Form::close() !!}


    </div>
@stop