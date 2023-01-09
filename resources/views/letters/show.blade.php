@extends('layouts.admin')

@section('title', 'Letterina di ' . $letter->name . ' ' . $letter->lastname)

@section('content')
    <div class="container">
        <h2>
            {{ $letter->name }} {{ $letter->lastname }}
        </h2>

        <p>
            {{ $letter->address }}
            <br>
            {{ $letter->city }}
        </p>

        <h4>{{ $letter->gift }}</h4>
        <p>{{ $letter->mail_text }}</p>

        <h2>Rating: {{ $letter->rating }}</h2>
        <h4>Data di arrivo: {{ $letter->arrive_date }}</h4>

        <h2>
            @if ($letter->delivered === true)
                <i class="fa-solid fa-check text-primary"></i>
                <span>Consegnato</span>
            @else
                <i class="fa-solid fa-xmark text-danger"></i>
                <span>Non Consegnato</span>
            @endif
        </h2>

        <a class="display-3 text-warning" href="{{ route('letters.index') }}">
            <i class="fa-solid fa-circle-left"></i>
        </a>
    </div>
@endsection
