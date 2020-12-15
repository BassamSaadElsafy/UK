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

        <section class="login py-5">
            <div class="container py-5">
                
                <form method="post" >
                  @include('uk.layouts.message')
                  @csrf
                    <div class="heading mb-4 text-center">
                        <h2>Login</h2>
                    </div>
                    <div class="row">
                        <div class="col-12 mb-4">
                            <input type="text" placeholder="User Name">
                        </div>
                        <div class="col-12 mb-4">
                            <input type="password" placeholder="Password">
                        </div>
                        <div class="col-12">
                            <button type="submit">Login</button>
                           
                        </div>
                    </div>
                </form>
            </div>
        </section>


@include('uk.layouts.footer')
