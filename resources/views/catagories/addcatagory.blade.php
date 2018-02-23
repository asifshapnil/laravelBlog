@extends('layouts.master')

@section('content')
    {!! Form::open(['action' => ['CatagoryController@storeCatagories']]) !!}
      {!! Form::label('catagory', 'Add Catagory') !!}
      {!! Form::text('catagory_name', '', ['class' => 'form-control'])!!}

    <br>
      {!! Form::submit('Submit', ['class' => 'btn btn-block btn-info']) !!}


    {!! Form::close() !!}
@endsection
