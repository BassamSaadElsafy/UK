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


    
   <section class="cirtification">
    <div class="container">
        <div class="cirtification-container">
            <a href="{{ $student->certificate_link }}" target="_blank" class="download-cirtification d-inline-block">
             Download
                <!-- <i class="fas fa-long-arrow-alt-down "></i> -->
            </a>
            <div class="row">
                <div class="col-md-8">
                  <p><b>
                      <!-- <i class="far fa-user mc mr-1"></i> -->
                      <i class="fas fa-arrow-circle-right mr-2"></i>Name :</b>{{ $student->name }}</p>
                </div>
                
                <div class="col-md-4">
                   <p><b><i class="fas fa-arrow-circle-right mr-2"></i> Status :</b> {{ $student->status }} </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                  <p><b><i class="fas fa-arrow-circle-right mr-2"></i>Completed : </b> <span>{{ $student->course }} {{ $student->completed }}</span> </p>
                </div>
                <div class="col-md-4">
                    <p><b>
                        <!-- <i class="far fa-calendar-alt mc mr-1"></i> -->
                        <i class="fas fa-arrow-circle-right mr-2"></i>Date :</b> <b style="font-size: 13px; color: black"> {{ $student->created_at }} </b> </p>
                 </div>
            </div>
            <div class="row">
                <div class="col-12">
                  <p><b><i class="fas fa-arrow-circle-right mr-2"></i>Certificate ID :</b>  <span>{{ str_limit($student->certificate_id, 20) }} </span> </p>
                </div>                
            </div>

        </div>
    </div>
</section>

@include('uk.layouts.footer')
