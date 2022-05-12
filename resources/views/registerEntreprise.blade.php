@extends('layouts.app')
@section('content')
<h1>ENTREPRISE</h1>
<form method="POST" action="{{route('admin.entreprise.log')}}">
    @csrf

    <div class="row g-3">

        <div class="col">
            <label for="">Prenom:</label>
            <input id="name" type="text" placeholder="Nom..." class="form-control " name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
        </div>
        <div class="col">
            <label for="">Nom:</label>
            <input type="text" name="prenom" class="form-control" placeholder="Prenom..." aria-label="Prenom">
        </div>
    </div>
    <div class="row g-3">
        <div class="col">
            <label for="">Nom de l'entreprise:</label>
            <input id="entreprise" type="text" placeholder="Nom de l'entreprise..." class="form-control " name="entreprise" value="{{ old('entreprise') }}" required autofocus>
        </div>
    </div>
    <div class="row g-3">
        <div class="col">
            <label for="">Adresse de l'entreprise:</label>
            <input id="adresse" type="text" placeholder="Adresse de l'entreprise..." class="form-control " name="adresse" value="{{ old('adresse') }}" required autofocus>
        </div>
    </div>
    <div class="row g-3">
        <div class="col">
            <label for="">E-mail:</label>
            <input id="email" type="email" placeholder="E-mail..." class="form-control" name="email" value="{{ old('email') }}" required autocomplete="email">
        </div>
        <div class="col">
            <label for="">N° de téléphone:</label>
            <input type="number" name="numero" placeholder="N° de téléphone..." class="form-control" placeholder="tel..." aria-label="tel">
        </div>

        <div class="row g-3">
            <div class="col">
                <label for="">Mot de passe:</label>
                <input id="password" type="password" placeholder="Mot de passe..." class="form-control " name="password" required autocomplete="new-password">
            </div>
            <div class="col">
                <label for="">Confirmation du mot de passe:</label>
                <input id="password-confirm" type="password" placeholder="Confirmation du mot de passe..." class="form-control" name="confirm" required autocomplete="new-password">
            </div>




        </div>
    </div>


    <div class="row mb-0">
        <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-primary">
                {{ __('Register') }}
            </button>
        </div>
    </div>
</form>
@endsection