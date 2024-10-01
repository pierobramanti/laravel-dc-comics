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
                        <input type="text" name="title" id="title" class="form-control" placeholder="Inserisci il titolo">
                    </div>
                    <div class="mb-3">
                        <label for="thumb" class="form-label">Immagine</label>
                        <input type="text" name="thumb" id="thumb" class="form-control" placeholder="Inserisci URL dell'immagine">
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo</label>
                        <input type="text" name="price" id="price" class="form-control" placeholder="Inserisci il prezzo">
                    </div>
                    <div class="mb-3">
                        <label for="sale_date" class="form-label">Data di Vendita</label>
                        <input type="date" name="sale_date" id="sale_date" class="form-control" placeholder="Inserisci la data di vendita">
                    </div>
                    <div class="mb-3">
                        <label for="type" class="form-label">Tipologia</label>
                        <input type="text" name="type" id="type" class="form-control" placeholder="Inserisci la tipologia">
                    </div>
                    <div class="mb-3">
                        <label for="artist" class="form-label">Artisti</label>
                        <textarea name="artist" id="artist" class="form-control" placeholder="Inserisci gli artisti"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="writers" class="form-label">Scrittori</label>
                        <textarea name="writers" id="writers" class="form-control" placeholder="Inserisci gli scrittori"></textarea>
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

