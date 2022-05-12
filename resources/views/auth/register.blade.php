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
                        <div class="container px-4">
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
                        </div>
                        <div id="prems" class="container px-4">
                            <div class="row g-3">
                                <div class="col">
                                    <label for="">E-mail:</label>
                                    <input id="email" type="email" placeholder="E-mail..." class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                </div>
                                <div class="col">
                                    <label for="">N° de téléphone:</label>
                                    <input type="number" name="numero" placeholder="N° de téléphone..." class="form-control" placeholder="tel..." aria-label="tel">
                                </div>
                            </div>
                        </div>
                        <div id="deum" class="container px-4">
                            <div class="row g-3">
                                <div class="col">
                                    <label for="">N° d’immatriculation:</label>
                                    <input type="text" name="matricule" placeholder="N° d’immatriculation..." class="form-control" placeholder="Nom..." aria-label="Nom">
                                </div>
                                <div class="col">
                                    <label for="">Type/modèle du véhicule:</label>
                                    <input type="text" name="modele" placeholder="Type/modèle du véhicule..." class="form-control" placeholder="Prenom..." aria-label="Prenom">
                                </div>
                            </div>
                        </div>
                        <div id="trim" class="container px-4">
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




                </div>
                <div class="row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button id="inscrire" type="submit" class="btn btn-primary">
                            s'inscrire
                        </button>

                    </div>
                </div>
                <p id="ici">Si vous aviez déjà un compte cliquer <a href="{{ route('login') }}">cliquez ici</a></p>
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

    .col {
        font-size: 16px;
    }

    .form-control {
        width: 150px;
    }



    @import url('https://fonts.googleapis.com/css?family=Montserrat:600&display=swap');

    #inscrire {
        margin: 0;
        padding: 0;
        display: flex;
        height: 100vh;
        align-items: center;
        justify-content: center;
        background: #2B55CD;;
    }

    #inscrire {
        position: relative;
        display: inline-flex;
        width: 180px;
        height: 55px;
        margin: 0 15px;
        perspective: 1000px;
    }

    #inscrire {
        font-size: 19px;
        letter-spacing: 1px;
        transform-style: preserve-3d;
        transform: translateZ(-25px);
        transition: transform .25s;
        font-family: 'Montserrat', sans-serif;

    }

    #inscrire:before,
    #inscrire:after {
        position: absolute;
        content: "S'inscrire";
        height: 55px;
        width: 180px;
        display: flex;
        align-items: center;
        justify-content: center;
        /* border: 5px solid black; */
        box-sizing: border-box;
        border-radius: 5px;
        background: #2B55CD;
    }

    #inscrire:before {
        color: #fff;
        background: #2B55CD;
        transform: rotateY(0deg) translateZ(25px);
    }

    #inscrire:after {
        color: #000;
        transform: rotateX(90deg) translateZ(25px);
    }

    #inscrire:hover {
        transform: translateZ(-25px) rotateX(-90deg);
    }

    #mot {
        margin-left: 40px;
    }


    #prems {
        margin-top: 30px;
    }

    #deum {
        margin-top: 30px;
    }

    #trim {
        margin-top: 30px;
    }


    #ici {
        margin-left: 300px;
        margin-top: 20px;
    }
</style>