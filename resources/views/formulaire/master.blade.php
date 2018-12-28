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
            <div><!-- ce chemin redirige vers l'action qui nous a conduit a cette page -->
                <a href="{{ route('admin') }}" id="back_home"><i class="material-icons">arrow_back</i></a>
            </div>
        </section>

    </header>
    <!-- fin contenu du header  -->

    <!-- debut du contenu principal  -->
    <section class="row main_content">
        <div class="col-sm-12 col-md-12 unique-color-dark" id="all_form">
            @yield('contenu')
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
<script type="text/javascript">
    $(function(){

    });
</script>
</body>
</html>
