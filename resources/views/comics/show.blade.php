@extends('layouts.app')

@section('content')
<div class="bg-dark">
    <div class="container py-5">
        <div class="row">
            <div class="col-md-4 d-flex align-items-center justify-content-center">
                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}" class="img-fluid rounded shadow">
            </div>
            <div class="col-md-8">
                <h1 class="display-5 text-white">{{ $comic['title'] }}</h1>
                <p class="text-muted"><sub class="text-white">{{ $comic['type'] }}</sub></p>
                <p class="text-white">{{ $comic['description'] }}</p> 

                <h4 class="fw-bold text-primary">Price: {{ $comic['price'] }}$</h4> 
                <p class="text-muted">Sale Date: {{ $comic['sale_date'] }}</p>
            </div>
        </div>
    </div>
</div>


@endsection