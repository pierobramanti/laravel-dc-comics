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
                <p class="text-muted text-white">Sale Date: {{ $comic['sale_date'] ?? 'Not available' }}</p>
                <p class="fw-bold text-white"><strong>Artists: </strong>{{ $comic['artists'] }}.</p>
                <p class="fw-bold text-white"><strong>Writers: </strong>{{ $comic['writers'] }}.</p>
                <a href="{{ route('comics.edit', $comic['id']) }}" class="btn btn-warning mt-3">Edit</a>
                <form action="{{ route('comics.destroy', $comic['id']) }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger mt-3" onclick="return confirm('Sei sicuro di voler cancellare questo fumetto?')">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection