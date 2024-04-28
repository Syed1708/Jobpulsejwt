
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JOBPULSE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="{{asset('css/toastify.min.css')}}" rel="stylesheet" />
    
    <script src="{{asset('js/toastify-js.js')}}"></script>
    <script src="{{asset('js/axios.min.js')}}"></script>
    <script src="{{asset('js/config.js')}}"></script>
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
        .btn.active {
        background-color: #007bff;
        color: #fff; 
        }
        .navbar-nav .nav-link.active{
            color: #010101;
       
        }

    </style>
</head>

<body>


<div>
    @include('components.frontend.header') 

    @yield('content')

    @include('components.frontend.footer')
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
