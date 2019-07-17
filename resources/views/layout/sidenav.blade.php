<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
        <div class="container-fluid">
          <!-- Toggler -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <!-- User -->
         
          <!-- Collapse -->
          <div class="collapse navbar-collapse" id="sidenav-collapse-main">
            <!-- Collapse header -->
            <div class="navbar-collapse-header d-md-none">
              <div class="row">
                <div class="col-6 collapse-brand">
                  <a href="./index.html">
                    <img src="./assets/img/brand/blue.png">
                  </a>
                </div>
                <div class="col-6 collapse-close">
                  <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                    <span></span>
                    <span></span>
                  </button>
                </div>
              </div>
            </div>
            <!-- Form -->
            <form class="mt-4 mb-3 d-md-none">
              <div class="input-group input-group-rounded input-group-merge">
                <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Search" aria-label="Search">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <span class="fa fa-search"></span>
                  </div>
                </div>
              </div>
            </form>
            <!-- Navigation -->
            <ul class="navbar-nav">
                    <li class="nav-item">
                            <a class="nav-item nav-link" href="{{url('admin')}}">
                              <i class="ni ni-tv-2 text-primary"></i>Dashboard</a>
                              </li>
              <li class="nav-item  class=" active" ">
                <span><a href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                  Logout
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form></span>
              </li>
              <li class="nav-item">
                <a class="nav-item nav-link" href="{{url('list_user')}}">
                  <i class="ni ni-single-02 text-yellow"></i>User</a>
                  </li>
              {{-- <li class="nav-item">
                <a class="nav-link " href="./examples/tables.html">
                  <i class="ni ni-bullet-list-67 text-red"></i> Profil
                </a>
              </li> --}}
              <li class="nav-item">
                <a class="nav-item nav-link" href="{{route('list_job')}}">
                    <i class="ni ni-key-25 text-info"></i>Job</a>
              </li>
              </ul>
            
          </div>
        </div>
      </nav>