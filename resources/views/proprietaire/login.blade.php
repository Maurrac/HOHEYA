<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>HOHEYA - La solution parfaite pour votre location</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <style>
        body {
            margin-top: 20px;
            background: #eee;
        }

        .container {
            margin-right: auto;
            margin-left: auto;
            padding-right: 15px;
            padding-left: 15px;
            width: 100%;
        }

        @media (min-width: 576px) {
            .container {
                max-width: 540px;
            }
        }

        @media (min-width: 768px) {
            .container {
                max-width: 720px;
            }
        }

        @media (min-width: 992px) {
            .container {
                max-width: 960px;
            }
        }

        @media (min-width: 1200px) {
            .container {
                max-width: 1140px;
            }
        }



        .card-columns .card {
            margin-bottom: 0.75rem;
        }

        @media (min-width: 576px) {
            .card-columns {
                column-count: 3;
                column-gap: 1.25rem;
            }

            .card-columns .card {
                display: inline-block;
                width: 100%;
            }
        }

        .text-muted {
            color: #9faecb !important;
        }

        p {
            margin-top: 0;
            margin-bottom: 1rem;
        }

        .mb-3 {
            margin-bottom: 1rem !important;
        }

        .input-group {
            position: relative;
            display: flex;
            width: 100%;
        }
    </style>
</head>

<body>
    <br>
    <br>
    <div class="container">
        @if (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card-group mb-0">
                    <div class="card p-4">
                        <div class="card-body">
                            <form action="{{ route('proprietaire.login') }}" method="POST">
                                @csrf
                                <h1>Connexion</h1>
                                <p class="text-muted">Connectez-vous à votre compte</p>
                                <input type="text" name="user_type" value="proprietaire" hidden>
                                <div class="input-group mb-3">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input type="email" name="email" class="form-control" placeholder="Email">
                                </div>
                                <div class="input-group mb-4">
                                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                    <input type="password" name="password" class="form-control"
                                        placeholder="Mot de passe">
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <button type="submit" class="btn btn-primary px-4">Connexion</button>
                                    </div>
                                    <div class="col-6 text-right">
                                        <button type="button" class="btn btn-link px-0">mot de passe oublié?</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card text-white bg-primary py-5 d-md-down-none" style="width:44%">
                        <div class="card-body text-center">
                            <div>
                                <h2>Inscrivez-vous</h2>
                                <p>Rejoignez-nous dès aujourd'hui pour accéder à nos services exclusifs ! Gagnez du
                                    temps dans la gestion de vos biens, améliorez vos processus et profitez d'une
                                    assistance sur mesure.</p>
                                <a href="{{ route('proprietaire.inscription') }}"
                                    class="btn btn-primary active mt-3">Créer un compte maintenant !</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>
