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
                  <a class="nav-link px-lg-3 py-3 py-lg-0 " href="{{ route('about') }}">About</a>
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