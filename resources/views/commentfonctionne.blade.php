@extends('layouts.app')


@section('content')


<div class="main">
    <h5 class="accroch">Comment fonctionne TuMeGonfles?!</h5>
</div>

<div id="ensemb" class="d-flex flex-row justify-content-between mx-5 px-5">
    <div class="col-sm-8 d-flex flex-column justify-content-center">
        <p class="til"><span> TuMeGonfles?!</span> est un prestataire de service pour entreprise, celle-ci permet de faire une vérification rapide de l’état des pneus et des balais essuie-glaces des véhicules de vos employés. L’entreprise s’inscrit sur le site internet et choisi les bénéficiaires des services de TuMeGonfles?!.
Une fois que l’entreprise est inscrite, elle peut via son « Espace » ajouter ou supprimer les bénéficiaires des services de TuMeGonfles ?!.</p>

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
        
        <p class="para mt-4 ms-4">Le jour de passage de nos Techniciens, les Bénéficiaires reçoivent un e-mail qui leurs permettent d’avoir un retour de l’état de leur pneus et balais d’essuie-glaces, et surtout de pouvoir faire des économies !</p>
        <h5 class="po d-flex justify-content-center">Pourquoi vérifiez la pression des ses pneus  est important et économique ?</h5>
        <button id="btn1" type="button" class="btn  ms-4 mt-4">Comment fonctionne le site ?</button>
        

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
    .po{
        font-weight: bold;
    }
</style>


