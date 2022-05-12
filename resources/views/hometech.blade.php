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
        <?php



        $email = session('email');
        echo "<h4 style='background-color:blue'>" . $email . "<h4>";
        ?>
        <h1>TECHNICIEN</h1>
    </div>
</body>

</html>