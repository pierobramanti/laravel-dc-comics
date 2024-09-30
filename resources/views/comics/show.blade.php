@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-4">
            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}" class="img-fluid">
        </div>
        <div class="col-8">
            <h1>{{ $comic['title'] }}</h1>
            <p><sub>{{ $comic['type'] }}</sub></p>
            <p>{{ $comic['description'] }}</p> 
            <h4>{{ $comic['price'] }}</h4> 
            <p>{{ $comic['sale_date'] }}</p> 
        </div>
    </div>
</div>

@endsection