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

            </tr>


        </tbody>
        @endforeach
    </table>
    <a href="{{route('users.tech.intervention')}}">LIEN </a>
</div>

@endsection