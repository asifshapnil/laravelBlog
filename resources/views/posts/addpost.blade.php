@extends('layouts.master')

@section('content')
    {!! Form::open(['action' => ['PostsController@storePosts', $username]]) !!}
      {!! Form::label('title', 'Title') !!}
      {!! Form::text('title', '', ['class' => 'form-control'])!!}
      @if ($errors->has('title'))
        <span class="help-block" style="color:red">{!! $errors->first('title') !!}</span>
      @endif
      {!! Form::label('body', 'Post Body') !!}
      {!! Form::textarea('body', '', ['class' => 'form-control'])!!}
      @if ($errors->has('body'))
        <span class="help-block" style="color:red">{!! $errors->first('body') !!}</span>
      @endif
      {!! Form::label('catagory', 'Post Catagory') !!}
      {!! Form::Label('catagory', 'Add Catagory') !!} <br>
          <select class="form-control" name="catagory">
          @foreach($catagory as $catagory)
          <option value="{{$catagory->id}}">{{$catagory->catagory}}</option>
          @endforeach
          </select>

    <br>
      {!! Form::submit('Submit', ['class' => 'btn btn-block btn-info']) !!}


    {!! Form::close() !!}
@endsection
