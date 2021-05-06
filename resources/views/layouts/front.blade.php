<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- Laravel Styles -->
    <link href="{{ asset('css/front.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">

    {{-- <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet"> --}}

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/mdb.min.css') }}" rel="stylesheet">

    <title>Biz Co</title>
</head>
<body>

    @yield('content')


<!-- Footer -->
    <footer class="page-footer font-small unique-color">

        <!-- Footer Elements -->
        <div class="container">

        <!-- Grid row-->
        <div class="row">

            <!-- Grid column -->
            <div class="col-md-4 py-5">

            <!-- Content -->
            <h5 class="text-uppercase font-weight-bold">About Us</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi volutpat neque at nunc tempor pretium. Curabitur pretium, nibh vel bibendum sodales, nibh orci dignissim sem, ac rhoncus arcu dolor tempor diam. Integer non blandit eros. Vivamus cursus libero in enim maximus, non luctus velit mollis. Nunc est neque, luctus a turpis eu, condimentum consequat est.</p>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-4 py-5">
            <div class="mb-5 flex-center">

                <!-- Facebook -->
                <a class="fb-ic">
                <i class="fab fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                </a>
                <!-- Twitter -->
                <a class="tw-ic">
                <i class="fab fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                </a>
                <!-- Google +-->
                <a class="gplus-ic">
                <i class="fab fa-google-plus-g fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                </a>
                <!--Instagram-->
                <a class="ins-ic">
                <i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                </a>
            </div>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-4 py-5">

            <!-- Links -->
            <h6 class="text-uppercase font-weight-bold">Contact</h6>
            <br>

            <p>
            <i class="fas fa-home mr-3"></i> Manila, Philippines</p>
            <p>
            <i class="fas fa-envelope mr-3"></i> info@example.com</p>
            <p>
            <i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
            <p>
            <i class="fas fa-print mr-3"></i> + 01 234 567 89</p>

            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row-->

        </div>
        <!-- Footer Elements -->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2020 Copyright:
        <a href="https://mdbootstrap.com/"> BizCo.com</a>
        </div>
        <!-- Copyright -->

    </footer>
<!-- Footer -->

<!-- Scripts -->
<script type="text/javascript" src="{{ URL::asset('js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/popper.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/mdb.min.js') }}"></script>
<script>
    new WOW().init();
</script>

</body>
</html>