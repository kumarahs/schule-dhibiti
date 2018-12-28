<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>init Laravel</title>
    <link rel="icon" href="" sizes="32x32" />
    <link rel="stylesheet" href="{{ asset('css/materialize.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('css/mdb.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('css/style.css')}}" />
    <link rel="stylesheet" href="{{ asset('font/iconfont/material-icons.css') }}" />

</head>
<body>

<!-- debut contenu du body  -->
<main class="container-fluid">
    <!-- debut contenu du header  -->
    <header class="row">
        <!-- section du logo -->
        <section class="col-sm-12 col-md-2">
            <div>
                <img id="my_logo" src="{{ asset('image/profil/profil.jpg') }}" alt="image du profil internaute" />
            </div>
        </section>

        <!-- bouton menu -->
        <a href="" id="menu" data-activates="demo" class="btn-colpse right"><i class="material-icons small">menu</i></a>

        <div>
            <div class="side-nav" id="demo">
                <p>User name</p>
                <div class="navigation">
                    <a href="{{ route('home') }}"><i class="material-icons small">home</i><span>Home</span></a>
                    <a href="{{ route('login') }}"><i class="material-icons small">exit_to_app</i><span>Exit</span></a>
                    <a href="{{ route('home') }}"><i class="material-icons small">home</i><span>Home</span></a>
                    <a href="{{ route('login') }}"><i class="material-icons small">exit_to_app</i><span>Exit</span></a>
                </div>

            </div>
        </div>

    </header>
    <!-- fin contenu du header  -->

    <!-- debut du contenu principal  -->
    <section class="row">
        <div class="col-sm-12 col-md-12">
            @yield('contenu')
        </div>
    </section>
    <!-- fin contenu du principal  -->

    <!-- debut contenu du footer  -->
    <footer class="page-footer font-small  unique-color">

        <!-- Footer Links -->
        <div class="container">

            <!-- Grid row-->
            <div class="row text-center d-flex justify-content-center pt-4 mb-1">

                <!-- Grid column -->
                <div class="col-md-2 mb-2">
                    <h6 class="text-uppercase font-weight-bold">
                        <a href="#!">About us</a>
                    </h6>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-2 mb-2">
                    <h6 class="text-uppercase font-weight-bold">
                        <a href="#!">Products</a>
                    </h6>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-2 mb-2">
                    <h6 class="text-uppercase font-weight-bold">
                        <a href="#!">Awards</a>
                    </h6>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-2 mb-2">
                    <h6 class="text-uppercase font-weight-bold">
                        <a href="#!">Help</a>
                    </h6>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-2 mb-2">
                    <h6 class="text-uppercase font-weight-bold">
                        <a href="#!">Contact</a>
                    </h6>
                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row-->
            <hr class="rgba-white-light" style="margin: 0 15%;">

            <!-- Grid row-->
            <div class="row d-flex text-center justify-content-center mb-md-0 mb-4">

                <!-- Grid column -->
                <div class="col-md-8 col-12 mt-3">
                    <p style="line-height: 1.7rem">
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem
                        aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                    </p>
                </div>
                <!-- Grid column -->

            </div>

        </div>
        <!-- Footer Links -->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2018 Copyright :
            <a href="https://gls-corporation.com"> GLS-Corporation.com</a>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->
    <!-- fin contenu du footer  -->
</main>
<!-- fin contenu du body  -->

<!-- importation des tout mes script JS -->

<script type="text/javascript" src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/popper.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/mdb.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/materialize.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/pie-chart.js') }}"></script>
<script>
    $(function(){
        $('.carousel').carousel({
            interval: 10000
        });

        $(".btn-colpse").sideNav({
            menuWidth: 300,
            edge: 'right',
            closeOnClick: true
        });
    });
</script>
<script type="text/javascript">

    $(document).ready(function () {
        $('#demo-pie-1').pieChart({
            barColor: '#68b828',
            trackColor: '#eee',
            lineCap: 'round',
            lineWidth: 10,
            onStep: function (from, to, percent) {
                $(this.element).find('.pie-value').text(Math.round(percent) + '%');
            }
        });

        $('#demo-pie-2').pieChart({
            barColor: '#7c38bc',
            trackColor: '#eee',
            lineCap: 'butt',
            lineWidth: 10,
            onStep: function (from, to, percent) {
                $(this.element).find('.pie-value').text(Math.round(percent) + '%');
            }
        });

        $('#demo-pie-3').pieChart({
            barColor: '#0e62c7',
            trackColor: '#eee',
            lineCap: 'square',
            lineWidth: 10,
            onStep: function (from, to, percent) {
                $(this.element).find('.pie-value').text(Math.round(percent) + '%');
            }
        });


    });

</script>
</body>
</html>
