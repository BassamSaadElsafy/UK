@include('uk.layouts.header')

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
                    <a href="{{ route('login') }}">login</a>
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

   <!-- Start header  -->
   <header>
       <div class="container">
        <nav class="navbar navbar-expand-lg ">
            <a class="navbar-brand" href="#">
                <img src="{{ url('uk/') }}/img/logo-footer.png" width="170" alt="" srcset="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mx-auto">
                <li class="nav-item active">
                  <a class="nav-link activee" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="{{ route('about') }}">About</a>
                </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Pages
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{ route('cheak') }}">Cirtification</a>
                      <a class="dropdown-item" href="{{ route('pages') }}">FAQ</a>
                    </div>

                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                  </li>
              </ul>

              <form class="form-inline my-2 my-lg-0">
                <i class="fas fa-search" data-toggle="modal" data-target="#searchModal"></i>
   <!-- Test -->
  <!-- Button trigger modal -->
  <!-- Modal -->
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
   <!-- Test -->
            </form>
            </div>
          </nav>
          <div class="header-content">
            <div class="onep sl-sub-title wow bounceInLeft" data-wow-delay="300ms" data-wow-duration="2000ms">World Leading University</div>
          </div>
          <h1 class="twop wow fadeInRight" data-wow-delay="600ms" data-wow-duration="2000ms">Educavo University In Canada</h1>
       </div>
   </header>
   <!-- end header  -->
   

 <section class="cards">
    <div class="container">
        <div class="row">
          <div class="col-3">
              <div class="cars-cont text-center">
                  <div>
                      <img src="{{ url('uk/') }}/img/1.png" alt="">
                      <h2>Future
                          Students</h2>
                  </div>
              </div>
          </div>
          <div class="col-3">
              <div class="cars-cont text-center">
                  <div>
                      <img src="{{ url('uk/') }}/img/1.png" alt="">
                      <h2>Future
                          Students</h2>
                  </div>
              </div>
          </div> 
            <div class="col-3">
              <div class="cars-cont text-center">
                  <div>
                      <img src="{{ url('uk/') }}/img/1.png" alt="">
                      <h2>Future
                          Students</h2>
                  </div>
              </div>
          </div>  
          <div class="col-3">
              <div class="cars-cont text-center">
                  <div>
                      <img src="{{ url('uk/') }}/img/1.png" alt="">
                      <h2>Future
                          Students</h2>
                  </div>
              </div>
          </div>
        </div>
    </div>
  </section>
  <!-- End Cards -->
  

 <!-- Ending features -->

 <!-- Starting About-->
  <section class="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
              <img src="{{ url('uk/') }}/img/about.png" class="img-fluid" alt="" srcset="">
            </div>
            <div class="col-lg-6 col-md-12">
              <div class="about-us">
                <h4 class="sc">ABOUT US</h4>
                <h2>We are leading discovery and innovation since 1905</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, eius to mod tempor incidi dunt ut labore et dolore magna aliqua. Ut enims ad minim veniam.Lorem ipsum dolor sit amet, consectetur adipisicing elit, eius to mod tempor incidi dunt ut labore et dolore magna aliqua. Ut enims ad minim veniam.Lorem sum dolor sit amet.</p>
                <div class="btn-part">
                    <a class="readon yellow-btn" href="#">Discover More</a>
                </div> 
            </div>
            </div>
        </div>
    </div>
  </section>
 <!-- Ending About-->

<!-- Starting Path -->

   <div id="rs-categories" class="rs-categories home9-style event-bg pt-100 pb-100 md-pt-70 md-pb-70">
    <div class="container">
        <div class="sec-title3 text-center mb-45">
            <div class="sub-title yellow-color">Choose Your Path</div>
            <h2 class="title black-color">Study With Us</h2>
        </div>

        <div class="row">
            <div class="col-lg-4 md-mb-40">
                <div class="categories-items mb-4 mb-sm-0">
                    <div class="images-part">
                        <a href="#"><img src="{{ url('uk/') }}/img/11.jpg" class="img-fluid" alt=""></a>
                    </div>
                    <div class="image-content">
                       <div class="effect-icon">
                           <i class="fa fa-paperclip"></i>
                       </div>
                       <div class="title">
                           <a href="#">Undergraduate Programs</a>
                       </div>
                       <div class="description">
                           <p>Arts, business, health, science and more, begin your journey with a program educavo.</p>
                       </div>
                        <div class="button-bottom">
                            <div class="button-effect">
                                <a href="{{ route('contact') }}">Join Program</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 md-mb-40">
                <div class="categories-items mb-4 mb-sm-0">
                    <div class="images-part">
                        <a href="#"><img src="{{ url('uk/') }}/img/22.jpg" class="img-fluid" alt=""></a>
                    </div>
                    <div class="image-content">
                       <div class="effect-icon">
                           <i class="fa fa-graduation-cap"></i>
                       </div>
                       <div class="title">
                           <a href="#">Graduate Programs</a>
                       </div>
                       <div class="description">
                           <p>Arts, business, health, science and more, begin your journey with a program educavo.</p>
                       </div>
                        <div class="button-bottom">
                            <div class="button-effect">
                                <a href="{{ route('contact') }}">Join Program</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="categories-items">
                    <div class="images-part">
                        <a href="#"><img src="{{ url('uk/') }}/img/33.jpg" class="img-fluid" alt=""></a>
                    </div>
                    <div class="image-content">
                       <div class="effect-icon">
                           <i class="fa fa-laptop"></i>
                       </div>
                       <div class="title">
                           <a href="#">Online Courses</a>
                       </div>
                       <div class="description">
                           <p>Arts, business, health, science and more, begin your journey with a program educavo.</p>
                       </div>
                        <div class="button-bottom">
                            <div class="button-effect">
                                <a href="{{ route('contact') }}">Join Program</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   </div>
<!-- End Path -->

<!-- Start Video -->



  <!-- Button trigger modal -->
  <section class="video">
      <div class="overlay">
        <div class="text-center">
            <button type="button" class="b-main btn " data-toggle="modal" data-target="#exampleModal">
                <i class="fa fa-play"></i>
              </button>
        </div>
    
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-large" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="closeX">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                
                    <div class="dsd embed-responsive embed-responsive-4by3">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/vLnPwxZdW4Y" allowfullscreen></iframe>
                      </div>
                
                
                </div>

              </div>
            </div>
          </div>
    

      </div>
        
  </section>
  <!-- Modal -->
<!-- Start Covid -->
<section class="covid">
    <div class="container-fluid">
    <div class="row">
        <div class="col-lg-6 col-12 details-covid">
            <div class="details-covid-son">
              <h4>CAMPUS SAFETY</h4>
              <h2 class="h1 text-white py-3">COVID-19 information and updates</h2>
              <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, eius to mod tempor incidi dunt ut labore et dolore magna aliqua. Ut enims ad minim veniam.Lorem ipsum dolor sit amet, consectetur adipisicing elit, eius to mod tempor incidi dunt ut labore et dolore magna aliqua. Ut enims ad minim veniam.Lorem sum dolor sit amet.</p>
           </div>
        </div>
   
    <div class="col-lg-6 col-12 display-covid-none">
     </div>
     
    </div>
   </div>  
</section> 
<!-- End Covid -->
<!--  Start Education -->
<section class="education">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-12 img-education-conatiner ">
                <img src="{{ url('uk/') }}/img/i2.png" class="img-fluid" alt="" srcset="">
            </div>

            <div class="col-md-6 col-12">
             <div class="edu-left-part">
                <div class="mb-5">
                  <img src="{{ url('uk/') }}/img/mark.png" alt="" srcset="">
                </div>
                <p>
                Education is the passport to the future for tomorrow belongs to those who pre pare for it today. Sed ut perspiciatis unde omnis iste natus error sit vo luptatem. Education is the passport to the future for tomorrow belongs
                </p>
              <h2 class="font-weight-bold">Mahadi Mansura</h2>
              <h3>SCE Student</h3>
            </div>
         </div>
        </div>         

        </div>
       </div> 
</section>
<!--  end Education -->

<i class="fa fa-chevron-up hidden" aria-hidden="true" ></i>


<!-- Start mySubscribe  --> 
<section class="mySubscribe">
    <div class="container mySubscribe-son">
        <div class="row">
          <div class="col-md-6 mySubscribe-left text-center text-md-left">
              <img src="{{ url('uk/') }}/img/newsletter2.png" width="43" class="mr-3" alt="" srcset="">
              <span class="h2 wc">Subscribe to Newsletter</span>
            </div>
         <div class="col-md-6">
            <div class="">
            <div class="input-group mb-2 mySubscribe-input">
                  <input type="email" class="form-control" id="inlineFormInputGroup" placeholder="Enter Your Email">
                  <div class="input-group-prepend">
                    <button class="input-group-text">Submit</button>
                  </div>
                </div>
              </div>

         </div>

         </div>
        </div>
    </div>
</section>
<!-- End Subscribe  -->

@include('uk.layouts.footer')
