<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

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
                <img src="{{ url('images/TMG-2.png') }}" alt="Logo tu me gonfle">
            </div>
            <!-- <span class="logo_name">TMG</span> -->
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="{{route('admin.users.dash.view')}}">
                        <i class="fa-solid fa-house-chimney"></i>
                        <span class="link-name">Dashboard</span>
                    </a></li>


                <li><a href="{{route('admin.users.dash.listutil')}}">
                        <i class="fa-solid fa-users"></i>
                        <span class="link-name">Liste des Bénéficiaires</span>
                    </a></li>


                <li><a href="{{route('admin.users.dash.listent')}}">
                        <i class="fa-solid fa-building"></i>
                        <span class="link-name">Liste des entreprises</span>
                    </a></li>

                <li><a href="{{route('admin.users.dash.listtech')}}">
                        <i class="fa-solid fa-people-roof"></i>
                        <span class="link-name">Liste des technniciens</span>
                    </a></li>


                <li><a href="#">
                        <i class="fa-solid fa-wrench"></i>
                        <span class="link-name">Interventions</span>
                    </a></li>

                <li><a href="#">
                        <i class="fa-solid fa-user-gear"></i>
                        <span class="link-name">Personnel</span>
                    </a></li>

            </ul>


            <ul class="top-line">


                <li style="padding-top: 10px">


                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <i class="fa-solid fa-right-from-bracket"></i>
                        <span class="link-name">Logout</span>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>

                {{-- <li class="mode">
                    <a href="#">
                        <i class="fa-solid fa-moon"></i>
                        <span class="link-name">Dark Mode</span>
                    </a>

                    <div class="mode-toggle">
                        <span class="switch"></span>
                    </div>
                </li> --}}
            </ul>
        </div>
    </nav>

    <section class="dashboard">
        <div class="top">
            <i class="fa-solid fa-bars sidebar-toggle"></i>


            <div class="search-box">
                <a href="#"><i style="padding-left: 10px;" class="fa-solid fa-magnifying-glass"></i></a>
                <input type="text" placeholder="Rechercher...">
            </div>

            <ul class="logout-mode">
                <li class="mode">
                    {{-- <a href="#">
                        <i class="fa-solid fa-moon"></i>
                        <span class="link-name">Dark Mode</span> MODIFIER LE CSS 
                        ####################################################################
                    </a> --}}
                    {{-- <i class="fa-solid fa-moon"></i> ############################   ICON LUNE DARK MODE--}}

                    <div class="mode-toggle">
                        <span class="switch"></span>
                    </div>

                </li>
            </ul>

            {{-- <img src="{{ url("images/0.jpg") }}" alt="Photo de profil"> --}}
        </div>



        @yield('composant-dashboard')

        <!-- Bootstrap 5 lien JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>

        <!-- dashmain.js -->
        <script src="{{ url('javascript/dashmain.js') }}"></script>
</body>

</html>