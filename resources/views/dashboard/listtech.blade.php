@extends('dashboard.layouts-dashboard')
@section('composant-dashboard')
<div class="dash-content">
    <div class="list">
        <div class="title">
            <i class="fa-solid fa-address-book"></i>
            <span class="text">Liste des techniciens</span>
        </div>

        <table class="table table-borderless table-hover">
            <thead>
                <tr>
                    <th scope="col" style="color:black">NOM</th>
                    <th scope="col">PRENOM</th>
                    <th scope="col">telephone</th>

                    <th scope="col"> </th>

                </tr>
            </thead>
            @foreach($techs as $tech)
            <tbody>
                <tr>
                    <td>{{$tech->prenom}}</td>
                    <td>{{$tech->name}}</td>
                    <td>{{$tech->email}}</td>

                    <td> <a href="#"><button>MODIFIER</button></a>

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
</div>
@endsection