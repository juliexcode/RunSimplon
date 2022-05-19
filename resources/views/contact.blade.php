<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <div class="cerclefond"></div>
<div class="cerclefond1"></div>

@extends('layouts.app')

@section('content')
    <!--Section: Contact v.2-->
<section class="mb-4">

<!--Section heading-->
<h2 class="accroch">N’hésitez-pas, écrivez-nous !</h2>
<!--Section description-->
<p class="text-center w-responsive mx-auto mb-5">Des questions ? Un avis ? N'hésitez pas écrivez-nous! Notre équipe vous répondra dans les plus bref délais. Merci!</p>



<div class="row justify-content-center px-5">

    <!--Grid column-->
    <div class="col-md-9 mb-md-0 mb-5 center px-5">
        <form id="contact-form" name="contact-form" action="mail.php" method="POST">

            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-md-6">
                    <div class="md-form mb-0">
                        <label for="name" class="">Votre Nom</label>
                        <input type="text" id="name" name="name" class="form-control border-2 border-primary rounded">
                    </div>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-6">
                    <div class="md-form mb-0">
                        <label for="email" class="">Votre email</label>
                        <input type="text" id="email" name="email" class="form-control border-2 border-primary rounded">
                        
                    </div>
                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

            <!--Grid row-->
            <div class="row mt-3">
                <div class="col-md-12">
                    <div class="md-form mb-0">
                        <label for="subject" class="">Sujet</label>
                        <input type="text" id="subject" name="subject" class="form-control border-2 border-primary rounded">
                        
                    </div>
                </div>
            </div>
            <!--Grid row-->

            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-md-12 mt-3">

                    <div class="md-form">
                        <label for="message">Votre message</label>
                        <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea border-2 border-primary rounded"></textarea>
                        
                    </div>

                </div>
            </div>
            <!--Grid row-->

            {{-- <div style="display:flex;justify-content: center;margin-top: 30px;"> --}}
            <div class="row justify-content-center mt-3">
                <button type="submit" class="button" style="width: 190px;">Envoyer!</button>
            </div>
        </form>
</div>
</div>


       
        <div class="status"></div>
    
    <!--Grid column-->
   



</section>
<!--Section: Contact v.2-->
@endsection
</body>
</html>


<style>
  

    .accroch {
        color: #2B55CD;
        text-align: center;
        margin-top: 10px;
        font-size: 36px;
        font-family: 'Gluten', cursive;

    }

.cerclefond{
    position: absolute; z-index: -1;
    width: 1923px;
    height: 780px;
    left: -428.61px;
    top: -100px;
    border-radius: 50%;

    background: #EAEAEA;
}

.cerclefond1{
    position: absolute; z-index: -1;
    width: 1127px;
    height: 640px;
    left: 168px;
    top: -400px;
    border-radius: 50%;

    background: #FFFFFF;
}

.button{
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

.button:hover{
    width: 190px;
    height: 50px;
    background-color: #81CC16;
    color: #FFFFFF;
}

</style>