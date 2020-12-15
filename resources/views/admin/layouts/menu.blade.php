<div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
        
       
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="{{ url('/') }}/design/adminlte/dist/img/avatar5.png" class="user-image" alt="User Image">
              <span class="hidden-xs">{{admin()->user()->name}}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="{{ url('/') }}/design/adminlte/dist/img/avatar5.png" class="img-circle" alt="User Image">

                <p>
                  {{admin()->user()->name}} 
                  <div style="color: #fff; font-weight: bold">{{ admin()->user()->email }}</div>
                </p>
              </li>
             
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="{{aurl('admin/'.admin()->user()->id.'/edit')}}" class="btn btn-default btn-flat">Edit Profile</a>
                </div>
                <div class="pull-right">
                  <a href="{{ aurl('logout') }}" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
   
        </ul>
      </div>

