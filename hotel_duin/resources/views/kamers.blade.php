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
                        <li class="nav-item"><a class="nav-link" href="contact">Contact</a></li>
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

        <header class="masthead">
            <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
                <div class="d-flex justify-content-center">
                    <div class="text-center">
                        <h1 class="mx-auto my-0 text-uppercase">Kamers</h1>
                        <br>
                        <a class="btn btn-primary" href="#about">Ga verder</a>
                    </div>
                </div>
            </div>
        </header>
        <!-- About-->
        <section class="about-section text-center" id="about">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8">
                        <h2 class="text-white mb-4">Reservering informatie</h2>
                        <p class="text-white-50"> 
                            <br>
                            Selecteer datum.
                            <br>
                            <form action="">
                            <label for="begin" class="text-white-50">Begin:</label>
                            <input type="date" id="begin" name="begin_reserveer"><br><br>
                            <label for="tot" class="text-white-50">Tot:</label>
                            <input type="date" id="tot" name="eind_reserveer"><br><br>
                            <input type="submit" class="btn btn-primary" value="Check beschikbaarheid">
                            </form>
                    </div>
                </div>
            </div>
        </section>
        <section class="projects-section bg-light" id="projects">
            <div class="container px-4 px-lg-5">
                <div class="row gx-0 mb-4 mb-lg-5 align-items-center">
                    <div class="row gx-4 gx-lg-5 justify-content-center">
                        <div class="col-lg-8">
                            <h2 class="text-black mb-4">Kamers</h2>
                            <p class="text-white-50">
                            </p>
                        </div>
                    </div>
                    
<div class="row">
<div class="col-sm-3">
    @foreach ($data as $kamer)
    <div class="card" style="width: 18rem;">
        <?php foreach (json_decode($kamer->filename)as $picture) { ?>
            <img src="{{ asset('/image/'.$picture) }}" class="card-img-top" style="width: 280px; height:250px;"/>
           <?php } ?>
        <div class="card-body">
          <h5 class="card-title">{{$kamer->kamer}}</h5>
          <p class="card-text">Beschrijving</p>
          <a href="detail?id={{$kamer->id}}" class="btn btn-primary">Details</a>
        </div>
      </div>
    @endforeach
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
