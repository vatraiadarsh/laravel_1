@extends('layouts.master')
@section('title','Create Function Types')

@section('content')
<div class="jumbotron">
    <div class="page-header">
        <h1>Add Function Types</h1>
    </div>

    <form method ="post" action="{{url('functiontypes/'.$type->id)}}">

        <div>
            <label>Name</label>
            <input type="text" name="name" required class=form-control value="{{$type->name}}">
        </div>
        {{csrf_field()}}
        <input type="hidden" name="id" value="{{$type->id}}"/>
        <input type="hidden" name="_method" value="PUT"/>
       <!--NOTE: the PUT method is for edit-->
        <hr>
        <button type="submit" class="btn btn-success">Save</button>
    <a href="{{url('functiontypes')}}" class="btn btn-danger">Back</a>
    </form>
</div>
@endsection

