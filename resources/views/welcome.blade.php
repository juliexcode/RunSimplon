@extends('layouts.app')

@section('content')

<img class="banniere" src="images/ban.png"></img>
<div class="container">

</div>
<br>
<div class="main">
    <h5 class="accroch">Ne vous préoccupez plus de vos pneus, TuMeGonfles est là pour vous !</h5>



</div>

<div class="container d-flex justify-content-center" style="display: inline-block;">

    <div id="ensemb" class="row">
        <div id="grid" class="col-sm-4">
            <div class="">
                <img class="image1" width="262" height="298" src="images/pneuGonflage.jpg" />
            </div>
        </div>
        <div class="col-sm-8 ">
            <h4 class="til">Pourquoi TuMeGonfles ?</h4>
            <p class="para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ipsum condimentum porttitor porttitor volutpat ultricies vitae elementum. Mauris aliquam lobortis tempor, nulla. Ac consequat quis pellentesque sapien in duis proin. Sapien </p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button id="btn1" type="button" class="btn  ">Comment fonctionne le site ?</button>
                <button id="btn2" type="button" class="btn ">Entreprises, inscrivez-vous !</button>
            </div>

        </div>

    </div>
</div>
<div class="container d-flex justify-content-center" style="display: inline-block;">

    <div id="ensemb" class="row">
        <div class="col-sm-8  ">
            <h4 class="til">Pourquoi vérifiez la pression des ses pneus est important ?</h4>
            <button id="btn1" type="button" class="btn float-right ">Cliquez ici pour en savoir PLUS !</button>


        </div>
        <div id="gauche" class="col-sm-4">

            <img class=image2 width="501" height="298" src="images/pneuPlat.jpg" />

        </div>


    </div>
</div>


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

        font-size: 24px;


    }

    #ensemb {
        margin-top: 100px;
    }

    #ensemb h4 {
        text-align: center;
    }



    .image2 {
        float: left;
    }



    #btn1 {
        color: white;
        background-color: #2B55CD;
        font-family: 'Gluten', cursive;


    }

    #btn2 {
        color: white;
        background-color: #2B55CD;
        font-family: 'Gluten', cursive;
        margin-left: 70px;
        border-radius: 10px;

    }
</style>