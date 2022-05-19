@extends('layouts.app')


@section('content')

<style>
    body {
        background-color: #2B55CD;
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
        width: 800px;
        height: auto;
        padding: 20px;
        
        border: 2px;
        border-color: #2B55CD;
        border-radius: 20px;
        background-color: #ffffff;
    }

    .ligne{
       
width: 600px;
height: 2px;
margin-right: auto;
margin-left: auto;

border: 2px solid #2B55CD;
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

<div class="cadre" style="margin-top: 30px; margin-bottom:30px">
<div class="accroch">Entreprise inscrivez-vous !
<div class="ligne" style="margin-top: 15px; margin-bottom: 15px"></div>
</div>

<form method="POST" action="{{route('admin.entreprise.log')}}">
    @csrf

    <div class="row g-3 mt-3">

        <div class="col">
            <label for="">Prenom:</label>
            <input id="name" type="text" placeholder="Nom..." class="form-control border-2 border-primary rounded " name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
        </div>
        <div class="col">
            <label for="">Nom:</label>
            <input type="text" name="prenom" class="form-control border-2 border-primary rounded" placeholder="Prenom..." aria-label="Prenom">
        </div>
    </div>
    <div class="row g-3 mt-2">
        <div class="col">
            <label for="">Nom de l'entreprise:</label>
            <input id="entreprise" type="text" placeholder="Nom de l'entreprise..." class="form-control border-2 border-primary rounded " name="entreprise" value="{{ old('entreprise') }}" required autofocus>
        </div>
    </div>
    <div class="row g-3 mt-2">
        <div class="col">
            <label for="">Adresse de l'entreprise:</label>
            <input id="adresse" type="text" placeholder="Adresse de l'entreprise..." class="form-control border-2 border-primary rounded " name="adresse" value="{{ old('adresse') }}" required autofocus>
        </div>
    </div>
    <div class="row g-3 mt-2">
        <div class="col">
            <label for="">E-mail:</label>
            <input id="email" type="email" placeholder="E-mail..." class="form-control border-2 border-primary rounded" name="email" value="{{ old('email') }}" required autocomplete="email">
        </div>
        <div class="col">
            <label for="">N° de téléphone:</label>
            <input type="number" name="numero" placeholder="N° de téléphone..." class="form-control border-2 border-primary rounded" placeholder="tel..." aria-label="tel">
        </div>

        <div class="row g-3 mt-2">
            <div class="col">
                <label for="">Mot de passe:</label>
                <input id="password" type="password" placeholder="Mot de passe..." class="form-control border-2 border-primary rounded " name="password" required autocomplete="new-password">
            </div>
            <div class="col">
                <label for="">Confirmation du mot de passe:</label>
                <input id="password-confirm" type="password" placeholder="Confirmation du mot de passe..." class="form-control border-2 border-primary rounded" name="confirm" required autocomplete="new-password">
            </div>




        </div>
    </div>

{{-- 
    <div class="row mb-0 mt-2">
        <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-primary">
                {{ __('Register') }}
            </button> --}}

                <div class="row justify-content-center mt-3">
                <button type="submit" class="button" style="width: 190px;"> {{ __('Register') }}</button>
            </div>


        </div>
    </div>
</form>


</div>
@endsection
