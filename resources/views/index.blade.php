<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>HOHEYA-la solution parfaite pour votre Location </title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="landing/img/favicon.png" rel="icon">
    <link href="landing/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="landing/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="landing/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="landing/vendor/aos/aos.css" rel="stylesheet">
    <link href="landing/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="landing/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="landing/css/main.css" rel="stylesheet">


</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center fixed-top">
        <div
            class="header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

            <a href="" class="logo d-flex col-md-2 align-items-center me-auto me-xl-0">

                <h1 class="sitename">HOHEYA</h1>
            </a>

            <nav id="navmenu" class="navmenu col-md-4">
                <ul>
                    <li><a href="/" class="active">Accueil</a></li>
                    <li><a href="#contact" class="active">Contacts</a></li>
                    <li><a href="{{ route('search') }}">Rechercher</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            <div class="dropdown col-md-2">
                <button class="btn btn-getstarted dropdown-toggle" type="button" id="dropdownMenuButton1"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    S'inscrire
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="{{ route('proprietaire.inscription') }}">Je suis Propriétaire</a></li>
                    <li><a class="dropdown-item" href="{{ route('etudiant.inscription') }}">Je suis Etudiant</a></li>
                </ul>
            </div>
        </div>
    </header>

    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="hero-content" data-aos="fade-up" data-aos-delay="200">
                            <div class="company-badge mb-4">
                                <i class="bi bi-gear-fill me-2"></i>
                                Simplifiez votre recherche de logement
                            </div>

                            <h1 class="mb-4">
                                Trouvez le logement <br>
                                Idéal pour vous <br>
                                <span class="accent-text">En un seul clic</span>
                            </h1>

                            <p class="mb-4 mb-md-5">
                                Que vous soyez étudiant ou propriétaire, notre plateforme connecte vos besoins pour des
                                solutions de logement pratiques, économiques et adaptées. Découvrez une nouvelle façon
                                de louer ou de partager un logement.
                            </p>

                            <div class="hero-buttons">
                                <a href="{{ route('search') }}" class="btn btn-primary me-0 me-sm-2 mx-1">Se lancer</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="hero-image" data-aos="zoom-out" data-aos-delay="300">
                            <img src="landing/img/loca-illus.avif" alt="Hero Image" class="img-fluid">
                        </div>
                    </div>
                </div>

                {{-- <div class="row stats-row gy-4 mt-5" data-aos="fade-up" data-aos-delay="500">
                    <div class="col-lg-3 col-md-6">
                        <div class="stat-item">
                            <div class="stat-icon">
                                <i class="bi bi-trophy"></i>
                            </div>
                            <div class="stat-content">
                                <h4>3x Won Awards</h4>
                                <p class="mb-0">Vestibulum ante ipsum</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="stat-item">
                            <div class="stat-icon">
                                <i class="bi bi-briefcase"></i>
                            </div>
                            <div class="stat-content">
                                <h4>6.5k Faucibus</h4>
                                <p class="mb-0">Nullam quis ante</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="stat-item">
                            <div class="stat-icon">
                                <i class="bi bi-graph-up"></i>
                            </div>
                            <div class="stat-content">
                                <h4>80k Mauris</h4>
                                <p class="mb-0">Etiam sit amet orci</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="stat-item">
                            <div class="stat-icon">
                                <i class="bi bi-award"></i>
                            </div>
                            <div class="stat-content">
                                <h4>6x Phasellus</h4>
                                <p class="mb-0">Vestibulum ante ipsum</p>
                            </div>
                        </div>
                    </div>
                </div> --}}

            </div>

        </section><!-- /Hero Section -->

        <!-- About Section -->
        {{-- <section id="about" class="about section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4 align-items-center justify-content-between">

                    <div class="col-xl-5" data-aos="fade-up" data-aos-delay="200">
                        <span class="about-meta">À PROPOS DE NOUS</span>
                        <h2 class="about-title">Simplifiez la gestion locative et la colocation</h2>
                        <p class="about-description">Notre plateforme révolutionne la gestion locative pour les
                            étudiants et propriétaires.
                            Nous créons un pont entre les besoins en logement et les opportunités, tout en optimisant la
                            transparence et la simplicité.</p>

                        <div class="row feature-list-wrapper">
                            <div class="col-md-6">
                                <ul class="feature-list">
                                    <li><i class="bi bi-check-circle-fill"></i> Trouvez facilement un logement</li>
                                    <li><i class="bi bi-check-circle-fill"></i> Gestion intuitive des annonces</li>
                                    <li><i class="bi bi-check-circle-fill"></i> Application web intuitive</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="feature-list">
                                    <li><i class="bi bi-check-circle-fill"></i> Support dédié 24/7</li>
                                    <li><i class="bi bi-check-circle-fill"></i> Compatible étudiants et propriétaires
                                    </li>
                                    <li><i class="bi bi-check-circle-fill"></i> Système sécurisé </li>
                                </ul>
                            </div>
                        </div>

                        <div class="info-wrapper">
                            <div class="row gy-4">
                                <div class="col-lg-5">
                                    <div class="profile d-flex align-items-center gap-3">
                                        <img src="landing/img/IMG_9146_converted.webp" alt="CEO Profile"
                                            class="profile-image">
                                        <div>
                                            <h4 class="profile-name">Pirédy Maurrac</h4>
                                            <p class="profile-position">Analyste Programmeur</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="contact-info d-flex align-items-center gap-2">
                                        <i class="bi bi-telephone-fill"></i>
                                        <div>
                                            <p class="contact-label">Appelez-nous</p>
                                            <p class="contact-number">0151717137</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="image-wrapper">
                            <div class="images position-relative" data-aos="zoom-out" data-aos-delay="400">
                                <img src="landing/img/about-5.webp" alt="Business Meeting"
                                    class="img-fluid main-image rounded-4">
                                <img src="landing/img/about-2.webp" alt="Team Discussion"
                                    class="img-fluid small-image rounded-4">
                            </div>
                            <div class="experience-badge floating">
                                <h3>+3 <span>ans</span></h3>
                                <p>En développement d'Application</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </section><!-- /About Section -->
        <!-- Services Section -->
        <section id="services" class="services section light-background">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Nos Services</h2>
                <p>Des solutions adaptées pour chaque étape de la gestion locative et de la colocation</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row g-4">

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-card d-flex">
                            <div class="icon flex-shrink-0">
                                <i class="bi bi-activity"></i>
                            </div>
                            <div>
                                <h3>Gestion d'annonces</h3>
                                <p>Publiez, modifiez et gérez vos annonces en quelques clics. Propriétaires et
                                    colocataires peuvent interagir facilement.</p>
                                <a href="service-details.html" class="read-more">En savoir plus <i
                                        class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div><!-- End Service Card -->

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-card d-flex">
                            <div class="icon flex-shrink-0">
                                <i class="bi bi-diagram-3"></i>
                            </div>
                            <div>
                                <h3>Gestion des paiements</h3>
                                <p>Suivez et sécurisez les paiements de loyer via une plateforme intuitive et fiable.
                                </p>
                                <a href="service-details.html" class="read-more">En savoir plus <i
                                        class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div><!-- End Service Card -->

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-card d-flex">
                            <div class="icon flex-shrink-0">
                                <i class="bi bi-easel"></i>
                            </div>
                            <div>
                                <h3>Support dédié</h3>
                                <p>Un accompagnement personnalisé pour résoudre vos problèmes et répondre à vos
                                    questions 24/7.</p>
                                <a href="service-details.html" class="read-more">En savoir plus <i
                                        class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div><!-- End Service Card -->

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-card d-flex">
                            <div class="icon flex-shrink-0">
                                <i class="bi bi-clipboard-data"></i>
                            </div>
                            <div>
                                <h3>Sécurité des données</h3>
                                <p>Nous mettons la confidentialité et la sécurité de vos données au cœur de nos
                                    priorités.</p>
                                <a href="service-details.html" class="read-more">En savoir plus <i
                                        class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div><!-- End Service Card -->

                </div>

            </div>

        </section><!-- /Services Section --> --}}

        <!-- Contact Section -->
        <section id="contact" class="contact section light-background">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Contact</h2>
                <p>N'hésitez pas à nous contacter pour toute question ou demande spécifique.</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row g-4 g-lg-5">
                    <div class="col-lg-5">
                        <div class="info-box" data-aos="fade-up" data-aos-delay="200">
                            <h3>Informations de Contact</h3>
                            <p>Nous sommes disponibles pour répondre à toutes vos questions.</p>
                            <div class="info-item" data-aos="fade-up" data-aos-delay="300">
                                <div class="icon-box">
                                    <i class="bi bi-geo-alt"></i>
                                </div>
                                <div class="content">
                                    <h4>Localisation</h4>
                                    <p>BENIN</p>
                                    <p>Cotonou</p>
                                </div>
                            </div>

                            <div class="info-item" data-aos="fade-up" data-aos-delay="400">
                                <div class="icon-box">
                                    <i class="bi bi-telephone"></i>
                                </div>
                                <div class="content">
                                    <h4>Téléphone</h4>
                                    <p>0151717137</p>
                                    <p>0156773494</p>
                                </div>
                            </div>

                            <div class="info-item" data-aos="fade-up" data-aos-delay="500">
                                <div class="icon-box">
                                    <i class="bi bi-envelope"></i>
                                </div>
                                <div class="content">
                                    <h4>Adresse Mail</h4>
                                    <p>info@hoheya.com</p>
                                    <p>contact@hoheya.com</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7">
                        <div class="contact-form" data-aos="fade-up" data-aos-delay="300">
                            <h3>Contactez-nous</h3>
                            <p>Veuillez remplir le formulaire ci-dessous pour nous envoyer un message.</p>


                            <form action="forms/contact.php" method="post" class="php-email-form"
                                data-aos="fade-up" data-aos-delay="200">
                                <div class="row gy-4">

                                    <div class="col-md-6">
                                        <input type="text" name="name" class="form-control"
                                            placeholder="Votre Nome" required="">
                                    </div>

                                    <div class="col-md-6 ">
                                        <input type="email" class="form-control" name="email"
                                            placeholder="adresse mail" required="">
                                    </div>

                                    <div class="col-12">
                                        <input type="text" class="form-control" name="subject"
                                            placeholder="Le sujet" required="">
                                    </div>

                                    <div class="col-12">
                                        <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                                    </div>

                                    <div class="col-12 text-center">
                                        <div class="loading">Loading</div>
                                        <div class="error-message"></div>
                                        <div class="sent-message">Your message has been sent. Thank you!</div>

                                        <button type="submit" class="btn">Envoyer</button>
                                    </div>

                                </div>
                            </form>

                        </div>
                    </div>

                </div>

            </div>

        </section><!-- /Contact Section -->

    </main>

    <footer id="footer" class="footer">

        <div class="container copyright text-center mt-4">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">HOHEYA</strong> <span>Tous droits réservés</span>
            </p>
        </div>

    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="landing/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="landing/vendor/php-email-form/validate.js"></script>
    <script src="landing/vendor/aos/aos.js"></script>
    <script src="landing/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="landing/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="landing/vendor/purecounter/purecounter_vanilla.js"></script>

    <!-- Main JS File -->
    <script src="landing/js/main.js"></script>

</body>

</html>
