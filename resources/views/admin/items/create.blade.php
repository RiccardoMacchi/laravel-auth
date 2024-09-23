@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('admin.items.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Titolo:</label>
                <input type="text" class="form-control" id="title" name="title"
                    placeholder="Inserisci il titolo del progetto">
            </div>
            <div class="form-group">
                <label for="lenguages">Linguaggi Usati:</label>
                <input type="text" class="form-control" id="lenguages" name="lenguages"
                    placeholder="Inserisci i linguaggi usati">
            </div>
            <div class="form-group">
                <label for="git_link">Link a GitHub:</label>
                <input type="text" class="form-control" id="git_link" name="git_link"
                    placeholder="Inserisci il link a GitHub">
            </div>
            <div class="form-group">
                <label for="description">Descrizione:</label>
                <input type="text" class="form-control" id="description" name="description"
                    placeholder="Inserisci una descrizione">
            </div>
            <div class="form-group">
                <label for="date">Data:</label>
                <input type="date" class="form-control" id="date" name="date" placeholder="Inserisci la data">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
