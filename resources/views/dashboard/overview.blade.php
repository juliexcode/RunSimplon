<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- FONT-AWESOME -->
    <script src="https://kit.fontawesome.com/26a1275860.js" crossorigin="anonymous"></script>

    <!-- CSS  -->
    <link rel="stylesheet" type="text/css" href="{{ url('css/dashmain.css') }}">

    <title>Dashboard</title>
</head>

<body>
    <nav>
        <div class="logo-name">
            <div class="logo-image">
                <img src="{{ url('images/logo-TMG.png') }}" alt="Logo tu me gonfle">
            </div>
            <!-- <span class="logo_name">TMG</span> -->
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="#">
                        <i class="fa-solid fa-house-chimney"></i>
                        <span class="link-name">Dashboard</span>
                    </a></li>

                <li><a href="#">
                        <i class="fa-solid fa-envelope"></i>
                        <span class="link-name">Notification</span>
                    </a></li>

                <li><a href="#">
                        <i class="fa-solid fa-users"></i>
                        <span class="link-name">Liste des personnes</span>
                    </a></li>


                <li><a href="#">
                        <i class="fa-solid fa-building"></i>
                        <span class="link-name">Liste des entreprises</span>
                    </a></li>

                <li><a href="#">
                        <i class="fa-solid fa-people-roof"></i>
                        <span class="link-name">Liste des technniciens</span>
                    </a></li>

                <li><a href="#">
                        <i class="fa-solid fa-user-plus"></i>
                        <span class="link-name">Ajout des techniciens</span>
                    </a></li>

                <li><a href="#">
                        <i class="fa-solid fa-briefcase"></i>
                        <span class="link-name">Intervention</span>
                    </a></li>

                <li><a href="#">
                        <i class="fa-solid fa-user-gear"></i>
                        <span class="link-name">Ajout admin</span>
                    </a></li>

                <li><a href="#">
                        <i class="fa-solid fa-users-gear"></i>
                        <span class="link-name">Liste admin</span>
                    </a></li>
            </ul>

            <ul class="logout-mode">
                <li><a href="#">
                        <i class="fa-solid fa-right-from-bracket"></i>
                        <span class="link-name">Logout</span>
                    </a></li>

                <li class="mode">
                    <a href="#">
                        <i class="fa-solid fa-moon"></i>
                        <span class="link-name">Dark Mode</span>
                    </a>

                    <div class="mode-toggle">
                        <span class="switch"></span>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <section class="dashboard">
        <div class="top">
            <i class="fa-solid fa-bars sidebar-toggle"></i>


            <div class="search-box">
                <i class="fa-solid fa-magnifying-glass"></i>
                <input type="text" placeholder="Rechercher...">
            </div>

            <img src="{{ url("images/0.jpg") }}" alt="Photo de profil">
        </div>

        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="fa-solid fa-gauge-high"></i>
                    <span class="text">Dashboard</span>
                </div>

                <div class="boxes">
                    <div class="box box1">
                        <span class="text">Total Likes</span>
                        <span class="number">50,120</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @yield('composant-dashboard')

    <!-- Bootstrap 5 lien JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- dashmain.js -->
    <script src="{{ url('javascript/dashmain.js') }}"></script>
</body>

</html>