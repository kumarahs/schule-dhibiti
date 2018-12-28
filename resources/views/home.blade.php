<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Schule-dhibiti</title>
        <link rel="icon" href="" sizes="32x32" />
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
                <section class="col-sm-12 col-md-5">
                    <div>
                        <img src="{{asset('image/logo.png')}}" alt="logo du produit" id="logo" />
                    </div>
                </section>
                <!-- section du login -->
                <section class="col-sm-12 col-md-5">
                    <div>
                        <a href="{{ route('login') }}" id="login" class="btn purple-gradient btn-sm">login</a>
                    </div>
                </section>

            </header>
            <!-- fin contenu du header  -->

            <!-- debut du contenu principal  -->
            <section class="row">
                <div class="col-sm-12 col-md-12 unique-color-dark">
                    <!-- debut caroussel -->
                    <div id="main_caroussel" class="carousel slideInDown carousel-fade" data-ride="carousel">
                        <!-- index de navigation sous forme de liste ordonnée -->
                        <ol class="carousel-indicators">
                            <li data-target="#main_caroussel" data-slide-to="0" class="active"></li>
                            <li data-target="#main_caroussel" data-slide-to="1" class="active"></li>
                            <li data-target="#main_caroussel" data-slide-to="2" class="active"></li>
                            <li data-target="#main_caroussel" data-slide-to="3" class="active"></li>
                        </ol>

                        <!-- debut contenu du caroussel -->
                        <div class="carousel-inner white" role="listbox">
                            <!--premier slide-->
                            <div class="carousel-item active animated fadeInLeft slower">
                                <div class="row">
                                    <section class="my_caroussel_content col-sm-7 col-md-7">
                                        <h5>Sanat K</h5>
                                        <hr/>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat fugiat, laboriosam, voluptatem,
                                            optio vero odio nam sit officia accusamus minus error nisi architecto nulla ipsum dignissimos.
                                            Odit sed qui, dolorum!.</p>
                                    </section>
                                    <section class="col-sm-5 col-md-5">
                                        <img class="d-block w-100" src="{{ asset('image/carousel/img_0.jpg') }}" alt="carousel principal">
                                    </section>
                                </div>
                            </div>

                            <!--second slide-->
                            <div class="carousel-item animated fadeInRight slower">
                                <div class="row">
                                    <section class="my_caroussel_content col-sm-7 col-md-7">
                                        <h5>Guy K</h5>
                                        <hr/>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat fugiat, laboriosam, voluptatem,
                                            optio vero odio nam sit officia accusamus minus error nisi architecto nulla ipsum dignissimos.
                                            Odit sed qui, dolorum!.</p>
                                    </section>
                                    <section class="col-sm-5 col-md-5">
                                        <img class="d-block w-100" src="{{ asset('image/carousel/img_1.jpg') }}" alt="carousel principal">
                                    </section>
                                </div>
                            </div>

                            <!--troisième slide-->
                            <div class="carousel-item animated fadeInLeft slower">
                                <div class="row">
                                    <section class="my_caroussel_content col-sm-7 col-md-7">
                                        <h5>Lucien B</h5>
                                        <hr/>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat fugiat, laboriosam, voluptatem,
                                            optio vero odio nam sit officia accusamus minus error nisi architecto nulla ipsum dignissimos.
                                            Odit sed qui, dolorum!.</p>
                                    </section>
                                    <section class="col-sm-5 col-md-5">
                                        <img class="d-block w-100" src="{{ asset('image/carousel/img_2.jpg') }}" alt="carousel principal">
                                    </section>
                                </div>
                            </div>

                            <!--quatrième slide-->
                            <div class="carousel-item animated fadeInRight slower">
                                <div class="row">
                                    <section class="my_caroussel_content col-sm-7 col-md-7">
                                        <h5>GLS Corp.</h5>
                                        <hr/>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat fugiat, laboriosam, voluptatem,
                                            optio vero odio nam sit officia accusamus minus error nisi architecto nulla ipsum dignissimos.
                                            Odit sed qui, dolorum!.</p>
                                    </section>
                                    <section class="col-sm-5 col-md-5">
                                        <img class="d-block w-100" src="{{ asset('image/carousel/img_3.jpg') }}" alt="carousel principal">
                                    </section>
                                </div>
                            </div>
                        </div>
                        <!-- fin contenu du caroussel -->

                    </div>
                    <!-- fin caroussel -->
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
        <script>
            $(function(){
                $('.carousel').carousel({
                    interval: 10000
                });
            });
        </script>
    </body>
</html>
