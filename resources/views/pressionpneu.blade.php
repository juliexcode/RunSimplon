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
        text-align: justify;
        

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
  
        border-radius: 10px;
        text-align: right;
       
    }

    .para {

        font-size: 100%;
        font-size: 24px;
        text-align: justify;
    }


.button{
    /* margin-left:40%;
    margin-right: auto; */
    width: 500px;
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

.button:hover{
    width: 500px;
    height: 50px;
    background-color: #81CC16;
    color: #FFFFFF;
}



</style>


@extends('layouts.app')


@section('content')

<div class="main">
    <h5 class="accroch">Pourquoi vérifiez la pression de ses pneus est important ?</h5>
</div>


<div style="text-align: center; margin: auto ;width: 75%">
<div id="ensemb" class="d-flex flex-row mt-4 ">
   <div class="" style="width:  50%;display: flex;flex-direction: column;justify-content: center;">
        <p class="til  ">Des pneus légèrement sur-gonflé permettent des économies de carburant significatives. Car un pneu sous-gonflé fera consommer plus de carburant, jusqu’à 10 % supplémentaire, en effet le pneu offrira plus de résistance au roulement et une dégradation non uniforme de celui ci.</p>
        <div class="">
         <a href="{{ route('admin.users.create') }}"><button  type="button" class="button">Entreprises, inscrivez-vous !</button></a>
        </div>
    </div>
    <div id="gauche" class="" style="width: 50%;">
        <img class="image1"  style="float: right;" src="images/pneuPlat.jpg">
    </div>
</div>
</div>

<div style="text-align: center; margin: auto ;width: 75%">
<div i<div id="ensemb" class="d-flex flex-row mt-3 mb-4 align-items-center ">
    <div class="" style="width:  50%;display: flex;flex-direction: column;justify-content: center;">
        <div >
            <img  class="image1" style="float: left" src="images/pneuTechnicien.jpg" />
        </div>
    </div>
    <div  style="width: 75%;">
        <a href="commentfonctionne"> <button  type="button" class="button">Comment fonctionne le site ?</button></a>
        <p class="para mt-3" >Pour résumer, vérifier la pression des pneus régulièrement permet d’économiser jusqu’à 3 semaines d’essence sur 1 an !
Donc un effet très bénéfique pour le porte-monnaie, mais aussi bénéfique pour l’environnement, conduire avec des pneus bien gonflé permettrait de réduire les émissions de gaz à effet de serre de 1,6 millions de tonnes par an.</p>
       

    </div>

</div>

</div>





@endsection

{{-- class="btn justify-content-center mt-4" --}}