<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <title>JobPulse</title>


    <link rel="icon" type="image/x-icon" href="{{asset('/favicon.ico')}}" />
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" />
    <link href="{{asset('css/animate.min.css')}}" rel="stylesheet" />
    <link href="{{asset('css/fontawesome.css')}}" rel="stylesheet" />
    <link href="{{asset('css/style.css')}}" rel="stylesheet" />
    <link href="{{asset('css/toastify.min.css')}}" rel="stylesheet" />


    <link href="{{asset('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css')}}" rel="stylesheet" />

    <link href="{{asset('css/jquery.dataTables.min.css')}}" rel="stylesheet" />
    <script src="{{asset('js/jquery-3.7.0.min.js')}}"></script>
    <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>


    <script src="{{asset('js/toastify-js.js')}}"></script>
    <script src="{{asset('js/axios.min.js')}}"></script>
    <script src="{{asset('js/config.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.js')}}"></script>




</head>

<body>

<div id="loader" class="LoadingOverlay d-none">
    <div class="Line-Progress">
        <div class="indeterminate"></div>
    </div>
</div>

<nav class="navbar fixed-top px-0 shadow-sm bg-white">
    <div class="container-fluid">
        {{-- {{ Auth::user() }} --}}

        <a class="navbar-brand" href="#">
            <span class="icon-nav m-0 h5" onclick="MenuBarClickHandler()">
                <img class="nav-logo-sm mx-2"  src="{{asset('images/menu.svg')}}" alt="logo"/>
            </span>
            {{-- <img class="nav-logo  mx-2"  src="{{asset('images/logo.png')}}" alt="logo"/> --}}
            <span>JobPulse</span>
        </a>

        <div class="float-right h-auto d-flex">
            <div class="user-dropdown">
                <img class="icon-nav-img" src="{{asset('images/user.webp')}}" alt=""/>
                <div class="user-dropdown-content ">
                    <div class="mt-4 text-center">
                        <img class="icon-nav-img" src="{{asset('images/user.webp')}}" alt=""/>
                        <h6>User</h6>
                        <hr class="user-dropdown-divider  p-0"/>
                    </div>
                    
                    
                    {{-- <form action="{{ url('/logout')}}" method="POST">
                        @csrf
                        <button class="side-bar-item"type="submit"> <span class="side-bar-item-caption">Logout</span></button>
                    </form> --}}
                    @if(request()->cookie('token'))
                    <a href="{{url('/admin/userProfile')}}" class="side-bar-item">
                        <span class="side-bar-item-caption">Profile</span>
                    </a>
                        <a href="{{url("/admin/logout")}}" class="side-bar-item">
                            <span class="side-bar-item-caption">Logout</span>
                        </a>
                    @endif
                    @if(request()->cookie('companytoken'))
                    <a href="{{url('/company/companyProfile')}}" class="side-bar-item">
                        <span class="side-bar-item-caption">Profile</span>
                    </a>
                        <a href="{{url("/company/logout")}}" class="side-bar-item">
                            <span class="side-bar-item-caption">Logout</span>
                        </a>
                    @endif
                    
                    @if(request()->cookie('candidatetoken'))
                    <a href="{{url('/candidate/candidateProfile')}}" class="side-bar-item">
                        <span class="side-bar-item-caption">Profile</span>
                    </a>
                    <a onclick="logout()" class="side-bar-item">
                        <span class="side-bar-item-caption">Logout</span>
                    </a>
                @endif
                </div>
            </div>
        </div>
    </div>
</nav>


<div id="sideNavRef" class="side-nav-open">

    @if(request()->cookie('token'))

    <a href="{{url("/admin/dashboard")}}" class="side-bar-item">
        <i class="bi bi-graph-up"></i>
        <span class="side-bar-item-caption">Dashboard</span>
    </a>
    <a href="{{url("/admin/blogPage")}}" class="side-bar-item">
        <i class="bi bi-list-nested"></i>
        <span class="side-bar-item-caption">Blog Page</span>
    </a>
    <a href="{{url("/admin/blogCatPage")}}" class="side-bar-item">
        <i class="bi bi-list-nested"></i>
        <span class="side-bar-item-caption">Blog Categories</span>
    </a>
    <a href="{{url("/admin/pluginPage")}}" class="side-bar-item">
        <i class="bi bi-list-nested"></i>
        <span class="side-bar-item-caption">Plugin Page</span>
    </a>
    <a href="{{url("/aboutPage")}}" class="side-bar-item">
        <i class="bi bi-list-nested"></i>
        <span class="side-bar-item-caption">About Page</span>
    </a>
    <a href="{{url("/contactPage")}}" class="side-bar-item">
        <i class="bi bi-list-nested"></i>
        <span class="side-bar-item-caption">Contact Page</span>
    </a>
    
    <a href="{{url("/")}}" class="side-bar-item">
        <i class="bi bi-list-nested"></i>
        <span class="side-bar-item-caption">Home</span>
    </a>
        
    @endif

    {{-- <a href="{{url("/company/employeePage")}}" class="side-bar-item">
        <i class="bi bi-people"></i>
        <span class="side-bar-item-caption">Employees</span>
    </a>
   
    <a href="{{url("/company/rolePage")}}" class="side-bar-item">
        <i class="bi bi-people"></i>
        <span class="side-bar-item-caption">Employees Role</span>
    </a>
    
   --}}


    @if(request()->cookie('companytoken'))


    <a href="{{url("/company/dashboard")}}" class="side-bar-item">
        <i class="bi bi-graph-up"></i>
        <span class="side-bar-item-caption">Dashboard</span>
    </a>

    <a href="{{url("/jobs")}}" class="side-bar-item">
        <i class="bi bi-list-nested"></i>
        <span class="side-bar-item-caption">Jobs</span>
    </a>
    <a href="{{url("/company/pluginPage")}}" class="side-bar-item">
        <i class="bi bi-list-nested"></i>
        <span class="side-bar-item-caption">Plugins</span>
    </a>
    {{-- <a href="{{url("/company/blogPage")}}" id="pluginsLink" class="side-bar-item">
        <i class="bi bi-list-nested"></i>
        <span class="side-bar-item-caption">BlogPage</span>
    </a> --}}
    <div class="sidebar">
        <!-- Other sidebar items -->
        <div id="pluginsSection" style="display: none;">
            <span class="side-bar-item-caption">Active Plugins</span>
            <div id="pluginLinks"></div>
        </div>
    </div>

    <a href="{{url("/")}}" class="side-bar-item">
        <i class="bi bi-list-nested"></i>
        <span class="side-bar-item-caption">Home</span>
    </a>
    


    @endif

    @if(request()->cookie('candidatetoken'))
    <a href="{{url("/candidate/dashboard")}}" class="side-bar-item">
        <i class="bi bi-graph-up"></i>
        <span class="side-bar-item-caption">Dashboard</span>
    </a>
    <a href="{{url("/candidate/candidateProfile")}}" class="side-bar-item">
        <i class="bi bi-list-nested"></i>
        <span class="side-bar-item-caption">Profile</span>
    </a>

    <a href="{{url("/candidate/jobapplicationPage")}}" class="side-bar-item">
        <i class="bi bi-list-nested"></i>
        <span class="side-bar-item-caption">Job Applications</span>
    </a>
    <a href="{{url("/")}}" class="side-bar-item">
        <i class="bi bi-list-nested"></i>
        <span class="side-bar-item-caption">Home</span>
    </a>
    @endif

</div>


<div id="contentRef" class="content">
    @yield('content')
</div>



<script>
    function MenuBarClickHandler() {
        let sideNav = document.getElementById('sideNavRef');
        let content = document.getElementById('contentRef');
        if (sideNav.classList.contains("side-nav-open")) {
            sideNav.classList.add("side-nav-close");
            sideNav.classList.remove("side-nav-open");
            content.classList.add("content-expand");
            content.classList.remove("content");
        } else {
            sideNav.classList.remove("side-nav-close");
            sideNav.classList.add("side-nav-open");
            content.classList.remove("content-expand");
            content.classList.add("content");
        }
    }

    function logout() {
    // Clear token from localStorage
    localStorage.removeItem('candidatetoken');
    // Redirect to logout endpoint
    window.location.href = '/candidate/logout';
    }


    // JavaScript code to fetch plugin data and dynamically update the sidebar
    async function updatePlugin() {
    
    showLoader();
    let res=await axios.get("/list-plugin-company");
    hideLoader();
    console.log(res.data);
    // document.getElementById('pluginList').innerHTML = '';
    if (res.data.status === 'success') {
    const plugins = res.data.data;

    const visiblePlugins = plugins.filter(plugin => plugin.visible_in_menu);

if (visiblePlugins.length > 0) {
    // Show the "Plugins" section
    document.getElementById('pluginsSection').style.display = 'block';

    // Clear existing plugin links
    const pluginLinks = document.getElementById('pluginLinks');
    pluginLinks.innerHTML = '';

    // Generate sidebar links for visible plugins
    visiblePlugins.forEach(plugin => {
        const link = document.createElement('a');
        link.href = plugin.slug; // Set the URL for the plugin
        link.className = 'side-bar-item';
        link.innerHTML = `
            <i class="bi bi-list-nested"></i>
            <span class="side-bar-item-caption">${plugin.name}</span>`;
        pluginLinks.appendChild(link);
        });
    } else {
        // Hide the "Plugins" section if no visible plugins
        document.getElementById('pluginsSection').style.display = 'none';
    }

        
    } else {
        console.log('Error fetching plugin data:'); 
      }

    }

    // 
    document.addEventListener('DOMContentLoaded', function () {
        updatePlugin();
    });


</script>

</body>
</html>
