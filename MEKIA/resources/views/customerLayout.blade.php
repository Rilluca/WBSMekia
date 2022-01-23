<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MEKIA Furniture Shop</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        .navbar {
            background: white;
            width: 1000px;
            margin: auto;

        }

        .nav-link:hover {
            color: black;
        }

        .btnCart {
            border-color: transparent;
            background-color: transparent;
        }

        .btnCart:hover {
            background-color: initial;
            background-position: 0 0;
            color: #48C2C2;
        }

        .btnSettings {
            border-color: transparent;
            background-color: transparent;
        }

        .btnSettings:hover {
            background-color: initial;
            background-position: 0 0;
            color: red;
        }

        
        
    </style>

</head>

<body>
    <nav class="navbar-nav navbar-expand-md fixed-top" style="justify-content: center;background-color: white;">
    <a class="navbar-brand"><img src="Images/Icon.png" alt="MEKIA icon" type="image/png" style="width:100px;height:100px;"></a>
            <h1 style="float:left;">Furniture Catalogue</h1>
        </div>
        <div class="collapse navbar-collapse" id="navbarNav" style="justify-content: right;">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="/home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/viewFurniture">Furnitures</a>                
                </li>
            </ul>
        </div>

        <div class="collapse navbar-collapse" id="navbarNav" style="justify-content: right;">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/branches"><button class="btnSettings"><i class='bx bxs-lock-open'></i>Staff Login</button></a>
                </li>
            </ul>
        </div>
    </nav>

    @yield('content')

    <footer class="text-center text-white" style="background-color: #37393b;">
        <!-- Footer Links -->
        <div class="container text-center text-md-left" style="text-decoration: none;">

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-md-3 mx-auto">

                    <!-- Links -->
                    <h5 class="font-weight-bold text-uppercase mt-3 mb-4">About MEKIA</h5>
                    <p>MEKIA is a Malaysia-based company that focuses on designing furnitures that will fit your room the most. We are always improving and working on making our design comfortable while still fitting for your room themes.</p>
                </div>
                <!-- Grid column -->

                <hr class="clearfix w-90 d-md-none">

                <!-- Grid column -->
                <div class="col-md-3 mx-auto">

                    <!-- Links -->
                    <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Customer Services</h5>

                    <ul class="list-unstyled">
                        <li>
                            <a href="#!">FAQ</a>
                        </li>
                        <li>
                            <a href="#!">Customer service</a>
                        </li>
                        <li>
                            <a href="#!">Delivery</a>
                        </li>
                        <li>
                            <a href="#!">Policy</a>
                        </li>
                    </ul>
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </div>
        <!-- Footer Links -->

            <div class="contact mt-3">
                <p>Our Social Media</p>
                <a href="#"><i class="fa fa-instagram fa-3x ml-5"></i></a>
                <a href="#"><i class="fa fa-facebook fa-3x ml-5"></i></a>
                <a href="#"><i class="fa fa-twitter fa-3x ml-5"></i></a>
            </div>
        </div>
        <br>
        <div class="copyright text-center p-2" style="background-color: #27292b;">
            <p>This website was created for education purpose.</p>
        </div>
    </footer>


    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>


</body>

</html>