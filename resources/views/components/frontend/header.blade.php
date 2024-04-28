    <!-- Header -->
    <header class="header">
        <div class="container">
            <div class="row">

                <nav class="navbar sticky-bottom bg-body-tertiary navbar-expand-lg p-4" >
                    <div class="container-fluid">
                      
                        <a class="navbar-brand" href="/">
                            <img src="https://png.pngtree.com/template/20191219/ourmid/pngtree-find-job-logo-template-designs-vector-illustration-image_341400.jpg" alt="Logo" width="50" height="40" class="d-inline-block align-text-top">
                             <span class="my-3">JobPulse</span>
                          </a>
                      

                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>

                      <div class="collapse navbar-collapse ms-auto" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                          <li class="nav-item">
                            <a class="nav-link{{ Request::is('/') ? ' active' : '' }}" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item"> 
                            <a class="nav-link{{ Request::is('about') ? ' active' : '' }}" href="{{ url('/about') }}">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link{{ Request::is('recentJob') ? ' active' : '' }}" href="{{ url('/recentJob') }}">Jobs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link{{ Request::is('recentBlog') ? ' active' : '' }}" href="{{ url('/recentBlog') }}">Blogs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link{{ Request::is('contact') ? ' active' : '' }}" href="{{ url('/contact') }}">Contact</a>
                        </li>

                          @if(request()->cookie('token'))

                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Admin
                            </a>
                            <ul class="dropdown-menu"> 
                              <li><a class="dropdown-item" href="{{url('/admin/dashboard')}}">Dashboard</a></li>
                              <li><a class="dropdown-item" href="{{url('/admin/logout')}}">Logout</a></li>
                              </li>
                            </ul>
                            
                          </li>

                          @elseif (request()->cookie('companytoken'))
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Company
                            </a>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="{{url('/company/dashboard')}}">Dashboard</a></li>
                              <li><a class="dropdown-item" href="{{url('/company/logout')}}">Logout</a></li>
                              
                            </li>
                            </ul>
                          </li>
                          @elseif (request()->cookie('candidatetoken'))
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Candidate
                            </a>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="{{url('/candidate/dashboard')}}">Dashboard</a></li>
                              <li><a class="dropdown-item" style="cursor: pointer" onclick="logout()">Logout</a></li>
                              </li>
                            </ul>
                          </li>
                          @else

                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Admin
                            </a>
                            <ul class="dropdown-menu"> 
                              <li><a class="dropdown-item" href="{{url('/admin/userLogin')}}">Login</a></li>
                              {{-- <li><a class="dropdown-item" href="{{url('/admin/userRegistration')}}">Register</a></li> --}}
                              <li><hr class="dropdown-divider"></li>
                              </li>
                            </ul>
                            
                          </li>

                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Company
                            </a>
                            <ul class="dropdown-menu">
                              
                              <li><a class="dropdown-item" href="{{url('/company/companyLogin')}}">Login</a></li>
                              <li><a class="dropdown-item" href="{{url('/company/companyRegistration')}}">Register</a></li>
                              <li><hr class="dropdown-divider"></li>
                              {{-- <li><a class="dropdown-item" href="{{url('/company/employeeLogin')}}">Employee Login</a></li>
                               --}}
                            </li>
                            </ul>
                          </li>

                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Candidate
                            </a>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="{{url('/candidate/candidateLogin')}}">Login</a></li>
                              <li><a class="dropdown-item" href="{{url('/candidate/candidateRegistration')}}">Register</a></li>
                              <li><hr class="dropdown-divider"></li> 
                              </li>
                            </ul>
                          </li>
                          @endif
                        
                        </ul>
                      </div>
                    </div>
                  </nav>
            </div>
        </div>
    </header>
  
    <script>
      function logout() {
        // Clear token from localStorage
        localStorage.removeItem('candidatetoken');
        // Redirect to logout endpoint
        window.location.href = '/candidate/logout';
        }
    </script>