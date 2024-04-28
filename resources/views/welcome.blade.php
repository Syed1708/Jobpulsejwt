
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JOBPULSE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <style>
        .hero-bachground {
            width: 100%;
            height: 500px; /* Set your desired height */
            background-image: url(https://images.unsplash.com/photo-1542744173-8e7e53415bb0?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D);
            background-position: center center;
            background-size: cover; /* Adjust background size as needed */
            /* display: flex; */
            /* justify-content: center; */
            /* align-items: center; */
        }
        .carousel-item{
            height: 500px;
        }
        .carousel-item img{
            background-position: center;
            background-size: cover;
        }
    </style>
</head>

<body>
    <!-- Header -->
    <header class="header">
        <div class="container">
            <div class="row">

                <nav class="navbar sticky-bottom bg-body-tertiary navbar-expand-lg p-4" >
                    <div class="container-fluid">
                      
                        <a class="navbar-brand" href="#">
                            <img src="https://png.pngtree.com/template/20191219/ourmid/pngtree-find-job-logo-template-designs-vector-illustration-image_341400.jpg" alt="Logo" width="50" height="40" class="d-inline-block align-text-top">
                             <span class="my-3">JobPulse</span>
                          </a>
                      

                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>

                      <div class="collapse navbar-collapse ms-auto" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                          <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Jobs</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                          </li>
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Admin
                            </a>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#">Login</a></li>
                              <li><a class="dropdown-item" href="#">Register</a></li>
                              <li><hr class="dropdown-divider"></li>
                              </li>
                            </ul>
                          </li>

                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Company
                            </a>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#">Login</a></li>
                              <li><a class="dropdown-item" href="#">Register</a></li>
                              <li><hr class="dropdown-divider"></li>
                              <li><a class="dropdown-item" href="#">Employee Login</a></li>
                              </li>
                            </ul>
                          </li>

                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Candidate
                            </a>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#">Login</a></li>
                              <li><a class="dropdown-item" href="#">Register</a></li>
                              <li><hr class="dropdown-divider"></li>
                              </li>
                            </ul>
                          </li>
                        
                        </ul>
                      </div>
                    </div>
                  </nav>
            </div>
        </div>
    </header>

    <!-- Banner Section -->
    <section class="banner">
        <div class="container">
                    {{-- <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-sm hero-bachground">
                        <div class="col-lg-12 p-3 p-lg-5 pt-lg-3 " >
                          <h1 class="display-4 fw-bold lh-1 text-body-emphasis">Border hero with cropped image and shadows</h1>
                          <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
                          <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
                            <button type="button" class="btn btn-primary btn-lg px-4 me-md-2 fw-bold">Primary</button>
                            <button type="button" class="btn btn-outline-secondary btn-lg px-4">Default</button>
                          </div>
                        </div>
                        
                      </div> --}}
                      <div id="carouselExample" class="carousel slide">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="https://images.unsplash.com/photo-1635350736475-c8cef4b21906?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="https://images.unsplash.com/photo-1527192491265-7e15c55b1ed2?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="d-block w-100" alt="...">
                          </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>
                
        </div>
    </section>

    <!-- Top Companies Section -->
    <section class="top-companies">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2  class="m-4 text-center text-uppercase">Top Companies</h2>
                    <hr>
                    <div class="row">
                        <!-- Dummy company cards -->
                        <div class="col-md-2">
                            <div class="card">
                                <img src="https://via.placeholder.com/200" class="card-img-top" alt="Company 1">
                                <div class="card-body">
                                    <h5 class="card-title">Company 1</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="card">
                                <img src="https://via.placeholder.com/200" class="card-img-top" alt="Company 2">
                                <div class="card-body">
                                    <h5 class="card-title">Company 2</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="card">
                                <img src="https://via.placeholder.com/200" class="card-img-top" alt="Company 3">
                                <div class="card-body">
                                    <h5 class="card-title">Company 3</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="card">
                                <img src="https://via.placeholder.com/200" class="card-img-top" alt="Company 3">
                                <div class="card-body">
                                    <h5 class="card-title">Company 3</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="card">
                                <img src="https://via.placeholder.com/200" class="card-img-top" alt="Company 3">
                                <div class="card-body">
                                    <h5 class="card-title">Company 3</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="card">
                                <img src="https://via.placeholder.com/200" class="card-img-top" alt="Company 3">
                                <div class="card-body">
                                    <h5 class="card-title">Company 3</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Recent Job Posts Section -->
    <section class="recent-job-posts">
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <h2 class="m-4 text-center text-uppercase">Recent Job Posts</h2>
                    <hr>
                    <div class="row">
                        
                        <div class="col-md-12 mb-3 text-center">
                            <button type="button" class="btn btn-outline-primary me-2">Developer (6)</button>
                            <button type="button" class="btn btn-outline-primary me-2">Designer (10)</button>
                            <button type="button" class="btn btn-outline-primary me-2">UX (6)</button>
                            <!-- Add more categories here -->
                        </div>

                        <div class="col-md-6">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <h5 class="card-title font-bold">Job Title 1</h5>
                                    <p class="card-text">Salary: $50,000</p>
                                    <p class="card-text">Location: Remote</p>
                                    <p class="card-text">Tags: 
                                        <span class="badge text-bg-info p-2">Primary</span>
                                        <span class="badge text-bg-info p-2">Primary</span>
                                    </p>
                                    <a href="#" class="btn btn-primary">Details</a>
                                    <a href="#" class="btn btn-primary">Apply</a>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <h5 class="card-title font-bold">Job Title 1</h5>
                                    <p class="card-text">Salary: $50,000</p>
                                    <p class="card-text">Location: Remote</p>
                                    <p class="card-text">Tags: 
                                        <span class="badge text-bg-info p-2">Primary</span>
                                        <span class="badge text-bg-info p-2">Primary</span>
                                    </p>
                                    <a href="#" class="btn btn-primary">Details</a>
                                    <a href="#" class="btn btn-primary">Apply</a>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <h5 class="card-title font-bold">Job Title 1</h5>
                                    <p class="card-text">Salary: $50,000</p>
                                    <p class="card-text">Location: Remote</p>
                                    <p class="card-text">Tags: 
                                        <span class="badge text-bg-info p-2">Primary</span>
                                        <span class="badge text-bg-info p-2">Primary</span>
                                    </p>
                                    <a href="#" class="btn btn-primary">Details</a>
                                    <a href="#" class="btn btn-primary">Apply</a>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <h5 class="card-title font-bold">Job Title 1</h5>
                                    <p class="card-text">Salary: $50,000</p>
                                    <p class="card-text">Location: Remote</p>
                                    <p class="card-text">Tags: 
                                        <span class="badge text-bg-info p-2">Primary</span>
                                        <span class="badge text-bg-info p-2">Primary</span>
                                    </p>
                                    <a href="#" class="btn btn-primary">Details</a>
                                    <a href="#" class="btn btn-primary">Apply</a>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <h5 class="card-title font-bold">Job Title 1</h5>
                                    <p class="card-text">Salary: $50,000</p>
                                    <p class="card-text">Location: Remote</p>
                                    <p class="card-text">Tags: 
                                        <span class="badge text-bg-info p-2">Primary</span>
                                        <span class="badge text-bg-info p-2">Primary</span>
                                    </p>
                                    <a href="#" class="btn btn-primary">Details</a>
                                    <a href="#" class="btn btn-primary">Apply</a>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <h5 class="card-title font-bold">Job Title 1</h5>
                                    <p class="card-text">Salary: $50,000</p>
                                    <p class="card-text">Location: Remote</p>
                                    <p class="card-text">Tags: 
                                        <span class="badge text-bg-info p-2">Primary</span>
                                        <span class="badge text-bg-info p-2">Primary</span>
                                    </p>
                                    <a href="#" class="btn btn-primary">Details</a>
                                    <a href="#" class="btn btn-primary">Apply</a>
                                </div>
                                
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pagination -->
    <section class="pagination mt-4">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                          <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                          <li class="page-item"><a class="page-link" href="#">1</a></li>
                          <li class="page-item"><a class="page-link" href="#">2</a></li>
                          <li class="page-item"><a class="page-link" href="#">3</a></li>
                          <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                      </nav>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer bg-dark text-light py-3 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p>&copy; 2023 Your Company. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
