




<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

{{--
<style>
    body {
        /* background-image: url('/images/votre-image.jpg'); Remplacez "votre-image.jpg" par le nom de votre image */
        background: #310267;
        background-size: cover;
        background-repeat: no-repeat;
        color: white;
        font-family: 'Roboto', sans-serif; /* Police recommandée */
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
        margin: 0;
    }
    .card {
        border: 2px solid #1D44E1;
        border-radius: 10px;
        background: linear-gradient(135deg, #310267, #1D44E1);
        color: white;
        font-family: 'Roboto', sans-serif; /* Police recommandée */
    }
    .card-title {
        color: #C41FB3;
        text-align: center;
    }
    .card-body {
        text-align: center;
    }
</style> --}}

</head>

<body>



    <div class="container">
        <h2>Ajouter un personnel</h2>
        <form action="{{ route('personnels.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nom">Nom :</label>
                <input type="text" class="form-control" id="nom" name="nom" required>
            </div>
            <div class="form-group">
                <label for="prenom">Prénom :</label>
                <input type="text" class="form-control" id="prenom" name="prenom" required>
            </div>
            <div class="form-group">
                <label for="adresse">Adresse :</label>
                <input type="text" class="form-control" id="adresse" name="adresse" required>
            </div>
            <div class="form-group">
                <label for="email">Email :</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="num_mobile">Numéro de mobile :</label>
                <input type="text" class="form-control" id="num_mobile" name="num_mobile" required>
            </div>
            <div class="form-group">
                <label for="date_recrutement">Date de recrutement :</label>
                <input type="date" class="form-control" id="date_recrutement" name="date_recrutement" required>
            </div>
            <div class="form-group">
                <label for="numero_service">Numéro du service :</label>
                <input type="text" class="form-control" id="numero_service" name="numero_service" required>
            </div>
            <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
    </div>



</body>
</html>
