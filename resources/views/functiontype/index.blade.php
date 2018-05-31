@extends('layouts.master')
@section('title','Function Types')


@section('content')
<div class="page-header">
    <h1>Function Types</h1>
</div>

    <div class="page-header">
        <a href="{{url('functiontypes/create')}}" class="btn btn-primary btn-lg btn-block">Add</a>
    </div>
        <hr color="#cccc">
<table class="table">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Action</th>
    </tr>
    @foreach($types as $type)
        <tr>
            <td>{{$type->id}}</td>
            <td>{{$type->name}}</td>
            <td>
                   
            <form method="post" action=" {{url('functiontypes/'.$type->id)}} ">
                {{csrf_field()}}               
              
                <input type="hidden" name="_method" value="DELETE">
                    <a  class="btn btn-success btn-sm" href="{{url('functiontypes/'.$type->id.'/edit')}}">Edit</a>
                     <input class="btn btn-danger btn-sm"  type="Submit" value="Delete" onclick="return confirm('Do you really want to delete'?)">
            

            </form>
            </td>
        </tr>
    @endforeach
</table>

@endsection