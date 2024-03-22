<!DOCTYPE html>
<html>
<head>
    <title>Accueil</title>
</head>
<body>
    @include('partials.navbar')

    <div class="container mt-4">
        <!-- Contenu spécifique de la vue -->
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <h1>Liste des Services</h1>
    <ul>
        @foreach($services as $service)
            {{-- <li>{{ $service->numero_service }}</li> --}}
            <li>{{ $service->nom_service }}</li>
        @endforeach
    </ul>

    <h1>Liste des Personnels</h1>
    <ul>
        @foreach($personnels as $personnel)
            <li>{{ $personnel->nom }} {{ $personnel->prenom }}</li>
        @endforeach
    </ul>

    <h1>Liste des Employés Groupée par Service</h1>
    @foreach($services as $service)
        <h2>{{ $service->nom_service }}</h2>
        <ul>
            @foreach($service->personnels as $personnel)
                <li>{{ $personnel->nom }} {{ $personnel->prenom }}</li>
            @endforeach
        </ul>
    @endforeach
</body>
</html>
