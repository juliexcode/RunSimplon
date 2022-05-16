@extends('dashboard.layouts-dashboard')
@section('composant-dashboard')

<div class="dash-content">
    <div class="overview">
        <div class="title">
            <i class="fa-solid fa-gauge-high"></i>
            <span class="text">Dashboard</span>
        </div>

        <div class="boxes">
            <div class="box box1">
                <i class="fa-solid fa-thumbs-up"></i>
                <span class="text">Total Likes</span>
                <span class="number">50,120</span>
            </div>
            <div class="box box2">
                <i class="fa-solid fa-comments"></i>
                <span class="text">Comments</span>
                <span class="number">20,120</span>
            </div>
            <div class="box box3">
                <i class="fa-solid fa-share"></i>
                <span class="text">Total Share</span>
                <span class="number">10,120</span>
            </div>
        </div>
    </div>

    <div class="activity">
        <div class="title">
            <i class="fa-solid fa-clock"></i>
            <span class="text">Recent activity</span>
        </div>

        <div class="activity-data">
            <div class="data names">
                <span class="data-title">Name</span>
                <span class="data-list">Prem Sahi</span>
                <span class="data-list">Prem Sahi</span>
                <span class="data-list">Prem Sahi</span>
                <span class="data-list">Prem Sahi</span>
                <span class="data-list">Prem Sahi</span>
                <span class="data-list">Prem Sahi</span>
                <span class="data-list">Prem Sahi</span>
                <span class="data-list">Prem Sahi</span>
            </div>
            <div class="data email">
                <span class="data-title">E-mail</span>
                <span class="data-list">test@gmail.com</span>
                <span class="data-list">test@gmail.com</span>
                <span class="data-list">test@gmail.com</span>
                <span class="data-list">test@gmail.com</span>
                <span class="data-list">test@gmail.com</span>
                <span class="data-list">test@gmail.com</span>
                <span class="data-list">test@gmail.com</span>
                <span class="data-list">test@gmail.com</span>
            </div>
            <div class="data joined">
                <span class="data-title">Date</span>
                <span class="data-list">01-02-2022</span>
                <span class="data-list">01-02-2022</span>
                <span class="data-list">01-02-2022</span>
                <span class="data-list">01-02-2022</span>
                <span class="data-list">01-02-2022</span>
                <span class="data-list">01-02-2022</span>
                <span class="data-list">01-02-2022</span>
                <span class="data-list">01-02-2022</span>
            </div>
            <div class="data type">
                <span class="data-title">Type</span>
                <span class="data-list">New</span>
                <span class="data-list">New</span>
                <span class="data-list">New</span>
                <span class="data-list">New</span>
                <span class="data-list">New</span>
                <span class="data-list">New</span>
                <span class="data-list">New</span>
                <span class="data-list">New</span>
            </div>
            <div class="data status">
                <span class="data-title">Status</span>
                <span class="data-list">Liked</span>
                <span class="data-list">Liked</span>
                <span class="data-list">Liked</span>
                <span class="data-list">Liked</span>
                <span class="data-list">Liked</span>
                <span class="data-list">Liked</span>
                <span class="data-list">Liked</span>
                <span class="data-list">Liked</span>
            </div>
        </div>
    </div>

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
</div>

</section>

@endsection