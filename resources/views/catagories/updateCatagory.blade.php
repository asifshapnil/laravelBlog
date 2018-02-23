@extends('layouts.master')

@section('content')
  {!! Form::open(['action' => ['CatagoryController@updateCatagories', $catagory->id]]) !!}
    {!! Form::label('catagory', 'Edit Catagory') !!}
    {!! Form::text('catagory_name', $catagory->catagory, ['class' => 'form-control'])!!}

  <br>
    {!! Form::submit('Save', ['class' => 'btn btn-block btn-info']) !!}


  {!! Form::close() !!}
@endsection
