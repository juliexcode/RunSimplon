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

    </div>
</body>

</html>