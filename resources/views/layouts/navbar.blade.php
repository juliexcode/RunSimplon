<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <nav id="navi" class="navbar navbar-expand-lg navbar-light ">
        <div class="container-fluid">
        <img class="navbar-logo" src="images/logo.png"></img>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-justify" aria-current="page" href="#">Connexion</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Inscription</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Nous contactez</a>
                    </li>
                    <!-- <li class="nav-item">
                        <button <a id="tech">Vous êtes techniciens ?</a></button>
                    </li> -->
                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">Disabled</a>
                    </li>
                </ul> -->
                    <!-- <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form> -->
            </div>
        </div>
    </nav>
    
    <div class="container">
        @yield('content')
    </div>
    <style>
        body {
            font-family: 'Oswald', sans-serif;
        }

        #navi {
            background-color: rgba(255, 255, 255, 1);

        }

        .navbar-logo {
            height: 50px;
            width: 200px;
        }

        #tech {
            width: 150px;
            height: 35px;
            border: none;
            color: white;
            background-color: rgba(43, 85, 205, 1);
            border-radius: 10px;
            box-shadow: inset 0 0 0 0 #81CC16;
            transition: ease-out 1s;
            font-size: 16px;
            outline: none;
        }

        #tech:hover {
            box-shadow: inset 300px 0 0 0 #81CC16;
            cursor: pointer;
            color: black;

        }
    </style>


</body>

</html>