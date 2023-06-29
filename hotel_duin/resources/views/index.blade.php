<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>Hotel ten Duin</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <link rel="stylesheet" href="<?php echo asset('css/style.css')?>" type="text/css"> 
    </head>
    <body id="page-top">

    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="#">Hotel Ten Duin</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#about">Over ons</a></li>
                    <li class="nav-item"><a class="nav-link" href="#signup">Kamers</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    <li class="nav-item">
                      @if (Auth::check())
                      <a class="nav-link" href="login">Welkom {{Auth::user()->name}}</a>
                      @else
                      <a class="nav-link" href="login">Log in</a>
                      @endif
                    </li>
                </ul>
            </div>
        </div>
    </nav>
        

        <!-- About-->
        <section class="about-section text-center" id="about">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8">
                        <h2 class="text-white mb-4">Over ons</h2>
                        <p class="text-white-50">
                            Noordwijk is een prachtige kustplaats in Nederland, met een lange strook van mooie stranden en een bruisend nachtleven. Als je op zoek bent naar een plek om te verblijven, is het Grand Hotel Huis ter Duin een uitstekende optie.
                            <br>
                            <br>
                            Dit hotel ligt direct aan het strand en biedt een adembenemend uitzicht op de Noordzee. Het beschikt over elegante kamers en suites, allemaal voorzien van moderne voorzieningen en luxueuze badkamers. De suites hebben zelfs een eigen balkon of terras met uitzicht op de zee.
                            <br>
                            <br>
                            Het Grand Hotel Huis ter Duin heeft ook uitstekende eetgelegenheden, waaronder het met een Michelin-ster bekroonde restaurant Latour. Andere voorzieningen zijn onder meer een binnenzwembad, een sauna en een fitnessruimte.
                            <br>
                            <br>
                            Of je nu op zoek bent naar een romantisch uitje, een zakelijke bijeenkomst of gewoon een ontspannende vakantie aan zee, het Grand Hotel Huis ter Duin is een fantastische keuze in Noordwijk.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="projects-section bg-light" id="projects">
            <div class="container px-4 px-lg-5">
                <div class="row gx-0 mb-4 mb-lg-5 align-items-center">
                    <div class="col-xl-8 col-lg-7"><img class="img-fluid mb-3 mb-lg-0" src="{{url('/image/index/bg-masthead.jpg')}}" alt="..." /></div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="featured-text text-center text-lg-left">
                            <h4>5 sterren</h4>
                            <p class="text-black-50 mb-0">Het Grand Hotel Huis ter Duin is een 5-sterrenhotel vanwege de uitstekende locatie aan het strand, de elegante kamers en suites met moderne voorzieningen en luxueuze badkamers, de Michelin-ster bekroonde restaurants, en de vele faciliteiten, waaronder een binnenzwembad, sauna en fitnessruimte.</p>
                        </div>
                    </div>
                </div>
                <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                    <div class="col-lg-6"><img class="img-fluid" src="{{url('/image/index/demo-image-01.jpg')}}" alt="..." /></div>
                    <div class="col-lg-6">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-left">
                                    <h4 class="text-white">Wellness center</h4>
                                    <p class="mb-0 text-white-50">Laat uzelf en uw partner verwennen in het MC Wellness Centre. Omringd door heerlijke geuren en warme, diepe kleuren zorgen de specialistes ervoor dat het u aan niets ontbreekt. De vertrekken ademen een Oosterse sfeer met zachte, natuurlijke materialen. Boek een full body massage om volledig tot rust te komen.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gx-0 justify-content-center">
                    <div class="col-lg-6"><img class="img-fluid" src="{{url('/image/index/demo-image-02.jpg')}}" alt="..." /></div>
                    <div class="col-lg-6 order-lg-first">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-right">
                                    <h4 class="text-white">Breakers Beach house</h4>
                                    <p class="mb-0 text-white-50">Even een momentje voor uzelf of met uw familie of vrienden? Kom dan naar Breakers Beach House. Met het geluid van de zee als achtergrond en een stukje vis als lunch, komt u helemaal tot rust. Do you need a break? Come to Breakers!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="signup-section" id="signup">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5">
                    <div class="col-md-10 col-lg-8 mx-auto text-center">
                        <i class="fa-solid fa-right-to-bracket fa-2x" id="reserveer-text" style="color: #ffffff;"></i>
                        <h2 class="text-white">Reserveer een kamer!</h2>
                            <div class="row">
                                <div class="container text-center">
                                    <br>
                                <a class="btn btn-primary" href="kamers">Reserveer</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <section class="contact-section bg-black" id="contact">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Address</h4>
                                <hr class="my-4 mx-auto"/>
                                <div class="small text-black-50">Kon. Astrid Boulevard 5, 2202 BK Noordwijk</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-envelope text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Email</h4>
                                <hr class="my-4 mx-auto" />
                                <div class="small text-black-50"><a href="https://www.youtube.com/watch?v=sfj-exjoBKo">info@huisterduin.nl</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-mobile-alt text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Telefoon</h4>
                                <hr class="my-4 mx-auto" />
                                <div class="small text-black-50">+31 71 361 9220</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="social d-flex justify-content-center">
                    <a class="mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                    <a class="mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                    <a class="mx-2" href="#!"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </section>
       <footer class="footer bg-black small text-center text-white-50"><div class="container px-4 px-lg-5">Copyright &copy; Hotel Ter Duin 2023</div></footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{ URL('js/scripts.js') }}"></script>
    </body>
</html>


