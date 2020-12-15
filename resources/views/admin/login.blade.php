<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
        <link rel="stylesheet" href="{{ url('uk/') }}/css/css.css">
    </head>
    <body>

    <!-- Start up-header  -->
    <section class="up-header">
        <div class="container">
           <div class="row">
               <div class="col-6">
                   <ul class="list-unstyled">
                       <li class="eemail mr-2">
                           <i class="far fa-envelope"></i>
                           <a href="mailto:support@rstheme.com">support@rstheme.com</a>
                       </li>
                       <li class="">
                          <i class="fas fa-map-marker-alt"></i>
                          <span>374 William S Canning Blvd, MA 2721, USA</span>
                      </li>
      
                   </ul>
               </div>
               
               <div class="col-6">
                  <ul class="list-unstyled text-sm-right">
                      <li class="login">
                          <i class="fas fa-sign-in-alt"></i>
                          <a href="#">login</a>
                      </li>
                      <li class="apply">
                         apply now
                     </li>
                     <li class="">
                      <i class="fas fa-phone-volume"></i>
                      <a href="#">(+880)155-69569</a>
                  </li>
                  </ul>
               </div>
           
              </div>
        </div>
      </section>
          <!-- End up-header  -->
          
  
        <!-- start modal -->
        <div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="timess">
                <i class="fas fa-times" data-dismiss="modal"></i>
            </div>
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="search her">
                      </div>
                </div>
              </div>
            </div>
          </div>
        <!-- end modal -->
        <!-- start Nav -->
        <nav class="navbar navbar-expand-lg px-lg-5 navbar-light py-lg-3 aboutNav ">
            <a class="navbar-brand mr-lg-5" href="{{ route('home') }}"><img class="img-fluid" src="{{ url('uk/') }}/img/dark-logo.png" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
          
            <div class="collapse  navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-lg-5 mr-auto ">
                <li class="nav-item">
                  <a class="nav-link px-lg-3 py-3 py-lg-0" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link px-lg-3 py-3 py-lg-0 activee" href="{{ route('about') }}">About</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle nav-link px-lg-3 py-3 py-lg-0" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Pages
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{ route('cheak') }}">Cirtification</a>
                      <a class="dropdown-item" href="{{ route('pages') }}">FAQ</a>
                    </div>
                </li>

                <li class="nav-item">
                  <a class="nav-link px-lg-3 py-3 py-lg-0" href="{{ route('contact') }}">Contact Us</a>
                </li>
              </ul>
              <form class="form-inline my-2 my-lg-0">
                <i class="fas fa-search " data-toggle="modal" data-target="#searchModal"></i>
              </form>
            </div>
          </nav>
        <!-- end Nav -->
  

        <section class="login py-5">
            <div class="container py-5">
                
                <form  method="post">
                  @include('uk.layouts.message')
                  @csrf
                    <div class="heading mb-4 text-center">
                        <h2>Login</h2>
                    </div>
                    <div class="row">
                        <div class="col-12 mb-4">
                            <input type="email" name="email" placeholder="User Name">
                        </div>
                        <div class="col-12 mb-4">
                            <input type="password" name="password" placeholder="Password">
                        </div>
                        <div class="col-12">
                            <button type="submit" >Login</button>
                           
                        </div>
                    </div>
                </form>
            </div>
        </section>



        <footer>
            <div class="container">
                <div class="row up-footer">
          
                    <div class="col-lg-4 about-ul col-md-6">
                      <h3>ADDRESS</h3>
                      <ul class="list-unstyled">
                          <li>
                             <i class="fas fa-map-marker-alt"></i>
                              <span>374 William S Canning Blvd</span>
                          </i>
                          </li>
                          <li>
                              <i class="fas fa-phone-volume"></i>
                              <span>(+880)155-69569</span>
                               </i>
                          </li>
                          <li>
                              <i class="far fa-envelope"></i>
                                 <span>support@rstheme.com</span>
                              </i>
                          </li>
                      </ul>
                  </div>
          
                  <div class="col-lg-4 col-md-6">
                      <h3> COURSES </h3>
                      <ul class="list-unstyled ulCourse">
                          <li><a href="{{ route('home') }}">Home</a></li>
                          <li><a href="{{ route('about') }}">About</a></li>
                          <li><a href="{{ route('certificate') }}">Cirtificte</a></li>
                          <li><a href="{{ route('pages') }}">FAQ</a></li>
                          <li><a href="{{ route('contact') }}">Contact</a></li>
                      </ul>
                  </div>
                  <div class="col-lg-4 col-md-6">
                      <h3>ABOUT</h3>
                      <p class="pp">We denounce with righteous indi gnation and dislike men who are so beguiled and demoralized by the charms of pleasure of your moment, so blinded by desire those who fail weakness.</p>
                  </div>
          
                </div>
          
                <div class="row down-footer">
                    <div class="col-md-4 col-12 text-center text-sm-left">
                        <div> 
                            <img src="{{ url('uk/') }}/img/logo-footer.png" width="200" alt="">
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="text-center copyRight">
                            <p class=" my-0">© 2020 All Rights Reserved. Developed By </p>
                            <a href="#" class="sc"><b>UK Center</b></a>
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="text-sm-right text-center">
                            <ul class="footer-social list-unstyled">
                              <li>
                                  <a href="#"><i class="fab fa-facebook-f"></i></a>
                              </li>
          
                              <li>
                                  <a href="#"><i class="fab fa-twitter"></i></a>
                              </li>
          
                              <li>
                                  <a href="#"><i class="fab fa-instagram"></i></a>
                              </li>
                              <li>
                                  <a href="#"><i class="fab fa-google-plus-g"></i></a>
                              </li>
                              <li>
                                  <a href="#"><i class="fab fa-pinterest-p"></i></a>
                              </li>
                       
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
          </footer>
             


        <script src="{{ url('uk/') }}/js/jquery-3.1.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>  
        <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
    </body>
</html>
