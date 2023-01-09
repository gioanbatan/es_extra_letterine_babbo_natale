@extends('layouts.admin')

@section('title', 'Letterine - Admin - Lista letterine')

@section('access')
    <a href="{{ route('home') }}" role="button" class="ms_btn-header">
        Esci da Admin tools
    </a>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Cognome</th>
                            <th class="text-center" scope="col">Rating</th>
                            <th class="text-center" scope="col">Consegnato?</th>
                            <th scope="col">Azioni</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($letters as $letter)
                            <tr>
                                <th scope="row">{{ $letter->id }}</th>
                                <td>{{ $letter->name }}</td>
                                <td>{{ $letter->lastname }}</td>
                                <td class="text-center">{{ $letter->rating }}</td>
                                <td class="text-center">{{ $letter->delivered }}</td>
                                <td>
                                    <a class="btn btn-primary" href="{{ route('letters.create') }}">
                                        <i class="fa-solid fa-plus"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
