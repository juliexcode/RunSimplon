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
</div>
</section>

@endsection