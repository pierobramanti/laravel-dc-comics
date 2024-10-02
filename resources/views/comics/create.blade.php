@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card p-4 shadow-sm bg-light border-0 rounded">
                <h2 class="text-center mb-4">Aggiungi un nuovo Fumetto</h2>
                <form action="{{ route('comics.store') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo</label>
                        <input type="text" name="title" id="title" class="form-control" placeholder="Inserisci il titolo" value="{{ old('title') }}">
                        @error('title')
                            <span class="text-danger">Il titolo è obbligatorio.</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="thumb" class="form-label">Immagine</label>
                        <input type="text" name="thumb" id="thumb" class="form-control" placeholder="Inserisci URL dell'immagine" value="{{ old('thumb') }}">
                        @error('thumb')
                            <span class="text-danger">L'immagine è obbligatoria.</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione</label>
                        <textarea name="description" id="description" class="form-control" placeholder="Inserisci la descrizione">{{ old('description') }}</textarea>
                        @error('description')
                            <span class="text-danger">La descrizione è obbligatoria.</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo</label>
                        <input type="text" name="price" id="price" class="form-control" placeholder="Inserisci il prezzo" value="{{ old('price') }}">
                        @error('price')
                            <span class="text-danger">Il prezzo è obbligatorio.</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="sale_date" class="form-label">Data di Vendita</label>
                        <input type="date" name="sale_date" id="sale_date" class="form-control" placeholder="Inserisci la data di vendita" value="{{ old('sale_date') }}">
                        @error('sale_date')
                            <span class="text-danger">La data di vendita è obbligatoria.</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="type" class="form-label">Tipologia</label>
                        <input type="text" name="type" id="type" class="form-control" placeholder="Inserisci la tipologia" value="{{ old('type') }}">
                        @error('type')
                            <span class="text-danger">La tipologia è obbligatoria.</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="artists" class="form-label">Artisti</label>
                        <textarea name="artists" id="artists" class="form-control" placeholder="Inserisci gli artisti">{{ old('artists') }}</textarea>
                        @error('artists')
                            <span class="text-danger">Gli artisti sono obbligatori.</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="writers" class="form-label">Scrittori</label>
                        <textarea name="writers" id="writers" class="form-control" placeholder="Inserisci gli scrittori">{{ old('writers') }}</textarea>
                        @error('writers')
                            <span class="text-danger">Gli scrittori sono obbligatori.</span>
                        @enderror
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Salva</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection


