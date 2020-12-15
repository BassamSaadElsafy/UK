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



   <section class="check">
    <div class="container">
        <div class="check-container">
            <div class="text-center mb-5">
                <img src="{{ url('uk/') }}/img/certificate-diploma.svg" width="100" alt="">
            </div>
            <h3 class="mb-4">Verify a certificate</h3>
            <form action="{{ route('certificate') }}" >
                @csrf
                @include('uk.layouts.message')

            <div class="input-group mb-1">
                <input type="text" name="certificate_id" class="form-control" placeholder="Enter Cirtificate ID" aria-label="Username" aria-describedby="basic-addon1">

            </div>
            <p class="under-input mb-3">The Certificate ID Can Be fount at the bottom of each cirtificate</p> 
              <div class="text-center mt-5">
                 <button type="submit">Validate</button>           
              </div>
              </form>
        </div>
    </div>
</section>


@include('uk.layouts.footer')
