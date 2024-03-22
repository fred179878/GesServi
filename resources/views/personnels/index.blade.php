<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Personnels</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #310267;
            color: white;
            font-family: 'Roboto', sans-serif;
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
    <a href="{{ route('personnels.create') }}" class="btn btn-primary">Ajouter un personnel</a>
    <button type="button" onclick="window.location='{{ route('personnels.create') }}'" class="btn btn-primary">Ajouter un personnel</button>


    <div class="container mt-5">
        <h1 class="text-center">Liste des Personnels</h1>
        <div class="row justify-content-center">
            @foreach($personnels as $personnel)
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
</body>
</html>
