<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Employés par Service</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #310267;
            color: white;
            font-family: 'Roboto', sans-serif;
        }
        .service-group {
            background-color: #5E00C7;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 20px;
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
        <h1 class="text-center">Liste des Employés par Service</h1>
        @foreach($services as $service)
            <div class="service-group">
                <h2 class="text-center">{{ $service->nom_service }}</h2>
                <div class="row justify-content-center">
                    @foreach($service->personnels as $personnel)
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title text-center">{{ $personnel->nom }} {{ $personnel->prenom }}</h5>
                                    <p class="card-text text-center">{{ $personnel->email }}</p>
                                    <p class="card-text text-center">{{ $personnel->num_mobile }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
</body>
</html>
