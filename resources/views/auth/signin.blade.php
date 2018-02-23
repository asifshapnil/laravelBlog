@extends('layouts.master')

@section('content')
  @if(Auth::check())
    <div class="alert alert-danger">
      You are already logged in
    </div>
  @else
  {!! Form::open(['action' => 'AuthController@postSignin', 'class' => 'form-group']) !!}
      {!! Form::label('email', 'email') !!}
      {!! Form::email('email', '', ['class' => 'form-control'])!!}

      {!! Form::label('password', 'password') !!}
      {!! Form::text('password', '', ['class' => 'form-control'])!!}

   <br>
      {!! Form::token()!!}
      {!! Form::submit('Submit', ['class' => 'btn btn-block btn-info'])!!}
  {!! Form::close() !!}
@endif

@endsection
