@extends("layouts.app")

@section("content")
<div class="bg-hero">
</div>
<div class="bg-dark">
    <div class="pt-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        {{-- Ciclo per i fumetti --}}
                        @foreach($comics as $comic)
                            <div class="col-md-2 mb-4"> 
                                <a href="{{route('comic.show',['comic'=>$comic->id])}}">
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

                <div class="col-12">
                    <h1 class="text-white text-center">Laravel Comics</h1>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

