@extends("layouts.app")

@section("content")
<div class="bg-hero">
</div>
<div class="bg-dark">
    <div class="pt-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-2">
                    <a href="{{ route('comics.create') }}" class="btn btn-primary text-white text-uppercase">
                        Aggiungi Fumetto
                    </a>
                </div>
                <div class="col-12 mt-2">
                    <div class="row">
                        {{-- Ciclo per i fumetti --}}
                        @foreach($comics as $comic)
                            <div class="col-md-2 mb-4"> 
                                <a href="{{ route('comics.show', ['comic' => $comic->id]) }}">
                                    <div class="comic text-center">
                                        <div class="image-container"> 
                                            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}" class="img-fluid">
                                        </div>
                                        <h4 class="fs-5 text-white mt-2">{{ $comic['title'] }}</h4>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


