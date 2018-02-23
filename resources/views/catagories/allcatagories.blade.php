@extends('layouts.master')

@section('content')
    @foreach ($catagory as $catagory)
      <div class="panel panel-info">
        <div class="panel-body">
          <table>

            <tr>
              <td style="width:1000px;"> <a href="/catagory/{{$catagory->id}}">{{$catagory->catagory}}</a></td>
              <td  style="width:200px;"><a href="/edit/catagory/{{$catagory->id}}">edit</a> </td>
              <td  style="width:200px;"><a href="/delete/catagory/{{$catagory->id}}">delete</a> </td>

            </tr>
          </table>

        </div>
      </div>
    @endforeach
@endsection
