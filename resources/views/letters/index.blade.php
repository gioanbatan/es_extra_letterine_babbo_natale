@extends('layouts.app')

@section('title', 'Letterine - Admin - Lista letterine')

@section('actions')
    <a href="{{ route('home') }}" class="btn btn-primary">
        Esci da Admin tools
    </a>
@endsection

@section('content')
    <div class="container">
        <ul>
            @foreach ($letters as $letter)
                <li>
                    {{ $letter->name }}
                    {{ $letter->lastname }}
                    {{ $letter->rating }}
                    <br>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
