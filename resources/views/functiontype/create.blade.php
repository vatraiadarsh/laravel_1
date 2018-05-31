@extends('layouts.master')
@section('title','Create Function Types')

@section('content')
<div class="jumbotron">
    <div class="page-header">
        <h1>Add Function Types</h1>
    </div>

    <form method ="post" action="{{url('functiontypes')}}">

        <div>
            <label>Name</label>
            <input type="text" name="name" required class=form-control>
        </div>
        {{csrf_field()}}
        <hr>

        <button  type="submit" class="btn btn-success">Save</button>
    <a href="{{url('functiontypes')}}" class="btn btn-danger">Back</a>
    </form>
</div>
@endsection

