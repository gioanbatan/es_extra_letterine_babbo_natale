@extends('layouts.admin')

@section('title', 'Letterine - Admin - Nuova letterina')

@section('access')
    <a href="{{ route('home') }}" role="button" class="ms_btn-header">
        Esci da Admin tools
    </a>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <form action="{{ route('letters.store') }}" method="POST">
                    @csrf

                    <div class="form-group mb-4">
                        <label for="name">Nome:</label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>

                    <div class="form-group mb-4">
                        <label for="lastname">Cognome:</label>
                        <input type="text" name="lastname" id="lastname" class="form-control">
                    </div>

                    <div class="form-group mb-4">
                        <label for="address">Indirizzo:</label>
                        <input type="text" name="address" id="address" class="form-control">
                    </div>

                    <div class="form-group mb-4">
                        <label for="city">Città:</label>
                        <input type="text" name="city" id="city" class="form-control">
                    </div>

                    <div class="form-group mb-4">
                        <label for="arrive_date">Data di arrivo:</label>
                        <input type="date" name="arrive_date" id="arrive_date" class="form-control">
                    </div>

                    <div class="form-group mb-4">
                        <label for="gift">Regalo:</label>
                        <input type="text" name="gift" id="gift" class="form-control">
                    </div>

                    <div class="form-group mb-4">
                        <label for="mail_text d-block">Testo della letterina:</label>
                        <textarea name="mail_text" id="mail_text" rows="10" class="form-control"></textarea>
                    </div>

                    <div class="form-group mb-4">
                        <label for="rating">Rating:</label>
                        <select name="rating" id="rating" class="form-select">
                            <option value="" hidden selected>Seleziona un voto</option>

                            @for ($i = 1; $i < 6; $i++)
                                <option value={{ $i }}>{{ $i }}</option>
                            @endfor
                        </select>
                    </div>

                    <div class="form-group mb-4">
                        <label for="delivered" class="pe-3">Consegnato?</label>
                        <input type="checkbox" name="delivered" id="delivered" class="form-check-input">
                    </div>

                    <button type="submit" class="btn btn-primary">Invia</button>

                    <button type="reset" class="btn btn-secondary">Svuota campi</button>
                </form>
            </div>
        </div>
    </div>
@endsection
