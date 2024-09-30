@extends("layouts.app")


@section("content")
<div class="bg-hero">
</div>
<div class="bg-dark">
<div class="pt-5">
    <div class="container">
        <div class="row">
            <div class="col-12">

            <h1>Debug: La view è caricata correttamente</h1>

            @dd($comics)  {{-- Questo mostrerà il contenuto di $comics --}}

                @foreach($comics as $comic)
                    <div class="comic">
                        <div class="thumb">
                            <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                            <h4 class="text-uppercase">{{$comic['title']}}</h4>
                        </div>
                    </div>
                @endforeach
            </div>
          
            
            <div class="col-12">
                <h1 class="text-white text-center">laravel comics</h1>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
