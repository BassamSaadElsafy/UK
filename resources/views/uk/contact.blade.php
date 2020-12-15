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
        @include('uk.layouts.navbar')

        <!-- end Nav -->

        <section class="contact">
            <div class="container">
                <div class="row mb-5 ">
                    <div class="col-12 col-lg-4 information  mb-4 mb-lg-0">
                        <div class="content py-5 px-4 text-left d-block d-lg-flex px-lg-3  ">
                            <div class="icon-part mr-lg-3 pb-3 pb-lg-0"><span><ion-icon name="location-outline"></ion-icon></span></div>
                            <div class="content-part">
                                <h4 class="mb-lg-2">Address</h4>
                                <h6 class="m-lg-0">228-5 Main Street, Georgia, USA</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 information  mb-4 mb-lg-0">
                        <div class="content py-5 px-4 text-left d-block d-lg-flex px-lg-3 ">
                            <div class="icon-part mr-lg-3 pb-3 pb-lg-0"><span><ion-icon name="mail-outline"></ion-icon></span></div>
                            <div class="content-part">
                                <h4 class="mb-lg-2">Email Address</h4>
                                <h6 class="m-lg-0">info@rstheme.com</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 information ">
                        <div class="content py-5 px-4 text-left d-block d-lg-flex px-lg-3 ">
                            <div class="icon-part mr-lg-3 pb-3 pb-lg-0"><span><ion-icon name="person-outline"></ion-icon></span></div>
                            <div class="content-part">
                                <h4 class="mb-lg-2">Phone Number</h4>
                                <h6 class="m-lg-0">(+088)589-8745</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-5"></div>
                    <div class="col-12 col-md-7">
                        
                        <form class="p-5">
                            <div class="heading mb-4">
                                <h2>Get In Touch</h2>
                                <p>Have some suggestions or just want to say hi? Our support team are ready to help you 24/7.</p>
                            </div>
                            <div class="row">
                                <div class="col-12 col-sm-6 mb-4">
                                    <input type="text" placeholder="Name">
                                </div>
                                <div class="col-12 col-sm-6 mb-4">
                                    <input type="email" placeholder="Email">
                                </div>
                                <div class="col-12 col-sm-6 mb-4">
                                    <input type="text" placeholder="Phone">
                                </div>
                                <div class="col-12 col-sm-6 mb-4">
                                    <input type="text" placeholder="Subject">
                                </div>
                                <div class="col-12 mb-4">
                                    <textarea placeholder="Message" cols="30" rows="10"></textarea>
                                </div>
                                <div class="col-12">
                                    <button>Submit Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

@include('uk.layouts.footer')
