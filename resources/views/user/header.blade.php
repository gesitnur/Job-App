<header id="header" id="home">
        <div class="container">
            <div class="row align-items-center justify-content-between d-flex">
              <div id="logo">
                <a href="index.html"><img src="img/logo.png" alt="" title="" /></a>
              </div>
              <nav id="nav-menu-container">
                <ul class="nav-menu">
                  <li class="menu-active">
                        <a class="nav-item nav-link" href="{{route('job.index')}}">Home</a>
                 </li>
                  </li>
                  @guest
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                                <li>
                                        <a href="{{ route('profil_user') }}">
                                        Profile
                                    </a> 
                                </li>
                                <li>
                                        <a href="{{ route('lamaran_user') }}">
                                                Lamaran
                                            </a>
                                </li>
                            </ul>
                        </li>
                    @endguest			          				          
                </ul>
              </nav><!-- #nav-menu-container -->		    		
            </div>
        </div>
      </header>