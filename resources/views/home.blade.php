@extends('layouts.master')

@section('contents')

<div class="container-fluid"> <!-- container has to be fluid too in order to expand -->
    <!-- Section: Main panel -->
    <section class="mb-5">

      <!-- Card -->
      <div class="card card-cascade narrower">

        <!-- Section: Chart -->
        <section>

          <!-- Grid row -->
          <div class="row">

            <!-- Grid column -->
            <div class="col-xl-5 col-lg-12 mr-0">

              <!-- Card image -->
              <div class="view view-cascade gradient-card-header blue-gradient">
                <h2 class="h2-responsive mb-0">Sales</h2>
              </div>
              <!-- Card image -->

              <!-- Card content -->
              <div class="card-body card-body-cascade pb-0">

                <!-- Panel data -->
                <div class="row card-body pt-3">

                  <!-- First column -->
                  <div class="col-md-6">

                    <!-- Date select -->
                    <p class="lead"><span class="badge info-color p-2">Data range</span></p>
                    <select class="mdb-select colorful-select dropdown-info">
                      <option value="" disabled selected>Choose time period</option>
                      <option value="1">Today</option>
                      <option value="2">Yesterday</option>
                      <option value="3">Last 7 days</option>
                      <option value="3">Last 30 days</option>
                      <option value="3">Last week</option>
                      <option value="3">Last month</option>
                    </select>

                    <!-- Date pickers -->
                    <p class="lead mt-5"><span class="badge info-color p-2">Custom date</span></p>
                    <br>
                    <div class="md-form">
                      <input placeholder="Selected date" type="text" id="from" class="form-control datepicker">
                      <label for="date-picker-example">From</label>
                    </div>
                    <div class="md-form">
                      <input placeholder="Selected date" type="text" id="to" class="form-control datepicker">
                      <label for="date-picker-example">To</label>
                    </div>

                  </div>
                  <!-- First column -->

                  <!-- Second column -->
                  <div class="col-md-6 text-center">

                    <!-- Summary -->
                    <p>Total sales: <strong>2000$</strong>
                      <button type="button" class="btn btn-info btn-sm p-2" data-toggle="tooltip" data-placement="top"
                        title="Total sales in the given period"><i class="fas fa-question"></i></button>
                    </p>
                    <p>Average sales: <strong>100$</strong>
                      <button type="button" class="btn btn-info btn-sm p-2" data-toggle="tooltip" data-placement="top"
                        title="Average daily sales in the given period"><i class="fas fa-question"></i></button>
                    </p>

                    <!-- Change chart -->
                    <span class="min-chart my-4" id="chart-sales" data-percent="76"><span class="percent"></span></span>
                    <h5>
                      <span class="badge green p-2">Change <i class="fas fa-arrow-circle-up ml-1"></i></span>
                      <button type="button" class="btn btn-info btn-sm p-2" data-toggle="tooltip" data-placement="top"
                        title="Percentage change compared to the same period in the past"><i class="fas fa-question"></i>
                      </button>
                    </h5>
                  </div>
                  <!-- Second column -->

                </div>
                <!-- Panel data -->

              </div>
              <!-- Card content -->

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-xl-7 col-lg-12 mb-4">

              <!-- Card image -->
              <div class="view view-cascade gradient-card-header indigo">

                <!-- Chart -->
                <canvas id="lineChart-main" height="175"></canvas>

              </div>
              <!-- Card image -->

            </div>
            <!-- Grid column -->

          </div>
          <!-- Grid row -->

        </section>
        <!-- Section: Chart -->

      </div>
      <!-- Card -->

    </section>
    <!-- Section: Main panel -->

    <!-- Section: Chart types -->
    <section>

      <!-- Grid row -->
      <div class="row mb-4">

        <!-- Grid column -->
        <div class="col-lg-4 col-md-12 mb-4">

          <!-- Card -->
          <div class="card card-cascade narrower">

            <!-- Card image -->
            <div class="view view-cascade gradient-card-header blue">
              <h5 class="mb-0">Line chart</h5>
            </div>
            <!-- Card image -->

            <!-- Card content -->
            <div class="card-body card-body-cascade text-center">

              <canvas id="lineChart" height="200px"></canvas>

            </div>
            <!-- Card content -->

          </div>
          <!-- Card -->

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-lg-4 col-md-6 mb-4">

          <!-- Card -->
          <div class="card card-cascade narrower">

            <!-- Card image -->
            <div class="view view-cascade gradient-card-header blue">
              <h5 class="mb-0">Radar chart</h5>
            </div>
            <!-- Card image -->

            <!-- Card content -->
            <div class="card-body card-body-cascade text-center">

              <canvas id="radarChart" height="200px"></canvas>

            </div>
            <!-- Card content -->

          </div>
          <!-- Card -->

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-lg-4 col-md-6 mb-4">

          <!-- Card -->
          <div class="card card-cascade narrower">

            <!-- Card image -->
            <div class="view view-cascade gradient-card-header blue">
              <h5 class="mb-0">Bar chart</h5>
            </div>
            <!-- Card image -->

            <!-- Card content -->
            <div class="card-body card-body-cascade text-center">

              <canvas id="barChart" height="200px"></canvas>

            </div>
            <!-- Card content -->

          </div>
          <!-- Card -->

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

      <!-- Grid row -->
      <div class="row mb-4">

        <!-- Grid column -->
        <div class="col-lg-4 col-md-12 mb-4">

          <!-- Card -->
          <div class="card card-cascade narrower">

            <!-- Card image -->
            <div class="view view-cascade gradient-card-header blue">
              <h5 class="mb-0">Polar area chart</h5>
            </div>
            <!-- Card image -->

            <!-- Card content -->
            <div class="card-body card-body-cascade text-center">

              <canvas id="polarChart" height="200px"></canvas>

            </div>
            <!-- Card content -->

          </div>
          <!-- Card -->

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-lg-4 col-md-6 mb-4">

          <!-- Card -->
          <div class="card card-cascade narrower">

            <!-- Card image -->
            <div class="view view-cascade gradient-card-header blue">
              <h5 class="mb-0">Pie Chart</h5>
            </div>
            <!-- Card image -->

            <!-- Card content -->
            <div class="card-body card-body-cascade text-center">

              <canvas id="pieChart" height="200px"></canvas>

            </div>
            <!-- Card content -->

          </div>
          <!-- Card -->

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-lg-4 col-md-6 mb-4">

          <!-- Card -->
          <div class="card card-cascade narrower">

            <!-- Card image -->
            <div class="view view-cascade gradient-card-header blue">
              <h5 class="mb-0">Doughnut Chart</h5>
            </div>
            <!-- Card image -->

            <!-- Card content -->
            <div class="card-body card-body-cascade text-center">

              <canvas id="doughnutChart" height="200px"></canvas>

            </div>
            <!-- Card content -->

          </div>
          <!-- Card -->

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

      <!-- Grid row -->
      <div class="row">

        <!-- Grid column -->
        <div class="col-lg-4 col-md-12 mb-4">

          <!-- Card -->
          <div class="card card-cascade narrower">

            <!-- Card image -->
            <div class="view view-cascade gradient-card-header blue">
              <h5 class="mb-0">Minimalist chart</h5>
            </div>
            <!-- Card image -->

            <!-- Card content -->
            <div class="card-body card-body-cascade text-center">

              <span class="min-chart my-3" id="chart-sales" data-percent="56"><span class="percent"></span></span>

            </div>
            <!-- Card content -->

          </div>
          <!-- Card -->

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-lg-4 col-md-6 mb-4">

          <!-- Card -->
          <div class="card card-cascade narrower">

            <!-- Card image -->
            <div class="view view-cascade gradient-card-header blue">
              <h5 class="mb-0">Minimalist chart</h5>
            </div>
            <!-- Card image -->

            <!-- Card content -->
            <div class="card-body card-body-cascade text-center">

              <span class="min-chart my-3" id="chart-roi" data-percent="76"><span class="percent"></span></span>

            </div>
            <!-- Card content -->

          </div>
          <!-- Card -->

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-lg-4 col-md-6 mb-4">

          <!-- Card -->
          <div class="card card-cascade narrower">

            <!-- Card image -->
            <div class="view view-cascade gradient-card-header blue">
              <h5 class="mb-0">Minimalist chart</h5>
            </div>
            <!-- Card image -->

            <!-- Card content -->
            <div class="card-body card-body-cascade text-center">

              <span class="min-chart my-3" id="chart-conversion" data-percent="100"><span class="percent"></span></span>

            </div>
            <!-- Card content -->

          </div>
          <!-- Card -->

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

      <!-- Grid row -->
      <div class="row">

        <!-- Grid column -->
        <div class="col-lg-6 col-md-12 mb-4">

          <!-- Card -->
          <div class="card card-cascade narrower">

            <!-- Card image -->
            <div class="view view-cascade gradient-card-header blue">
              <h5 class="mb-0">Bubble Chart</h5>
            </div>
            <!-- Card image -->

            <!-- Card content -->
            <div class="card-body card-body-cascade text-center">

              <canvas id="bubbleChart"></canvas>

            </div>
            <!-- Card content -->

          </div>
          <!-- Card -->

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-lg-6 col-md-12 mb-4">

          <!-- Card -->
          <div class="card card-cascade narrower">

            <!-- Card image -->
            <div class="view view-cascade gradient-card-header blue">
              <h5 class="mb-0">Scatter Chart</h5>
            </div>
            <!-- Card image -->

            <!-- Card content -->
            <div class="card-body card-body-cascade text-center">

              <canvas id="scatterChart"></canvas>

            </div>
            <!-- Card content -->

          </div>
          <!-- Card -->

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </section>
    <!-- Section: Chart types -->
</div>

@endsection
