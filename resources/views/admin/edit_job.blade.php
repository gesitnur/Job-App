@extends('layout.master')

@section("content") 


<body class="">
    @include('layout.sidenav')
  <div class="main-content">
    <!-- Navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">
        <!-- Brand -->
        <span><a href="{{ route('logout') }}"
          onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
          Logout
      </a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form></span>
        <!-- Form -->
        <form class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
          <div class="form-group mb-0">
            <div class="input-group input-group-alternative">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-search"></i></span>
              </div>
              <input class="form-control" placeholder="Search" type="text">
            </div>
          </div>
        </form>
        <!-- User -->
        <ul class="navbar-nav align-items-center d-none d-md-flex">
          <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media align-items-center">
               
                
                
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
              <div class=" dropdown-header noti-title">
                <h6 class="text-overflow m-0">Welcome!</h6>
              </div>
              <a href="./examples/profile.html" class="dropdown-item">
                <i class="ni ni-single-02"></i>
                <span>My profile</span>
              </a>
              <a href="./examples/profile.html" class="dropdown-item">
                <i class="ni ni-settings-gear-65"></i>
                <span>Settings</span>
              </a>
              <a href="./examples/profile.html" class="dropdown-item">
                <i class="ni ni-calendar-grid-58"></i>
                <span>Activity</span>
              </a>
              <a href="./examples/profile.html" class="dropdown-item">
                <i class="ni ni-support-16"></i>
                <span>Support</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#!" class="dropdown-item">
                <i class="ni ni-user-run"></i>
                <span><a href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                  Logout
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form></span>
              </a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <!-- End Navbar -->
    <!-- Header -->
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
      <div class="container-fluid">
        <div class="header-body">
          <!-- Card stats -->
          <div class="row">
           
        </div>
      </div>
    </div>
    <div class="container-fluid mt--7">
      <div class="row">
        <div class="col-xl-8 mb-5 mb-xl-0">
              <div class="row align-items-center">
                <div class="col">
                  
                </div>
              </div>
            </div>
            </div>
        </div>
      </div>
      <h3>Edit Job</h3>
      <form action="{{route('adminn.update', $job->id)}}" method="post" class="form-horizontal" role="form" enctype="multipart/form-data">
        {{csrf_field()}} {{method_field('PUT')}}
          
              <div class="form-group">
                      <label for="title" class = "col-lg- control-label">Posisi</label>
                      <div class="col-lg-9">
                 <input type="text" name="posisi" class="form-control" autofocus="true" value="{!!$job->posisi!!}">
                          <div class="text-d anger">
                              {!! $errors->first('posisi') !!}
                          </div>
                       </div>
                        <div class="clear">
                            </div> 
                          </div>
                           <div class="form-group">
                                  <label for="content" class = "col-lg-3 control-label">Detail</label>
                                   <div class="col-lg-9">
            <textarea name="detail"  id="detail"  class="form-control" rows="10" cols="10">{!!$job->detail!!}</textarea>                           
                              <div class="text-danger">{!! $errors->first('detail') !!}</div> 
                                      </div>

                                      <div class="form-group">
                                          <label for="title" class = "col-lg- control-label">Gaji</label>
                                          <div class="col-lg-9">
                                     <input type="text" name="gaji" class="form-control" autofocus="true" value="{!!$job->gaji!!}">
                                              <div class="text-d anger">
                                                  {!! $errors->first('gaji') !!}
                                              </div>
                                           </div>
                                            <div class="clear">
                                                </div> 
                                              </div>
                    
                    
                    
                                              <div class="form-group">
                                                  <label for="title" class = "col-lg- control-label">Waktu Proses</label>
                                                  <div class="col-lg-9">
                                             <input type="text" name="waktu_proses" class="form-control" autofocus="true" value="{!!$job->waktu_proses!!}">
                                                      <div class="text-d anger">
                                                          {!! $errors->first('waktu_proses') !!}
                                                      </div>
                                                   </div>
                                                    <div class="clear">
                                                        </div> 
                                                      </div>
                    
                              <div class="form-group">
                                   <div class="col-lg-3"></div> 
                                   <div class="col-lg-9">
                                      <input type="submit" name=save class="btn btn-raised btn-primary">  
                          
                          <a href="{{route('adminn.index')}}" class="btn btn-raised btn-info"> Back </a>
                                           </div> 
                                           <div class="clear"></div>
                                           </div>
 </form>

                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Footer -->
      <footer class="footer">
        <div class="row align-items-center justify-content-xl-between">
          <div class="col-xl-6">
            <div class="copyright text-center text-xl-left text-muted">
              &copy; 2018 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Creative Tim</a>
            </div>
          </div>
          <div class="col-xl-6">
            <ul class="nav nav-footer justify-content-center justify-content-xl-end">
              <li class="nav-item">
                <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
              </li>
              <li class="nav-item">
                <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
              </li>
              <li class="nav-item">
                <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
              </li>
              <li class="nav-item">
                <a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md" class="nav-link" target="_blank">MIT License</a>
              </li>
            </ul>
          </div>
        </div>
      </footer>
    </div>
  </div>
  
</body>

</html>