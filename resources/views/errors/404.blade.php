<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Schule-dhibiti</title>
    <link rel="icon" href="" sizes="32x32" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('css/mdb.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('css/error.css')}}" />
    <link rel="stylesheet" href="{{ asset('font/iconfont/material-icons.css') }}" />

</head>
<body>

<!-- debut contenu du body  -->
<main class="container-fluid unique-color-dark">

    <!-- debut du contenu principal  -->
    <section class="row eror_content">
        <div class="col-sm-12 col-md-12">
           <h3>Ereur de chargement du fichier : 404 <span class="detail">, File not found !!</span> </h3>
            <hr>
            <p>La page que vous demandez n'existe pas !</p>
            <p><a href="{{ route('home') }}" class="btn btn-outline-mdb-color"><i class="material-icons small left-align">home</i><span>page d'acceuil</span></a></p>
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
