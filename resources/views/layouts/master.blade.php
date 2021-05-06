<!DOCTYPE html>
<html lang="en">

<head>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Laravel Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
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
    <!-- Customs Styles -->
    <style>
      .iconBlack{
        color: black;
      }
   </style>
    <!-- Customs Styles -->

    <title>Biz Co</title>
</head>

@if(!Auth::guest())
<body class="fixed-sn">
@else
<body class="">
@endif

    <!-- Header -->
  @if(app('router')->getRoutes()->match(app('request')->create(url()->previous()))->getName() == 'login' && 'register') <!-- Checks if Previous Route is Login or Register -->
    <header> <!-- 12/21/2020 5:50 Last Updated -->
      @if (!Auth::guest())
      <!-- SideNav -->
      <div id="slide-out" class="side-nav fixed grey lighten-5 wow fadeInLeft">
        <ul class="custom-scrollbar">
          <!-- Logo -->
          <li class="logo-sn waves-effect py-5">
            <div class="text-center">
              <a href="#" class="pl-0 wow fadeIn" data-wow-delay="0.5s"><img src="img/Logo.jpg"></a>
            </div>
          </li>
  
          {{-- <!-- Search Form -->
          <li>
            <form class="search-form" role="search">
              <div class="md-form mt-0 waves-light">
                <input type="text" class="form-control py-2" placeholder="Search">
              </div>
            </form>
          </li> --}}
  
          <!-- Side navigation links -->
          @if(Route::is('Home'))
            <div class="list-group list-group-flush">
              <a href="{{ url('home') }}" class="list-group-item active waves-effect py-0">
                <i class="fas fa-chart-pie mr-3 wow fadeIn" data-wow-delay="0.5s"></i>Dashboard
              </a>
              <a href="{{ url('profile') }}" class="list-group-item list-group-item-action waves-effect py-0">
                <i class="fas fa-user mr-3 wow fadeIn" data-wow-delay="0.5s"></i>Profile
              </a>
              <a href="{{ url('inventory') }}" class="list-group-item list-group-item-action waves-effect py-0">
                <i class="fas fa-warehouse mr-3 wow fadeIn" data-wow-delay="0.5s"></i>Inventory
              </a>
              <a href="#" class="list-group-item list-group-item-action waves-effect py-0">
                <i class="far fa-chart-bar mr-3 wow fadeIn" data-wow-delay="0.5s"></i></i>Reports
              </a>
            </div>
          @elseif(Route::is('Profile'))
            <div class="list-group list-group-flush">
              <a href="{{ url('home') }}" class="list-group-item list-group-item-action waves-effect py-0">
                <i class="fas fa-chart-pie mr-3 wow fadeIn" data-wow-delay="0.5s"></i>Dashboard
              </a>
              <a href="{{ url('profile') }}" class="list-group-item active waves-effect py-0">
                <i class="fas fa-user mr-3 wow fadeIn" data-wow-delay="0.5s"></i>Profile
              </a>
              <a href="{{ url('inventory') }}" class="list-group-item list-group-item-action waves-effect py-0">
                <i class="fas fa-warehouse mr-3 wow fadeIn" data-wow-delay="0.5s"></i>Inventory
              </a>
              <a href="#" class="list-group-item list-group-item-action waves-effect py-0">
                <i class="far fa-chart-bar mr-3 wow fadeIn" data-wow-delay="0.5s"></i></i>Reports
              </a>
            </div>
          @elseif(Route::is('inventory.index'))
            <div class="list-group list-group-flush">
              <a href="{{ url('home') }}" class="list-group-item list-group-item-action waves-effect py-0">
                <i class="fas fa-chart-pie mr-3 wow fadeIn" data-wow-delay="0.5s"></i>Dashboard
              </a>
              <a href="{{ url('profile') }}" class="list-group-item list-group-item-action waves-effect py-0">
                <i class="fas fa-user mr-3 wow fadeIn" data-wow-delay="0.5s"></i>Profile
              </a>
              <a href="{{ url('inventory') }}" class="list-group-item active waves-effect py-0">
                <i class="fas fa-warehouse mr-3 wow fadeIn" data-wow-delay="0.5s"></i>Inventory
              </a>
              <a href="#" class="list-group-item list-group-item-action waves-effect py-0">
                <i class="far fa-chart-bar mr-3 wow fadeIn" data-wow-delay="0.5s"></i></i>Reports
              </a>
            </div>
          @endif
          <!-- Side navigation links -->
        </ul>
      </div>
      @endif
  
      <!-- Navbar -->
      <nav class="navbar fixed-top grey lighten-5 navbar-nav navbar-light navbar-expand-lg shadow scrolling-navbar double-nav wow fadeIn" data-wow-delay="0.3s">
          @if (!Auth::guest())
            <div class="float-left">
              <a href="#" data-activates="slide-out" class="button-collapse"><i class="fas fa-bars iconBlack"></i></a>
            </div>
          @endif
          @if (Auth::guest())
              <a class="navbar-brand font-weight-bolder breadcrumb" href="{{ url('/') }}"> {{ config('app.name', 'BIZ CO') }} </a>
          @else
              <div class="breadcrumb"> {{ \Request::route()->getName() }}</div>
          @endif
  
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto">
                  @guest
                      <li class="nav-item">
                          <a class="nav-link text-default" href="{{ route('login') }}">Login</a>
                      </li>
                      @if (Route::has('register'))
                          <li class="nav-item">
                              <a class="nav-link text-default" href="{{ route('register') }}">Register</a>
                          </li>
                      @endif
                  @else
                      <li class="nav-item dropdown">
                          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                              <i class="fas fa-user mr-1"></i>{{ Auth::user()->name }}
                          </a>
  
                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="{{ route('logout') }}"
                                  onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                  {{ __('Logout') }}
                              </a>
  
                              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                  @csrf
                              </form>
                          </div>
                      </li>
                  @endguest
              </ul>
          </div>
      </nav>
      <!-- Navbar -->
    </header>
  @else <!-- Disables the Animation when previous route isn't Login and Register -->
    <header>
      @if (!Auth::guest())
      <!-- SideNav -->
      <div id="slide-out" class="side-nav fixed grey lighten-5">
        <ul class="custom-scrollbar">
          <!-- Logo -->
          <li class="logo-sn waves-effect py-5">
            <div class="text-center">
              <a href="{{url('home')}}" class="pl-0"><img src="img/Logo.jpg"></a>
            </div>
          </li>
  
          {{-- <!-- Search Form -->
          <li>
            <form class="search-form" role="search">
              <div class="md-form mt-0 waves-light">
                <input type="text" class="form-control py-2" placeholder="Search">
              </div>
            </form>
          </li> --}}
  
          <!-- Side navigation links -->
          @if(Route::is('Home'))
            <div class="list-group list-group-flush">
              <a href="{{ url('home') }}" class="list-group-item active waves-effect py-0">
                <i class="fas fa-chart-pie mr-3"></i>Dashboard
              </a>
              <a href="{{ url('profile') }}" class="list-group-item list-group-item-action waves-effect py-0">
                <i class="fas fa-user mr-3"></i>Profile
              </a>
              <a href="{{ url('inventory') }}" class="list-group-item list-group-item-action waves-effect py-0">
                <i class="fas fa-warehouse mr-3"></i>Inventory
              </a>
              <a href="#" class="list-group-item list-group-item-action waves-effect py-0">
                <i class="far fa-chart-bar mr-3"></i></i>Reports
              </a>
            </div>
          @elseif(Route::is('profile.index'))
            <div class="list-group list-group-flush">
              <a href="{{ url('home') }}" class="list-group-item list-group-item-action waves-effect py-0">
                <i class="fas fa-chart-pie mr-3"></i>Dashboard
              </a>
              <a href="{{ url('profile') }}" class="list-group-item active waves-effect py-0">
                <i class="fas fa-user mr-3"></i>Profile
              </a>
              <a href="{{ url('inventory') }}" class="list-group-item list-group-item-action waves-effect py-0">
                <i class="fas fa-warehouse mr-3"></i>Inventory
              </a>
              <a href="#" class="list-group-item list-group-item-action waves-effect py-0">
                <i class="far fa-chart-bar mr-3"></i></i>Reports
              </a>
            </div>
          @elseif(Route::is('inventory.index') || ('inventory.edit'))
            <div class="list-group list-group-flush">
              <a href="{{ url('home') }}" class="list-group-item list-group-item-action waves-effect py-0">
                <i class="fas fa-chart-pie mr-3"></i>Dashboard
              </a>
              <a href="{{ url('profile') }}" class="list-group-item list-group-item-action waves-effect py-0">
                <i class="fas fa-user mr-3"></i>Profile
              </a>
              <a href="{{ url('inventory') }}" class="list-group-item active waves-effect py-0">
                <i class="fas fa-warehouse mr-3"></i>Inventory
              </a>
              <a href="#" class="list-group-item list-group-item-action waves-effect py-0">
                <i class="far fa-chart-bar mr-3"></i></i>Reports
              </a>
            </div>
          @endif
          <!-- Side navigation links -->
        </ul>
      </div>
      @endif
  
      <!-- Navbar -->
      <nav class="navbar fixed-top grey lighten-5 navbar-nav navbar-light navbar-expand-lg shadow scrolling-navbar double-nav">
          @if (!Auth::guest())
            <div class="float-left">
              <a href="#" data-activates="slide-out" class="button-collapse"><i class="fas fa-bars iconBlack"></i></a>
            </div>
          @endif
          @if (Auth::guest())
              <a class="navbar-brand font-weight-bolder breadcrumb" href="{{ url('/') }}"> {{ config('app.name', 'BIZ CO') }} </a>
          @else
            <!-- if Route is Inventory -->
            @if(Route::is('inventory.index'))
              <div class="breadcrumb">Inventory</div>              
            @elseif(Route::is('profile.index'))
              <div class="breadcrumb">Profile</div>
              
            @endif
          @endif
  
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto">
                  @guest
                      <li class="nav-item">
                          <a class="nav-link text-default" href="{{ route('login') }}">Login</a>
                      </li>
                      @if (Route::has('register'))
                          <li class="nav-item">
                              <a class="nav-link text-default" href="{{ route('register') }}">Register</a>
                          </li>
                      @endif
                  @else
                      <li class="nav-item dropdown">
                          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                              <i class="fas fa-user mr-1"></i>{{ Auth::user()->name }}
                          </a>
  
                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="{{ route('logout') }}"
                                  onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                  {{ __('Logout') }}
                              </a>
  
                              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                  @csrf
                              </form>
                          </div>
                      </li>
                  @endguest
              </ul>
          </div>
      </nav>
      <!-- Navbar -->
    </header>
  @endif
    <!-- Header -->

    <!------MAIN CONTENTS------>
    <main>
        <div class="container-fluid">
          @yield('contents')
        </div>
     
        <div class="container">
          @yield('content')
        </div>
    </main>
    <!------MAIN CONTENTS------>

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
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi volutpat neque at nunc tempor
                        pretium. Curabitur pretium, nibh vel bibendum sodales, nibh orci dignissim sem, ac rhoncus arcu
                        dolor tempor diam. Integer non blandit eros. Vivamus cursus libero in enim maximus, non luctus
                        velit mollis. Nunc est neque, luctus a turpis eu, condimentum consequat est.</p>

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
                        <i class="fas fa-home mr-3"></i> Manila, Philippines
                    </p>
                    <p>
                        <i class="fas fa-envelope mr-3"></i> info@example.com
                    </p>
                    <p>
                        <i class="fas fa-phone mr-3"></i> + 01 234 567 88
                    </p>
                    <p>
                        <i class="fas fa-print mr-3"></i> + 01 234 567 89
                    </p>

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
<script type="text/javascript" src="{{ URL::asset('js/jquery-3.4.1.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/popper.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/mdb.min.js') }}"></script>
<script>
  new WOW().init();
</script>

<!-- Inventory Scripts -->
<script>
  $(document).ready(function() {

      /* Delete customer */
      $('body').on('click', '#delete-product', function () {
          
          var idd = $(this).data("id");
          var token = $("meta[name='csrf-token']").attr("content");
          confirm("Are You sure want to delete!");
      });

  });
</script>
<!-- Inventory Scripts -->

@if(!Auth::guest())
 <!-- Charts -->
 <script>
  // Small chart
  $(function () {
    $('.min-chart#chart-sales').easyPieChart({
      barColor: "#4caf50",
      onStep: function (from, to, percent) {
        $(this.el).find('.percent').text(Math.round(percent));
      }
    });
  });

  //Main chart
  var ctxL = document.getElementById("lineChart-main").getContext('2d');
  var myLineChart = new Chart(ctxL, {
    type: 'line',
    data: {
      labels: ["January", "February", "March", "April", "May", "June", "July"],
      datasets: [{
        label: "My First dataset",
        fillColor: "#fff",
        backgroundColor: 'rgba(255, 255, 255, .3)',
        borderColor: 'rgba(255, 255, 255, .9)',
        data: [0, 10, 5, 2, 20, 30, 45],
      }]
    },
    options: {
      legend: {
        labels: {
          fontColor: "#fff",
        }
      },
      scales: {
        xAxes: [{
          gridLines: {
            display: true,
            color: "rgba(255,255,255,.25)"
          },
          ticks: {
            fontColor: "#fff",
          },
        }],
        yAxes: [{
          display: true,
          gridLines: {
            display: true,
            color: "rgba(255,255,255,.25)"
          },
          ticks: {
            fontColor: "#fff",
          },
        }],
      }
    }
  });

</script>

<!-- Charts 2 -->
<script>
  //line
  var ctxL = document.getElementById("lineChart").getContext('2d');
  var myLineChart = new Chart(ctxL, {
    type: 'line',
    data: {
      labels: ["January", "February", "March", "April", "May", "June", "July"],
      datasets: [{
          label: "My First dataset",
          data: [65, 59, 80, 81, 56, 55, 40],
          backgroundColor: [
            'rgba(105, 0, 132, .2)',
          ],
          borderColor: [
            'rgba(200, 99, 132, .7)',
          ],
          borderWidth: 2
        },
        {
          label: "My Second dataset",
          data: [28, 48, 40, 19, 86, 27, 90],
          backgroundColor: [
            'rgba(0, 137, 132, .2)',
          ],
          borderColor: [
            'rgba(0, 10, 130, .7)',
          ],
          borderWidth: 2
        }
      ]
    },
    options: {
      responsive: true
    }
  });

  //radar
  var ctxR = document.getElementById("radarChart").getContext('2d');
  var myRadarChart = new Chart(ctxR, {
    type: 'radar',
    data: {
      labels: ["Eating", "Drinking", "Sleeping", "Designing", "Coding", "Cycling", "Running"],
      datasets: [{
          label: "My First dataset",
          data: [65, 59, 90, 81, 56, 55, 40],
          backgroundColor: [
            'rgba(105, 0, 132, .2)',
          ],
          borderColor: [
            'rgba(200, 99, 132, .7)',
          ],
          borderWidth: 2
        },
        {
          label: "My Second dataset",
          data: [28, 48, 40, 19, 96, 27, 100],
          backgroundColor: [
            'rgba(0, 250, 220, .2)',
          ],
          borderColor: [
            'rgba(0, 213, 132, .7)',
          ],
          borderWidth: 2
        }
      ]
    },
    options: {
      responsive: true
    }
  });

  //bar
  var ctxB = document.getElementById("barChart").getContext('2d');
  var myBarChart = new Chart(ctxB, {
    type: 'bar',
    data: {
      labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
      datasets: [{
        label: '# of Votes',
        data: [12, 19, 3, 5, 2, 3],
        backgroundColor: [
          'rgba(255, 99, 132, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)',
          'rgba(153, 102, 255, 0.2)',
          'rgba(255, 159, 64, 0.2)'
        ],
        borderColor: [
          'rgba(255,99,132,1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(255, 159, 64, 1)'
        ],
        borderWidth: 1
      }]
    },
    optionss: {
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: true
          }
        }]
      }
    }
  });

  //polar
  var ctxPA = document.getElementById("polarChart").getContext('2d');
  var myPolarChart = new Chart(ctxPA, {
    type: 'polarArea',
    data: {
      labels: ["Red", "Green", "Yellow", "Grey", "Dark Grey"],
      datasets: [{
        data: [300, 50, 100, 40, 120],
        backgroundColor: ["#F7464A", "#46BFBD", "#FDB45C", "#949FB1", "#4D5360"],
        hoverBackgroundColor: ["#FF5A5E", "#5AD3D1", "#FFC870", "#A8B3C5", "#616774"]
      }]
    },
    options: {
      responsive: true
    }
  });

  //pie
  var ctxP = document.getElementById("pieChart").getContext('2d');
  var myPieChart = new Chart(ctxP, {
    type: 'pie',
    data: {
      labels: ["Red", "Green", "Yellow", "Grey", "Dark Grey"],
      datasets: [{
        data: [300, 50, 100, 40, 120],
        backgroundColor: ["#F7464A", "#46BFBD", "#FDB45C", "#949FB1", "#4D5360"],
        hoverBackgroundColor: ["#FF5A5E", "#5AD3D1", "#FFC870", "#A8B3C5", "#616774"]
      }]
    },
    options: {
      responsive: true
    }
  });

  //doughnut
  var ctxD = document.getElementById("doughnutChart").getContext('2d');
  var myLineChart = new Chart(ctxD, {
    type: 'doughnut',
    data: {
      labels: ["Red", "Green", "Yellow", "Grey", "Dark Grey"],
      datasets: [{
        data: [300, 50, 100, 40, 120],
        backgroundColor: ["#F7464A", "#46BFBD", "#FDB45C", "#949FB1", "#4D5360"],
        hoverBackgroundColor: ["#FF5A5E", "#5AD3D1", "#FFC870", "#A8B3C5", "#616774"]
      }]
    },
    options: {
      responsive: true
    }
  });

  //minimalist
  $(function () {
    $('.min-chart#chart-sales').easyPieChart({
      barColor: "#4caf50",
      onStep: function (from, to, percent) {
        $(this.el).find('.percent').text(Math.round(percent));
      }
    });

    $('.min-chart#chart-roi').easyPieChart({
      barColor: "#F44336",
      onStep: function (from, to, percent) {
        $(this.el).find('.percent').text(Math.round(percent));
      }
    });

    $('.min-chart#chart-conversion').easyPieChart({
      barColor: "#9e9e9e",
      onStep: function (from, to, percent) {
        $(this.el).find('.percent').text(Math.round(percent));
      }
    });
  });

  var ctxBc = document.getElementById('bubbleChart').getContext('2d');
  var bubbleChart = new Chart(ctxBc, {
    type: 'bubble',
    data: {
      datasets: [{
        label: 'John',
        data: [{
          x: 3,
          y: 7,
          r: 10
        }],
        backgroundColor: "#ff6384",
        hoverBackgroundColor: "#ff6384"
      }, {
        label: 'Peter',
        data: [{
          x: 5,
          y: 7,
          r: 10
        }],
        backgroundColor: "#44e4ee",
        hoverBackgroundColor: "#44e4ee"
      }, {
        label: 'Donald',
        data: [{
          x: 7,
          y: 7,
          r: 10
        }],
        backgroundColor: "#62088A",
        hoverBackgroundColor: "#62088A"
      }]
    }
  });

  var ctxSc = document.getElementById('scatterChart').getContext('2d');
  var scatterData = {
    datasets: [{
      borderColor: 'rgba(99,0,125, .2)',
      backgroundColor: 'rgba(99,0,125, .5)',
      label: 'V(node2)',
      data: [{
        x: 1,
        y: -1.711e-2,
      }, {
        x: 1.26,
        y: -2.708e-2,
      }, {
        x: 1.58,
        y: -4.285e-2,
      }, {
        x: 2.0,
        y: -6.772e-2,
      }, {
        x: 2.51,
        y: -1.068e-1,
      }, {
        x: 3.16,
        y: -1.681e-1,
      }, {
        x: 3.98,
        y: -2.635e-1,
      }, {
        x: 5.01,
        y: -4.106e-1,
      }, {
        x: 6.31,
        y: -6.339e-1,
      }, {
        x: 7.94,
        y: -9.659e-1,
      }, {
        x: 10.00,
        y: -1.445,
      }, {
        x: 12.6,
        y: -2.110,
      }, {
        x: 15.8,
        y: -2.992,
      }, {
        x: 20.0,
        y: -4.102,
      }, {
        x: 25.1,
        y: -5.429,
      }, {
        x: 31.6,
        y: -6.944,
      }, {
        x: 39.8,
        y: -8.607,
      }, {
        x: 50.1,
        y: -1.038e1,
      }, {
        x: 63.1,
        y: -1.223e1,
      }, {
        x: 79.4,
        y: -1.413e1,
      }, {
        x: 100.00,
        y: -1.607e1,
      }, {
        x: 126,
        y: -1.803e1,
      }, {
        x: 158,
        y: -2e1,
      }, {
        x: 200,
        y: -2.199e1,
      }, {
        x: 251,
        y: -2.398e1,
      }, {
        x: 316,
        y: -2.597e1,
      }, {
        x: 398,
        y: -2.797e1,
      }, {
        x: 501,
        y: -2.996e1,
      }, {
        x: 631,
        y: -3.196e1,
      }, {
        x: 794,
        y: -3.396e1,
      }, {
        x: 1000,
        y: -3.596e1,
      }]
    }]
  }

  var config1 = new Chart.Scatter(ctxSc, {
    data: scatterData,
    options: {
      title: {
        display: true,
        text: 'Scatter Chart - Logarithmic X-Axis'
      },
      scales: {
        xAxes: [{
          type: 'logarithmic',
          position: 'bottom',
          ticks: {
            userCallback: function (tick) {
              var remain = tick / (Math.pow(10, Math.floor(Chart.helpers.log10(tick))));
              if (remain === 1 || remain === 2 || remain === 5) {
                return tick.toString() + 'Hz';
              }
              return '';
            },
          },
          scaleLabel: {
            labelString: 'Frequency',
            display: true,
          }
        }],
        yAxes: [{
          type: 'linear',
          ticks: {
            userCallback: function (tick) {
              return tick.toString() + 'dB';
            }
          },
          scaleLabel: {
            labelString: 'Voltage',
            display: true
          }
        }]
      }
    }
  });

</script>
@endif

</body>

</html>
