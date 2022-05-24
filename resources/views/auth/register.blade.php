<style> 
 body {
        background-color: #2B55CD;
 }
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
        background: #2B55CD;
        ;
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
        margin: auto;
        margin-top: 20px;
        margin-bottom: 10px;
    }

    

    .accroch {
        color: #2B55CD;
        text-align: center;
        font-size: 36px;
        font-family: 'Gluten', cursive;

    }

    .cadre {
        position: relative;
        margin-left: auto;
        margin-right: auto;
        width: 50%;
        height: auto;
        padding: 20px;

        border: 2px;
        border-color: #2B55CD;
        border-radius: 20px;
        background-color: #ffffff;
    }

    .ligne {

        width: 600px;
        height: 2px;
        margin-right: auto;
        margin-left: auto;

        border: 2px solid #2B55CD;
    }

    .button {
        width: 190px;
        height: 50px;
        background-color: #2B55CD;
        border-radius: 10px;
        border-width: 0px;

        text-align: center;
        font-family: 'Gluten';
        font-style: normal;
        font-weight: 700;
        font-size: 24px;
        line-height: 21px;
        vertical-align: baseline;
        padding-top: 15px;
        padding-bottom: 15px;

        color: #FFFFFF;
    }

    .button:hover {
        width: 190px;
        height: 50px;
        background-color: #81CC16;
        color: #FFFFFF;
    }

</style>


@extends('layouts.app')

@section('content')

<div style="background-color: #2B55CD; margin-top: -30px; margin-bottom: -30px">
<div class="container"  >
    <div class="row justify-content-center">
        <div class="col-md-8 mt-5 mb-5">
            <div class="card rounded primary">
                <div class="accroch">Bénéficiaire, inscrivez-vous !</div>
 <div class="ligne" style="margin-top: 15px; margin-bottom: 15px"></div>
                <div class="card-body ">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="container px-4">
                            <div class="row g-3">
                                <div class="col">
                                    <label for="">Prenom:</label>
                                    <input id="name" type="text" placeholder="Nom..." class="form-control border-2 border-primary rounded  @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                </div>
                                <div class="col">
                                    <label for="">Nom:</label>
                                    <input type="text" name="prenom" class="form-control border-2 border-primary rounded " placeholder="Prenom..." aria-label="Prenom">
                                </div>

                            </div>
                        </div>
                        <div id="prems" class="container px-4">
                            <div class="row g-3">
                                <div class="col">
                                    <label for="">E-mail:</label>
                                    <input id="email" type="email" placeholder="E-mail..." class="form-control border-2 border-primary rounded  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                </div>
                                <div class="col">
                                    <label for="">N° de téléphone:</label>
                                    <input type="number" name="numero" placeholder="N° de téléphone..." class="form-control border-2 border-primary rounded " placeholder="tel..." aria-label="tel">
                                </div>
                            </div>
                        </div>
                        <div id="deum" class="container px-4">
                            <div class="row g-3">
                                <div class="col">
                                    <label for="">N° d’immatriculation:</label>
                                    <input type="text" name="matricule" placeholder="N° d’immatriculation..." class="form-control border-2 border-primary rounded " placeholder="Nom..." aria-label="Nom">
                                </div>
                                <div class="col">
                                    <label for="">Type/modèle du véhicule:</label>
                                    <input type="text" name="modele" placeholder="Type/modèle du véhicule..." class="form-control border-2 border-primary rounded " placeholder="Prenom..." aria-label="Prenom">
                                </div>
                            </div>
                        </div>
                        <div id="trim" class="container px-4">
                            <div class="row g-3">
                                <div class="col">
                                    <label for="">Mot de passe:</label>
                                    <input id="password" type="password" placeholder="Mot de passe..." class="form-control border-2 border-primary rounded  @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                </div>
                                <div class="col">
                                    <label for="">Confirmation du mot de passe:</label>
                                    <input id="password-confirm" type="password" placeholder="Confirmation du mot de passe..." class="form-control border-2 border-primary rounded " name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>
                        </div>




                </div>
                <div class="row ">
                    <div class="col" style="text-align: center">
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
</div>
@endsection
