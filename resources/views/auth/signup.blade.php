@extends('layouts.master')

@section('content')
    {!! Form::open(['action' => 'AuthController@postSignup']) !!}
      {!! Form::label('email', 'Email') !!}
      {!! Form::email('email', '', ['class' => 'form-control'])!!}
      @if ($errors->has('email'))
        <span class="help-block" style="color:red">{!! $errors->first('email') !!}</span>
      @endif
      {!! Form::label('username', 'Username') !!}
      {!! Form::text('username', '', ['class' => 'form-control'])!!}
      @if ($errors->has('username'))
        <span class="help-block" style="color:red">{!! $errors->first('username') !!}</span>
      @endif
      {!! Form::label('password', 'Password') !!}
      {!! Form::text('password', '', ['class' => 'form-control'])!!}
      @if ($errors->has('password'))
        <span class="help-block" style="color:red">{!! $errors->first('password') !!}</span>
      @endif <br>

      {!! Form::token()!!}
      {!! Form::submit('Submit', ['class' => 'btn btn-block btn-info']) !!}


    {!! Form::close() !!}
@endsection
