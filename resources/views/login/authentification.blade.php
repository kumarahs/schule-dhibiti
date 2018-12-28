<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Schule-dhibiti</title>
    <link rel="icon" href="" sizes="32x32" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('css/mdb.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('css/login.css')}}" />
    <link rel="stylesheet" href="{{ asset('font/iconfont/material-icons.css') }}" />

</head>
<body>

<!-- debut contenu du body  -->
<main class="container-fluid">
    <!-- debut contenu du header  -->
    <header class="row">

        <!-- section du come back -->
        <section class="col-sm-12 col-md-5">
            <div>
                <a href="{{ route('home') }}" id="back_home"><i class="material-icons">arrow_back</i></a>
            </div>
        </section>

    </header>
    <!-- fin contenu du header  -->

    <!-- debut du contenu principal  -->
    <section class="row main_content">
        <div class="col-sm-12 col-md-12 unique-color-dark" id="login_form">

            <!-- debut du card -->
            <div class="card">
                <!-- titre du card -->
                <h5 class="card-header">
                    <strong>Authentification</strong>
                </h5>

                <!--contenu du card -->
                <div class="card-body">

                    <!-- debut formulaire -->
                    <form class="text-center">

                        <p>Entrer votre nom d'utilisateur et mot de passe pour vous connecter.</p>

                        <p>
                            <a href="#}" target="_blank">pour nous contacter.</a>
                        </p>

                        <!-- Nom d'utilisateur -->
                        <div class="md-form mt-3">
                            <input type="text" id="nom" name="nom" class="form-control">
                            <label for="nom">Nom d'utilisateur</label>
                        </div>

                        <!-- Mot de passe -->
                        <div class="md-form">
                            <input type="password" id="mot_passe" name="mot_passe" class="form-control">
                            <label for="mot_passe">Mot de passe</label>
                        </div>

                        <!-- bouton de connexion -->
                        <input class="btn" type="submit" value="Connecter"/>

                    </form>
                    <!-- fin du formulaire -->

                </div>
                <!--contenu du card -->
            </div>
            <!-- fin du card -->
        </div>

    </section>
    <!-- fin contenu du principal  -->


</main>
<!-- fin contenu du body  -->

<!-- importation des tout mes script JS -->

<script type="text/javascript" src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/popper.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/mdb.min.js') }}"></script>
</body>
</html>
