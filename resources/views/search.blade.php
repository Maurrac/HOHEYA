<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>HOHEYA - Trouvez votre logement idéal</title>
    <meta name="description" content="Plateforme pour la recherche de location et colocation au Bénin.">
    <meta name="keywords" content="logement, colocation, Bénin, étudiants, location">

    <!-- Favicons -->
    <link href="landing/img/favicon.png" rel="icon">
    <link href="landing/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&family=Nunito:wght@400;600;700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="landing/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="landing/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="landing/css/main.css" rel="stylesheet">
    <style>
        body,
        html {
            height: 100%;
            margin: 0;
        }

        .search-container {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #f8f9fa;
            /* Optionnel : couleur de fond */
        }

        .card {
            max-width: 600px;
            border-radius: 10px;
            box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.1);
        }

        .form-control {
            border-radius: 5px;
        }

        .btn-primary {
            width: 100%;
            padding: 10px;
        }
    </style>
</head>

<body>

    <!-- Header -->
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
            <a href="/" class="logo d-flex align-items-center">
                <h1 class="sitename">HOHEYA</h1>
            </a>
            <nav id="navmenu" class="navmenu d-flex align-items-center">
                <a href="/" class="btn btn-outline-primary">Retour à l'accueil</a>
            </nav>
        </div>
    </header>

    <div class="search-container">
        <div class="card p-4">
            <h2 class="text-center mb-4">Recherchez votre logement</h2>
            <form action="{{ route('search') }}" method="GET" class="row g-3">
                <!-- Lieu -->
                <div class="col-12">
                    <label for="location" class="form-label visually-hidden">Lieu</label>
                    <div class="input-group">
                        <span class="input-group-text bg-white border-end-0"><i class="bi bi-geo-alt"></i></span>
                        <input type="text" name="location" id="location" class="form-control border-start-0"
                            placeholder="Où allez-vous ?" required>
                    </div>
                </div>
                <!-- Prix max -->
                <div class="col-12">
                    <label for="price" class="form-label">Prix max (FCFA)</label>
                    <input type="number" name="price" id="price" class="form-control"
                        placeholder="Exemple : 50000" required>
                </div>
                <!-- Date de location -->
                <div class="col-12">
                    <label for="rental_date" class="form-label">Date de location</label>
                    <input type="date" name="rental_date" id="rental_date" class="form-control" required>
                </div>
                <!-- Colocation -->
                <div class="col-12">
                    <div class="form-check">
                        <input type="checkbox" name="colocation" id="colocation" class="form-check-input">
                        <label for="colocation" class="form-check-label">Rechercher des colocations</label>
                    </div>
                </div>
                <!-- Bouton de recherche -->
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Rechercher</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Vendor JS Files -->
    <script src="landing/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>
