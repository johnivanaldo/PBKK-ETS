<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> </title>
      <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    
    <link href="/Content/Style.css" rel="stylesheet">
    <link href="/Content/Footer.css" rel="stylesheet">
</head>
<body>
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <img src="" alt="">

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="" href="./">Home</a></li>
                    <li><a class="" href="./profile">Profile</a></li>
                    <li><a class="" href="./company">About</a></li>
                    <li><a class="" href="./service">Service</a></li>
                    <li><a class="" href="./collaboration">Collaboration</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->
    
    @yield('content')
    <footer id="footer" class="footer-background">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <p>
                            <strong>PinjemIn</strong><br><br>
                            © 2022 All Rights Reserved
                        </p>
                    </div>
                    <div class="col-lg-3 col-md-6 footer-links">
                    </div>

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h4>Contacts</h4>
                        <p>
                            <strong>Phone:</strong> +62 1234 5678 000<br>
                            <strong>Email:</strong> info@pinjemin.id<br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer><!-- End Footer -->
     <!-- Vendor JS Files -->
  <script src="/vendor/purecounter/purecounter.js"></script>
  <script src="/vendor/aos/aos.js"></script>
  <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="/js/main.js"></script>
</body>
  
</html>
