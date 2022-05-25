@extends('layouts.app')

@section('content')
<div class="container">
    <h1>ENTREPRISE</h1>
    <div>
        <form class="d-flex" action="{{Route('entreprise.recherche')}}">
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
                <th scope="col">ajouter à mon entreprise</th>
                <th scope="col">$benef->id</th>
                <th scope="col">ENTREPRISE ID</th>



            </tr>
        </thead>
        @foreach($benefs as $benef)
        <tbody>

            <tr>
                <td>{{$benef->prenom}}</td>
                <td>{{$benef->name}}</td>
                <td>{{$benef->email}}</td>
                <td><a href="{{route('entreprise.lien',['benef_id'=>$benef->id, Auth::user()->id])}}"><button>AJOUTER</button></a></td>
                <td>{{$benef->id}}</td>
                <td>{{ Auth::user()->id}}</td>

            </tr>


        </tbody>
        @endforeach
    </table>
</div>
@endsection