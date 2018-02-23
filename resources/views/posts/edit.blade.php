@extends('layouts.master')

@section('content')
    {!! Form::open(['action' => ['PostsController@updatePost', $post->id]]) !!}
      {!! Form::label('title', 'Title') !!}
      {!! Form::text('title', $post->title, ['class' => 'form-control'])!!}
      @if ($errors->has('title'))
        <span class="help-block" style="color:red">{!! $errors->first('title') !!}</span>
      @endif
      {!! Form::label('body', 'Post Body') !!}
      {!! Form::textarea('body', $post->body, ['class' => 'form-control'])!!}
      @if ($errors->has('body'))
        <span class="help-block" style="color:red">{!! $errors->first('body') !!}</span>
      @endif
    <br>
      {!! Form::submit('Submit', ['class' => 'btn btn-block btn-info']) !!}


    {!! Form::close() !!}
@endsection
