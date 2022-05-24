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
    }

    .para {

        font-size: 100%;
        font-size: 24px;
        text-align: justify;



    }
    .po{
        font-weight: bold;
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
    <h5 class="accroch">Comment fonctionne TuMeGonfles?!</h5>
</div>

<div style="text-align: center; margin: auto ;width: 75%">
<div id="ensemb" class="d-flex flex-row mt-4 ">
   <div class="" style="width:  50%;display: flex;flex-direction: column;justify-content: center; align-items:center">
        <p class="til">TuMeGonfles?! est un prestataire de service pour entreprise, celle-ci permet de faire une vérification rapide de l’état des pneus et des balais essuie-glaces des véhicules de vos employés. L’entreprise s’inscrit sur le site internet et choisi les bénéficiaires des services de TuMeGonfles?!.
Une fois que l’entreprise est inscrite, elle peut via son « Espace» ajouter ou supprimer les bénéficiaires des services de TuMeGonfles?!.</p>

        <a href="{{ route('admin.users.create') }}"><button type="button" class="button">Entreprises, inscrivez-vous !</button></a>

    </div>
    <div id="gauche" class="col ">
        <img class="image1" src="images/pneuPlat.jpg" />
    </div>
</div>


<div id="ensemb" class="row mt-4">
    <div id="grid" class="col-sm-4">
        <div class="">
            <img class="image1 " src="images/pneuTechnicien.jpg" />
        </div>
    </div>
    <div class="col-sm-8  ">
        
        <p class="para mt-4 ms-4">Le jour de passage de nos Techniciens, les Bénéficiaires reçoivent un e-mail qui leurs permettent d’avoir un retour de l’état de leur pneus et balais d’essuie-glaces, et surtout de pouvoir faire des économies !</p>
        <h5 class="po d-flex justify-content-center mt-4">Pourquoi vérifiez la pression des ses pneus est important et économique ?</h5>
         <a href="pressionpneu"><button  type="button" class="button mt-1">Cliquez ici pour en savoir PLUS !</button></a>
        

    </div>

</div>


@endsection







