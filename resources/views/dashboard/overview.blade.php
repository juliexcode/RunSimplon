@extends('dashboard.layouts-dashboard')
@section('composant-dashboard')

<div class="dash-content">
    <div class="overview">
        <div class="title">
            <i class="fa-solid fa-gauge-high"></i>
            <span class="text">Dashboard</span>
        </div>

        <div class="boxes">
            <div class="box box4">
                <i class="fa-solid fa-building"></i>
                <span class="text">Nombre d'Entreprise Inscrite</span>
                <span class="number">25</span>
            </div>
            <div class="box box4">
                <i class="fa-solid fa-users"></i>
                <span class="text">Nombre de Bénéficiaire Inscrit</span>
                <span class="number">65</span>
            </div>
            <div class="box box4">
                {{-- <i class="fa-solid fa-car-wrench"></i> --}}
                <i class="fa-solid fa-wrench"></i>
                <span class="text">Nombre d'Intervention</span>
                <span class="number">56</span>
            </div>
        </div>
    </div>

    <div class="activity">
        <div class="title">
            <i class="fa-solid fa-clock"></i>
            <span class="text">Activitée récente</span>
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



    
</div>

</section>

@endsection