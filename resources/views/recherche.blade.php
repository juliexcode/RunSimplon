<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">



        <h1>TECHNICIEN</h1>
        <form class="d-flex" action="{{Route('admin.users.tech.recherche')}}">
            <input class="form-control me-2" type="search" placeholder="Search" name='q'>
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>

        <table class="table table-borderless table-hover">
            <thead>
                <tr>
                    <th scope="col" style="color:black">NOM</th>
                    <th scope="col">PRENOM</th>
                    <th scope="col">E-MAIL</th>


                </tr>
            </thead>
            @foreach($benefs as $benef)
            <tbody>
                <tr>
                    <td>{{$benef->prenom}}</td>
                    <td>{{$benef->name}}</td>
                    <td>{{$benef->matricule}}</td>

                </tr>


            </tbody>
            @endforeach
        </table>
    </div>
</body>

</html>