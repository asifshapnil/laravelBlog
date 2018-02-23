@extends('layouts.master')

@section('content')
    {!! Form::open(['action' => ['ProfileController@update',$user->username]]) !!}
      {!! Form::label('email', 'Email') !!}
      {!! Form::email('email', $user->email, ['class' => 'form-control'])!!}

      {!! Form::label('username', 'Username') !!}
      {!! Form::text('username', $user->username, ['class' => 'form-control'])!!}


      {!! Form::label('firstname', 'First Name') !!}
      {!! Form::text('firstname', $user->first_name, ['class' => 'form-control'])!!}

      {!! Form::label('lastname', 'Last Name') !!}
      {!! Form::text('lastname', $user->last_name, ['class' => 'form-control'])!!}
<br>
      {!! Form::submit('Submit', ['class' => 'btn btn-block btn-info']) !!}


    {!! Form::close() !!}
@endsection
