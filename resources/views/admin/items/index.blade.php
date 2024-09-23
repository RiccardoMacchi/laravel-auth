@extends('layouts.app')

@section('content')
    <div class="container">
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
                            <a href="{{ route('admin.details', ['id' => $item->id]) }}">Dettaglio</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
