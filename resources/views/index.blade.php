@extends('layouts.front')

@section('content')

<!-- header -->
<header>
    <div class="container-fluid view no-padding flex-center text-center">
        <div class="row">
            <div class="col-md-12 px-0" style="height: 100vh;">
                <img class="img-fluid" src="img/front1.jpg" alt="">
                <div class="mask flex-center rgba-blue-slight">
                    <h1 class="text-white font-weight-bold display-3 wow fadeInUp" data-wow-delay="0.65s">"A big business starts small."</h1>
                </div>
                <div class="mask">
                    <div class="row py-2     pr-2 d-flex flex-row-reverse">
                        <div class="col-2 text-right font-weight-bold">
                            <a type="button" href="{{route('login')}}" class="text-dark">Already have an Account?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<main>
    <div class="container mb-5">
        <!--Section: Features v.4-->
        <section class="section wow fadeIn" data-wow-delay="0.3s">
    
            <!--Section heading-->
            <h1 class="font-weight-bold text-center h1 my-5">Don't know where to start?</h1>
            <!--Section description-->
            <p class="text-center grey-text mb-5 mx-auto w-responsive lead">Lorem ipsum dolor sit amet, consectetur
              adipisicing elit. Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas
              nostrum quisquam eum porro a pariatur accusamus veniam.</p>
    
            <!--Grid row-->
            <div class="row">
    
              <!--Grid column-->
              <div class="col-md-4">
    
                <!--Grid row-->
                <div class="row mb-2">
                  <div class="col-2">
                    <i class="fas fa-2x fa-flag-checkered indigo-text"></i>
                  </div>
                  <div class="col-10">
                    <h5 class="font-weight-bold mb-4">International</h5>
                    <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores
                      nam, aperiam minima assumenda.</p>
                  </div>
                </div>
                <!--Grid row-->
    
                <!--Grid row-->
                <div class="row mb-2">
                  <div class="col-2">
                    <i class="fas fa-2x fa-flask blue-text"></i>
                  </div>
                  <div class="col-10">
                    <h5 class="font-weight-bold mb-4">Experimental</h5>
                    <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores
                      nam, aperiam minima assumenda.</p>
                  </div>
                </div>
                <!--Grid row-->
    
                <!--Grid row-->
                <div class="row mb-2">
                  <div class="col-2">
                    <i class="fas fa-2x fa-glass-martini cyan-text"></i>
                  </div>
                  <div class="col-10">
                    <h5 class="font-weight-bold mb-4">Relaxing</h5>
                    <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores
                      nam, aperiam minima assumenda.</p>
                  </div>
                </div>
                <!--Grid row-->
    
              </div>
              <!--Grid column-->
    
              <!--Grid column-->
              <div class="col-md-4 mb-2 text-center text-md-left flex-center">
                <img src="img/Example.png" alt="" class="img-fluid z-depth-0">
              </div>
              <!--Grid column-->
    
              <!--Grid column-->
              <div class="col-md-4 ">
    
                <!--Grid row-->
                <div class="row mb-2">
                  <div class="col-2">
                    <i class="fas fa-2x fa-heart deep-purple-text"></i>
                  </div>
                  <div class="col-10">
                    <h5 class="font-weight-bold mb-4">Beloved</h5>
                    <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores
                      nam, aperiam minima assumenda.</p>
                  </div>
                </div>
                <!--Grid row-->
    
                <!--Grid row-->
                <div class="row mb-2">
                  <div class="col-2">
                    <i class="fas fa-2x fa-bolt purple-text"></i>
                  </div>
                  <div class="col-10">
                    <h5 class="font-weight-bold mb-4">Rapid</h5>
                    <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores
                      nam, aperiam minima assumenda.</p>
                  </div>
                </div>
                <!--Grid row-->
    
                <!--Grid row-->
                <div class="row mb-2">
                  <div class="col-2">
                    <i class="fas fa-2x fa-magic pink-text"></i>
                  </div>
                  <div class="col-10">
                    <h5 class="font-weight-bold mb-4">Magical</h5>
                    <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores
                      nam, aperiam minima assumenda.</p>
                  </div>
                </div>
                <!--Grid row-->
    
              </div>
              <!--Grid column-->
    
            </div>
            <!--Grid row-->
    
          </section>
          <!--/Section: Features v.4-->
    </div>
    
    <div class="container-fluid view no-padding text-center flex-center wow fadeIn">
        <div class="row flex">
            <div class="col-md-12 px-0" style="height: 100vh;">
                <img class="img-fluid" src="img/front2.jpg" alt=""">
                <div class="mask flex-center">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="col-md-12 text-white font-weight-bold display-6 wow fadeInUp">Be a part of our growing community.</h1>
                        </div>
                        <div class="col-md-12 wow fadeInUp">
                            <a role="button" href="{{route('register')}}" class="btn btn-rounded btn-primary"><i class="fas fa-user left"></i>Sign Up</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>


@endsection