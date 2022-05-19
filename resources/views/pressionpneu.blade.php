@extends('layouts.app')


@section('content')

<div class="main">
    <h5 class="accroch">Pourquoi vérifiez la pression de ses pneus est important ?</h5>
</div>

<div id="ensemb" class="d-flex flex-row justify-content-between mx-5 px-5">
    <div class="col-sm-8 d-flex flex-column justify-content-center">
        <p class="til  ">Des pneus légèrement sur-gonflé permettent des économies de carburant significatives. Car un pneu sous-gonflé fera consommer plus de carburant, jusqu’à 10 % supplémentaire, en effet le pneu offrira plus de résistance au roulement et une dégradation non uniforme de celui ci.</p>
        <button id="btn2" type="button" class="btn container ">Entreprises, inscrivez-vous !</button>

    </div>
    <div id="gauche" class="col-sm-4 mt-5">
        <img class="image2" width="380" height="327" src="images/pneuPlat.jpg" />
    </div>
</div>


<div id="ensemb" class="row">
    <div id="grid" class="col-sm-4">
        <div class="">
            <img class="image1 ms-4" width="262" height="298" src="images/pneuTechnicien.jpg" />
        </div>
    </div>
    <div class="col-sm-8  ">
        <button id="btn1" type="button" class="btn justify-content-center ms-4 mt-4">Comment fonctionne le site ?</button>
        <p class="para mt-4 ms-4">Pour résumer, vérifier la pression des pneus régulièrement permet d’économiser jusqu’à 3 semaines d’essence sur 1 an !
Donc un effet très bénéfique pour le porte-monnaie, mais aussi bénéfique pour l’environnement, conduire avec des pneus bien gonflé permettrait de réduire les émissions de gaz à effet de serre de 1,6 millions de tonnes par an.</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-center">


        </div>

    </div>

</div>






@endsection

<style>
    .accroch {
        color: #2B55CD;
        text-align: center;
        margin-top: 10px;
        font-size: 36px;
        font-family: 'Gluten', cursive;



    }

    .til {
        font-size: 24px;
    }

    #btn1 {
        color: white;
        background-color: #2B55CD;
        font-family: 'Gluten', cursive;
        width: 50%;
        border-radius: 10px;



    }

    #btn2 {
        color: white;
        background-color: #2B55CD;
        font-family: 'Gluten', cursive;
        width: 50%;
        border-radius: 10px;

    }

    .image1 {
        width: 100%;

        border-radius: 10px;
    }

    .para {

        font-size: 100%;
        font-size: 24px;



    }
</style>