@extends('layouts.app')

@section('content')
<div class="container">



    <h1>TECHNICIEN</h1>
    <div class="">
    <form class="d-flex" action="{{Route('admin.users.tech.recherche')}}">
        <input class="form-control me-2" type="search" placeholder="Search" name='q'>
        <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
    </div>

    <table class="table table-borderless table-hover">
        <thead>
            <tr>
                <th scope="col" style="color:black">NOM</th>
                <th scope="col">PRENOM</th>
                <th scope="col">E-MAIL</th>
                <th scope="col"></th>



            </tr>
        </thead>
        @foreach($benefs as $benef)
        <tbody>
            <tr>
                <td>{{$benef->prenom}}</td>
                <td>{{$benef->name}}</td>
                <td>{{$benef->matricule}}</td>
                <td>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Launch demo modal
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Fiche d'intervention<h5>

                                </div>
                                <div class="firstdiv">
                                    <p id="etape">Étape 1/3</p>
                                </div>


                                <div class="modal-body">
                                    <div class="">
                                        <h4>pneu avant gauche</h4>
                                    </div>
                                    <div class="d-flex ">
                                        <p>avant intervention</p>
                                        <div>
                                            <p>apres intervention</p>
                                        </div>
                                    </div>
                                    <div class="d-flex ">
                                        <p>pression(bar)</p>
                                        <p>pression(bar)</p>
                                    </div>
                                    
                                </div>
                                <div class="d-flex justify-content-between">

                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>


        </tbody>
        @endforeach
    </table>
</div>
@endsection