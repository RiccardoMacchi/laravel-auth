@extends('layouts.app')

@section('content')
    <div class="container">
        <ul>
            @foreach ($items as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ul>
    </div>
@endsection
