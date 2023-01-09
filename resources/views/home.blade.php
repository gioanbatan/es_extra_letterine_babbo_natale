@extends('layouts.admin')

@section('title', 'Letterine a Babbo Natale')

@section('access')
    <a href="{{ route('letters.index') }}" class="ms_btn-header">
        Admin Tools
    </a>
@endsection

@section('content')
    <div class="container">
        <h2>Prova
        </h2>

    </div>
@endsection
