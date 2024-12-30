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

        /*.search-container {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #f8f9fa;
        }

        */
        /* .card {
            max-width: 90%;
            border-radius: 10px;
            box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.1);
        } */

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
    <header id="header" class="header d-flex align-items-center">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
            <a href="/" class="logo d-flex align-items-center">
                <h1 class="sitename">HOHEYA</h1>
            </a>
            <nav id="navmenu" class="navmenu d-flex align-items-center">
                <a href="/" class="btn btn-outline-primary">Retour à l'accueil</a>
            </nav>
        </div>
    </header>

    {{-- <div class="search-container">
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
    </div> --}}
    <div class="search-container">
        <div class="card p-4 m-4">
            <h2 class="text-center mb-4">Recherchez votre logement</h2>
            <form id="searchForm" class="row g-3 d-flex align-items-end justify-content-between">
                <!-- Lieu -->
                <div class="col-md-3">
                    <label for="location" class="form-label visually-hidden">Logement</label>
                    <div class="input-group">
                        <span class="input-group-text bg-white border-end-0"><i class="bi bi-geo-alt"></i></span>
                        <input type="text" id="location" class="form-control border-start-0"
                            placeholder="Que cherchez-vous" oninput="filterAnnonces()">
                    </div>
                </div>
                <!-- Prix max -->
                <div class="col-md-3">
                    <label for="price" class="form-label">Prix max (FCFA)</label>
                    <input type="number" id="price" class="form-control" placeholder="Exemple : 50000"
                        oninput="filterAnnonces()">
                </div>
                <!-- Date de location -->
                <div class="col-md-3">
                    <label for="rental_date" class="form-label">Date de location</label>
                    <input type="date" id="rental_date" class="form-control" oninput="filterAnnonces()">
                </div>
                <!-- Colocation -->
                <div class="col-md-3">
                    <div class="form-check">
                        <input type="checkbox" id="colocation" class="form-check-input" onchange="filterAnnonces()">
                        <label for="colocation" class="form-check-label">Rechercher des colocations</label>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-10 mx-auto">
            <!-- List group-->
            <ul id="annoncesList" class="list-group shadow">
                @foreach ($annonces as $annonce)
                    <!-- list group item-->
                    <li class="list-group-item" data-titre="{{ strtolower($annonce->titre ?? '') }}"
                        data-price="{{ $annonce->prix }}" data-rental-date="{{ $annonce->date_location }}"
                        data-colocation="{{ $annonce->is_colocation ? 'true' : 'false' }}">
                        <!-- Custom content-->
                        <a href="" class="">
                            <div class="media align-items-lg-center flex-column flex-lg-row p-3">
                                <div class="media-body order-2 order-lg-1">
                                    <h5 class="mt-0 font-weight-bold mb-2">{{ $annonce->titre }}</h5>
                                    <p class="font-italic text-muted mb-0 small">
                                        {{ $annonce->description }}</p>
                                    <div class="d-flex align-items-center justify-content-between mt-1">
                                        <h6 class="font-weight-bold my-2">{{ $annonce->prix }} FCFA</h6>
                                        <span
                                            class="{{ $annonce->status == 'verified' ? 'text-success' : 'text-danger' }}">
                                            {{ $annonce->status }}</span>
                                    </div>
                                </div>
                                @php
                                    $files = json_decode($annonce->files);
                                @endphp
                                <div class="row d-flex align-items-center justify-content-between mx-auto">
                                    @foreach ($files as $file)
                                        <div class="col-md-3">
                                            @if ($file && @getimagesize(storage_path('app/public/' . $file)))
                                                <img src="{{ asset('storage/' . $file) }}"
                                                    alt="Generic placeholder image" width="200px" height="300px"
                                                    class="ml-lg-5 order-1 order-lg-2">
                                            @endif
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

    <script>
        function filterAnnonces() {
            const location = document.getElementById('location').value.toLowerCase();
            const price = parseInt(document.getElementById('price').value) || Infinity;
            const rentalDate = document.getElementById('rental_date').value;
            const colocation = document.getElementById('colocation').checked;

            const annonces = document.querySelectorAll('#annoncesList .list-group-item');

            annonces.forEach(annonce => {
                const annonceLocation = annonce.dataset.titre;
                const annoncePrice = parseInt(annonce.dataset.price);
                const annonceRentalDate = annonce.dataset.rentalDate;
                const annonceColocation = annonce.dataset.colocation === 'true';

                let isVisible = true;

                if (location && !annonceLocation.includes(location)) {
                    isVisible = false;
                }

                if (price && annoncePrice > price) {
                    isVisible = false;
                }

                if (rentalDate && rentalDate !== annonceRentalDate) {
                    isVisible = false;
                }

                if (colocation && !annonceColocation) {
                    isVisible = false;
                }

                annonce.style.display = isVisible ? '' : 'none';
            });
        }
    </script>
    <!-- Vendor JS Files -->
    <script src="landing/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>
