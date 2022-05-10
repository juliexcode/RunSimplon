<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <!-- Trigger the modal with a button -->
        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Ajouter un technicien</button>

        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Ajouter un technicien</h4>
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Nom</label>
                        <input type="text" name="nom" class="form-control" id="nom">
                        <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Prenom</label>
                        <input type="text" name="prenom" class="form-control" id="prenom">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">E-mail</label>
                        <input type="text" name="email" class="form-control" id="email">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">N° de telephone</label>
                        <input type="text" name="tel" class="form-control" id="tel">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Mot de passe</label>
                        <input type="text" name="passe" class="form-control" id="passe">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Confirmation de mot de passe</label>
                        <input type="text" name="confirm" class="form-control" id="confirm">
                    </div>
                    </div>
                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Ajouter</button>
                    </div>
                </div>

            </div>
        </div>

    </div>

</body>

</html>