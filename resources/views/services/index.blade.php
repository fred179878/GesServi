<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Services</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <style>
        body {
            background-color: #310267;
            color: white;
            font-family: 'Roboto', sans-serif; /* Police recommandée */
        }
        .card {
            margin: 20px auto;
            max-width: 300px;
            border: 2px solid #1D44E1;
            border-radius: 10px;
            background: linear-gradient(135deg, #310267, #1D44E1);
        }
        .card-title {
            color: #C41FB3;
        }
    </style>

</head>
<header>
    @include('partials.navbar')

    <div class="container mt-4">
        <!-- Contenu spécifique de la vue -->
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</header>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Liste des Services</h1>
        <div class="row justify-content-center">
            @foreach($services as $service)
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title text-center">{{ $service->nom_service }}</h5>
                            <p class="card-text text-center">Nombre d'employés: {{ $service->nombre_employe }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>
