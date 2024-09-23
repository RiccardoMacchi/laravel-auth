@extends('layouts.app')

@section('content')
    <div class="container my_wrapper">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Linguaggi</th>
                    <th scope="col">Link a GitHub</th>
                    <th scope="col">Descrizione</th>
                    <th scope="col">Azioni</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($items as $item)
                    <tr>
                        <th>{{ $item->id }}</th>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->lenguages }}</td>
                        <td>{{ $item->git_link }}</td>
                        <td>{{ $item->description }}</td>
                        <td>
                            <a href="{{ route('admin.items.show', ['item' => $item->id]) }}">Dettaglio</a>
                            <form action="{{ route('admin.items.destroy', ['item' => $item->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"
                                    onsubmit="return confirm('Vuoi davvero eliminare {{ $item->title }}?')">DELETE</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
