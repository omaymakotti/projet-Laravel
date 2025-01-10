<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Gestion Cours') }}</title>
    
    <!-- Lien vers le fichier CSS personnalisé -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="{{ route('courses.index') }}">Accueil</a></li>
                <li><a href="{{ route('courses.create') }}">Ajouter un cours</a></li>
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>
</body>
</html>
