@extends('layouts.app')

@section('content')

<img class="banniere" src="images/unknown.png"></img>
<div class="container">

</div>
<br>
<div class="main">
    <h5 class="accroch">Ne vous préoccupez plus de vos pneus, TuMeGonfles est là pour vous !</h5>



</div>

<div class="container" style="display: inline-block;">

    <!-- <div class="row flex-align-item-center">
 
            <div class="col-lg-6">
                <img id="pneu" src="images/pneuGonflage.jpg" class="img-fluid" alt="Responsive image">
            </div>
 
 
            <div class="col-lg-3 ">
                <p class="press">Pourquoi vérifiez la pression des ses pneus est important ?</p>
            </div>
  -->


    <div class="row">
        <div id="grid" class="col-md-4 ">
            <div class="imgAbt d-flex justify-content-center">
                <img width="220" height="220" src="images/pneuGonflage.jpg" />
            </div>
        </div>
        <div class="col-md-8">
            <h4 class="til">Pourquoi TuMeGonfles ?</h4>
            <p class="para">Lots of text here...With the four tiers of grids available you're bound to run into issues where, at certain breakpoints, your columns don't clear quite right as one is taller than the other. To fix that, use a combination of a .clearfix and o</p>
        </div>
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
        font-size: 86px;


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
        text-align: center;
        font-size: 36px;
    }

    .para {
        text-align: center;
        font-size: 24px;
    }
</style>