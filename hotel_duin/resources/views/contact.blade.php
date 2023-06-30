<!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" type="text/css" href="css/styles.css">
   <link rel="stylesheet" type="text/css" href="css/contact.css">
   <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo asset('css/style.css')?>" type="text/css"> 
   <title>Hotel ten Duin</title>
    </head>
     <body>
     <div class="page-top">
     <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="#">Hotel Ten Duin</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="/#about">Over ons</a></li>
                    <li class="nav-item"><a class="nav-link" href="kamers">Kamers</a></li>
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
    </div>
<style>
    
body{
    padding: 0px;
    margin: 0px;
    font-family: sans-serif;

   }


 .container{
      width: 90%;
      margin: auto;
      overflow: hidden;
    }
    /* contact form css */


    #contact-section{
      background: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.9)),url(../imgs/contact.jpg);
      background-size: cover;
      background-position: center;
      height: 100%;
      width: 100% ;
      padding-bottom: 2%;
    }

    #contact-section .container h2{
      text-align: center;
       text-decoration: underline;
        /* text-decoration-color:red; */
        text-underline-position: under;
        color: rgb(238, 235, 235);
        letter-spacing: 2px;

    }



    #contact-section .container p{
      text-align: center;
      width: 70%;
      margin-left: auto;
       margin-right: auto;
       padding-bottom: 3%;
       color: #fff;
       letter-spacing:3px;
    }

    .contact-form i.fa{
      /* color: red; */
      /* color: #fff; */
      font-size: 22px;
      padding: 3%;
      background-color: none;
      border-radius: 80%;
      margin: 2%;
      /* border: 2px solid #fff; */
      cursor: pointer;
      border:2px solid rgb(190, 190, 190);
      color: rgb(190, 190, 190);
    }

    .contact-form i.fa:hover{
      cursor: pointer;
      border:2px solid white;
      color: white;
    }

      .contact-form{
        display: grid;
        grid-template-columns: auto auto;
         }

      .form-info{
        font-size: 16px;
        font-style: italic;
        color: white;
        letter-spacing: 2px;
      }
      input{
        padding: 10px;
        margin:10px;
        width: 70%;
        background-color:rgba(136, 133, 133, 0.5);
        color: white;
        border: none;
        outline:none;
      }

      input::placeholder{
        color: white;
      }

       textarea{
      padding: 10px;
      margin: 10px;
      width: 70%;
      background-color:rgba(136, 133, 133, 0.5);
      color: white;
      border: none;
      outline:none;
     }
     textarea::placeholder{
       color: white;
     }



      .submit{
      width: 40%;
      background: none;
      padding: 4px;
      outline: none;
       /* border: 1px solid #fff;
      color: #fff; */
      font-size: 13px;
      font-weight: bold;
      letter-spacing: 2px;
      height: 33px;
      text-align: center;
      cursor: pointer;
      letter-spacing: 2px;
      margin-left: 3%;
      border:2px solid rgb(190, 190, 190);
      color: rgb(190, 190, 190);
     }

     .submit:hover{
           border: 1px solid #fff;
      color: #fff;
      cursor: pointer;
     }

        /* media queries */
    @media (max-width: 768px){

 #contact-section .contact-form{
        display: block;
        width: 100%;
        text-align: center;
      }
      #contact-section .submit{

        width: 60%;
      }

  }
</style>

   <!-- contact section -->
         <section id="contact-section">
           <div class="container">
           	 <h2>Contact Us</h2>
              <p>Email us and keep upto date with our latest news</p>
             <div class="contact-form">

                  <!-- First grid -->


                   <!-- second grid -->
           <div>
             <form>
               <input type="text" placeholder="Your Name" required>
               <input type="text" placeholder="Last Name"><br>
               <input type="Email" placeholder="Email" required><br>
               <input type="text" placeholder="Subject of this message"><br>
               <textarea name="message" placeholder="Message" rows="5" required></textarea><br>
               <button class="submit" >Send Message</button>
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