<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">


<style>
    body {
        /* background-image: url('/images/votre-image.jpg'); Remplacez "votre-image.jpg" par le nom de votre image */
        background: #ffffff;
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
</style>

</head>

<body>




    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Liste des Services</h5>
                        {{-- <p class="card-text">Accédez à la liste complète des services.</p> --}}
                        <a href="{{ route('services.index') }}" class="btn btn-outline-success">Accéder</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Liste des Personnels</h5>
                        {{-- <p class="card-text">Accédez à la liste complète des personnes.</p> --}}
                        <a href="{{ route('personnes.index') }}" class="btn btn-outline-warning">Accéder</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Employés par Service</h5>
                        {{-- <p class="card-text">Accédez à la liste des employés regroupés par service.</p> --}}
                        <a href="{{ route('employes_par_service') }}" class="btn btn-outline-info">Accéder</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
