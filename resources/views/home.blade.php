@extends('layouts.app')

@section('content')

<img class="banniere" src="images/ban1.png"></img>
<div class="container">

</div>
<br>

<div class="main">
    <h5 class="accroch">Ne vous préoccupez plus de vos pneus, TuMeGonfles est là pour vous !</h5>



</div>

<div class="container d-flex justify-content-center mt-1" style="display: inline-block;">

    <div id="ensemb" class="row">
        <div id="grid" class="col-sm-4">
            <div class="">
                <img class="image1" width="262" height="298" src="images/pneuGonflage.jpg" />
            </div>
        </div>
        <div class="col-sm-8 ">
            <h4 class="til">Pourquoi TuMeGonfles ?</h4>
            <p class="para">TuMeGonfles?! est un prestataire de service pour entreprise, celle-ci permet de faire une vérification rapide de l’état des pneus et des balais essuie-glaces des véhicules de vos employés. Et permet à vos employés de faire des économies ! </p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                <a href="commentfonctionne"><button id="btn1" type="button" class="container btn text-nowrap ">Comment fonctionne le site ?</button></a>
                <a href=""><button id="btn2" type="button" class="btn ">Entreprises, inscrivez-vous !</button></a>
            </div>

        </div>

    </div>
</div>
<!-- <div class="d-flex justify-content-center" style="display: inline-block;"> -->
<div id="ensemb" class="d-flex flex-row justify-content-between mx-5 px-5">
    <div class="d-flex flex-column justify-content-center">
        <h4 class="til  ">Pourquoi vérifiez la pression des ses pneus est important ?</h4>
        <a href="pressionpneu"><button id="btn3" type=" button" class="container btn text-nowrap mt-4 ">Cliquez ici pour en savoir PLUS !</button></a>
    </div>
    <div id="gauche" class="col-sm-4">
        <img class="image2" width="400" height="298" src="images/pneuPlat.jpg" />
    </div>
</div>
<!-- </div> -->


</div>






@endsection



<style>
    .banniere {
        width: 100%;
        height: auto;
        margin-top: -25px;
        margin-bottom: -25px;


    }

    .accroch {
        color: #2B55CD;
        text-align: center;
        margin-top: 10px;
        font-size: 36px;
        font-family: 'Gluten', cursive;



    }

    .roue {
        margin-top: 10px;
        height: 298;
        width: 262;
        margin-left: 400px;

    }

    .press {
        font-size: 24px;
    }

    #pneu {
        margin-top: 30px;

    }

    .til {

        font-size: 36px;

    }

    .para {

        font-size: 100%;
        font-size: 24px;



    }

    #ensemb {
        margin-top: 100px;
    }

    #ensemb h4 {
        text-align: center;
    }

    .image1 {
        width: 100%;

        border-radius: 10px;
    }

    .image2 {
        width: 100%;
        border-radius: 10px;

    }




    #btn1 {
        color: white;
        background-color: #2B55CD;
        font-family: 'Gluten', cursive;
        width: 100%;
        border-radius: 10px;



    }

    #btn2 {
        color: white;
        background-color: #2B55CD;
        font-family: 'Gluten', cursive;
        width: 100%;
        border-radius: 10px;

    }

    #btn3 {
        color: white;
        background-color: #2B55CD;
        font-family: 'Gluten', cursive;
        width: 50%;
        border-radius: 10px;
    }

    .cerclefond {
        position: absolute;
        z-index: -1;
        width: 1923px;
        height: 980px;
        left: -428.61px;
        top: 394.57px;
        border-radius: 50%;

        background: #EAEAEA;
    }

    .cerclefond1 {
        position: absolute;
        z-index: -1;
        width: 1127px;
        height: 840px;
        left: 168px;
        top: -137px;
        border-radius: 50%;

        background: #FFFFFF;


    }
</style>