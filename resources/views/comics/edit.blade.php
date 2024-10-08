@extends('layouts.app')

@section('content')
<div class="bg-dark py-2">
<div class="container">
    <div class="row justify-content-center">
    @if ($errors->any())
        <div class="alert alert-danger">
             <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="col-md-8">
            <div class="card p-4 shadow-sm bg-light border-0 rounded">
                <h2 class="text-center mb-4">Aggiungi un nuovo Fumetto</h2>
                <form action="{{ route('comics.update', ['comic' => $comic->id]) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo</label>
                        <input type="text" name="title" id="title" class="form-control" placeholder="Inserisci il titolo" value="{{ old('title', $comic->title) }}">
                    </div>
                    <div class="mb-3">
                        <label for="thumb" class="form-label">Immagine</label>
                        <input type="text" name="thumb" id="thumb" class="form-control" placeholder="Inserisci URL dell'immagine" value="{{ old('thumb', $comic->thumb) }}">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione</label>
                        <textarea name="description" id="description" class="form-control" placeholder="Inserisci la descrizione">{{ old('description', $comic->description) }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo</label>
                        <input type="text" name="price" id="price" class="form-control" placeholder="Inserisci il prezzo" value="{{ old('price', $comic->price) }}">
                    </div>
                    <div class="mb-3">
                        <label for="sale_date" class="form-label">Data di Vendita</label>
                        <input type="date" name="sale_date" id="sale_date" class="form-control" placeholder="Inserisci la data di vendita" value="{{ old('sale_date', $comic->sale_date) }}">
                    </div>
                    <div class="mb-3">
                        <label for="type" class="form-label">Tipologia</label>
                        <input type="text" name="type" id="type" class="form-control" placeholder="Inserisci la tipologia" value="{{ old('type', $comic->type) }}">
                    </div>
                    <div class="mb-3">
                        <label for="artists" class="form-label">Artisti</label>
                        <textarea name="artists" id="artists" class="form-control" placeholder="Inserisci gli artisti">{{ old('artists', $comic->artists) }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="writers" class="form-label">Scrittori</label>
                        <textarea name="writers" id="writers" class="form-control" placeholder="Inserisci gli scrittori">{{ old('writers', $comic->writers) }}</textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Salva</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
