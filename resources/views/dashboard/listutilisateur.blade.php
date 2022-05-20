@extends('dashboard.layouts-dashboard')
@section('composant-dashboard')
<div class="dash-content">
    <div class="list">
        <div class="title">
            <i class="fa-solid fa-address-book"></i>
            <span class="text">Liste des bénéficiaires</span>
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
            @foreach($users as $user)
            <tbody>
                <tr>
                    <td>{{$user->prenom}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>

                    <td>

                        <form action="{{route('admin.users.dash.listutil.destroy', $user->id)}}" method="post">
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