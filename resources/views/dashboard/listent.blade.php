@extends('dashboard.layouts-dashboard')
@section('composant-dashboard')
<div class="dash-content">
    <div class="list">
        <div class="title">
            <i class="fa-solid fa-address-book"></i>
            <span class="text">Liste des entreprises</span>
        </div>

        <table class="table table-borderless table-hover">
            <thead>
                <tr>
                    <th scope="col" style="color:black">NOM DE L'ENTREPRISE</th>
                    <th scope="col">NOM</th>
                    <th scope="col">PRENOM</th>
                    <th scope="col">EMAIL </th>

                </tr>
            </thead>
            @foreach($entreprises as $entreprise)
            <tbody>
                <tr>
                    <td>{{$entreprise->name_entreprise}}</td>
                    <td>{{$entreprise->prenom}}</td>
                    <td>{{$entreprise->name}}</td>
                    <td>{{$entreprise->email}}</td>

                    <td>

                        <form action="{{route('admin.users.dash.listent.destroy', $entreprise->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Retirer l'entreprise</button>
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