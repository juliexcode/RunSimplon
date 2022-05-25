@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="title text-center">Espace entreprise</h1>
    <div style="width: 50%; height: 2px; margin-left:auto;margin-right:auto;margin-bottom:20; border: 2px solid #2B55CD;"></div>
    <div>
        <h4 class="text-center">Ajouter un bénéficiaire</h4>
    </div>
    <div>
        <form class="d-flex" action="{{Route('entreprise.recherche')}}">
            <label class="mail" for="">Entrer une adresse e-mail</label>
            <input class="form-control me-2 ms-4" type="search" placeholder="Adresse mail" name='q'>
            <button class="btn btn-outline-success" type="submit">Rechercher</button>
        </form>
    </div>

    <div>
        <h4 class="text-center">liste des bénéficiaires</h4>
    </div>

    <div>
        <table class="table table-borderless table-hover table-bordered">
            <thead>
                <tr style="background-color: rgba(129, 204, 22, 1);">
                    <th scope="col" style="color:black">NOM</th>
                    <th scope="col">PRENOM</th>
                    <th scope="col">E-MAIL</th>
                    <th scope="col"></th>

                </tr>
            </thead>
            @foreach($users as $user)
            <tbody>
                <tr>
                    <td>{{$user->prenom}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>

                    <td>

                        <form action="#" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit">supprimer</button>
                        </form>
                    </td>
                </tr>


            </tbody>
            @endforeach
        </table>
    </div>
</div>
@endsection



<style>
    .title {
        font-family: gluten;
        color: blue;

    }
</style>