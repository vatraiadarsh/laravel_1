@extends ('layouts.master')
@section('title','Homepage')


@section('content')
    <h1>Hello {{$name}} </h1>

    @foreach($colors as $c)
        @if ($c!='Red')
            <ol><h2>{{$c}}</h2></ol>
        @endif
    @endforeach

@endsection