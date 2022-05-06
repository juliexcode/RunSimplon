@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Inscrivez-vous') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row g-3">
                            <div class="col">
                                <label for="">Nom:</label>
                                <input id="name" type="text" placeholder="Nom..." class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            </div>
                            <div class="col">
                                <label for="">Prenom:</label>
                                <input type="text" name="prenom" class="form-control" placeholder="Prenom..." aria-label="Prenom">
                            </div>
                        </div>
                        <div class="row g-3">
                            <div class="col">
                                <label for="">E-mail:</label>
                                <input id="email" type="email" placeholder="E-mail..." class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                            </div>
                            <div class="col">
                                <label for="">N° de téléphone:</label>
                                <input type="number" name="numero" placeholder="N° de téléphone..." class="form-control" placeholder="tel..." aria-label="tel">
                            </div>
                            <div class="row g-3">
                                <div class="col">
                                    <label for="">N° d’immatriculation:</label>
                                    <input type="text" name="matricule" placeholder="N° d’immatriculation..." class="form-control" placeholder="Nom..." aria-label="Nom">
                                </div>
                                <div class="col">
                                    <label for="">Type/modèle du véhicule:</label>
                                    <input type="text" name="modele" placeholder="Type/modèle du véhicule..." class="form-control" placeholder="Prenom..." aria-label="Prenom">
                                </div>
                                <div class="row g-3">
                                    <div class="col">
                                        <label for="">Mot de passe:</label>
                                        <input id="password" type="password" placeholder="Mot de passe..." class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                    </div>
                                    <div class="col">
                                        <label for="">Confirmation du mot de passe:</label>
                                        <input id="password-confirm" type="password" placeholder="Confirmation du mot de passe..." class="form-control" name="password_confirmation" required autocomplete="new-password">
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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<style>
    .card-header {
        text-align: center;
        font-size: 48px;
    }

    .col{
        font-size: 16px;
    }
</style>