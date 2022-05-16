@extends('layouts.app')


@section('content')
<div class="container">


    @foreach($users as $user)
    <div>

        {{$user->name}} - {{$user->prenom}}

    </div>
    @endforeach

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Ajouter un techniciens
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ajout techniciens</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <form method="POST" action="{{ route('admin.users.store') }}">
                        @csrf
                        <div class="mb-3">
                            <label class="col-form-label">Prenom</label>
                            <input type="text" name="name" class="form-control" required value="{{ old('name') }}" id="name">
                            <div class="mb-3">
                                <label class="col-form-label">Nom</label>
                                <input type="text" name="prenom" class="form-control" required value="{{ old('prenom') }}" id="prenom">
                            </div>
                            <div class="mb-3">
                                <label class="col-form-label">E-mail</label>
                                <input type="text" name="email" class="form-control" required value="{{ old('email') }}" id="email">
                            </div>
                            <div class="mb-3">
                                <label class="col-form-label">N° de telephone</label>
                                <input type="number" name="numero" class="form-control" required value="{{ old('numero') }}" id="numero">
                            </div>
                            <div class="mb-3">
                                <label class="col-form-label">Mot de passe</label>
                                <input type="password" name="password" class="form-control" required value="{{ old('password') }}" id="passe">
                            </div>
                            <div class="mb-3">
                                <label class="col-form-label">Confirmation de mot de passe</label>
                                <input type="password" name="confirm" class="form-control" required value="{{ old('confirm') }}" id="confirm">
                            </div>

                        </div>
                        <div class="modal-footer">
                            <input type="submit" name="ajouter" value="Ajouter le technicien">
                        </div>
                    </form>

                </div>
            </div>
        </div>

    </div>

    @endsection