<div class="container-fluid">

    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <form class="d-flex">
                        <div class="input-group">
                            <input type="text" class="form-control form-control-light" id="dash-daterange">
                            <span class="input-group-text bg-primary border-primary text-white">
                                <i class="mdi mdi-calendar-range font-13"></i>
                            </span>
                        </div>
                        <a href="javascript: void(0);" class="btn btn-primary ms-2">
                            <i class="mdi mdi-autorenew"></i>
                        </a>
                    </form>
                </div>
                <h4 class="page-title">Monitoreo en Tiempo Real</h4>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-3 col-lg-4">
            <div class="card tilebox-one">
                <div class="card-body">
                    <i class='uil uil-users-alt float-end'></i>
                    <h6 class="text-uppercase mt-0">Platos Servidos</h6>
                    <h2 class="my-2" id="active-users-count">121</h2>
                    <p class="mb-0 text-muted">
                        <span class="text-success me-2"><span class="mdi mdi-arrow-up-bold"></span> 5.27%</span>
                        <span class="text-nowrap">Desde el mes pasado</span>  
                    </p>
                </div> <!-- end card-body-->
            </div>
            <!--end card-->

            <div class="card tilebox-one">
                <div class="card-body">
                    <i class='uil uil-window-restore float-end'></i>
                    <h6 class="text-uppercase mt-0">Análisis por Minuto</h6>
                    <h2 class="my-2" id="active-views-count">3</h2>
                    <p class="mb-0 text-muted">
                        <span class="text-danger me-2"><span class="mdi mdi-arrow-down-bold"></span> 1.08%</span>
                        <span class="text-nowrap">Desde el mes pasado</span>
                    </p>
                </div> <!-- end card-body-->
            </div>
            <div class="card">
                <div class="d-flex card-header justify-content-between align-items-center">
                    <h4 class="">Municipios con PDA</h4>
                </div>
                <div class="card-body pt-0">
                    <div id="average-sales" class="apex-charts mb-4 mt-2"
                        data-colors="#727cf5,#0acf97,#fa5c7c,#ffbc00"></div>
                    <div class="chart-widget-list">
                        <p>
                            <i class="mdi mdi-square text-primary"></i> SÍ
                            <span class="float-end">45</span>
                        </p>
                        <p>
                            <i class="mdi mdi-square text-success"></i> NO
                            <span class="float-end">55</span>
                        </p>
                    </div>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
            <!--end card-->
        </div> <!-- end col -->

        <div class="col-xl-9 col-lg-8">
            <div class="card card-h-100">
                <div class="card-body">
                    <div class="d-flex card-header justify-content-between align-items-center">
                            <h4 class="header-title">Vista Departamental</h4>
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle arrow-none card-drop"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="mdi mdi-dots-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Refresh Report</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                                </div>
                            </div>
                        </div>
        
                        <div class="card-body pt-0">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div id="world-map-markers" class="mt-3 mb-3" style="height: 300px">
                                    </div>
                                </div>
                                <div class="col-lg-4" dir="ltr">
                                    <div id="country-chart" class="apex-charts" data-colors="#727cf5"></div>
                                </div>
                            </div>
                        </div> <!-- end card-body-->
                        <div class="row">
                            <div class="col-6">
                                <h4>Caracterización por Edad</h4>
                                <div id="edad"></div>
                            </div>
                            <div class="col-6">
                                    <div class="d-flex card-header justify-content-between align-items-center">
                                        <h4 class="header-title">Meta Departamental</h4>
                                    </div>
                    
                                        <div id="views-min" class="apex-charts" data-colors="#0acf97"></div>
                    
                                        <div class="table-responsive mt-3">
                                            <table class="table table-sm mb-0 font-13">
                                                <thead>
                                                    <tr>
                                                        <th>Municipio</th>
                                                        <th>Puntaje</th>
                                                        <th>Eficiencia</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <a href="javascript:void(0);" class="text-muted">Medellín</a>
                                                        </td>
                                                        <td>25</td>
                                                        <td>87.5%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="javascript:void(0);" class="text-muted">Bello</a>
                                                        </td>
                                                        <td>15</td>
                                                        <td>21.48%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="javascript:void(0);" class="text-muted">Río Negro</a>
                                                        </td>
                                                        <td>10</td>
                                                        <td>63.59%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="javascript:void(0);" class="text-muted">Envigado</a>
                                                        </td>
                                                        <td>7</td>
                                                        <td>56.12%</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                            </div>
                        </div>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
            
        </div>
    </div>


    <!-- end row -->

    {{-- <div class="row">
        <div class="col-xl-4 col-lg-12">
            <div class="card">
                <div class="d-flex card-header justify-content-between align-items-center">
                    <h4 class="header-title">Views Per Minute</h4>
                    <div class="dropdown">
                        <a href="#" class="dropdown-toggle arrow-none card-drop p-0"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="mdi mdi-dots-vertical"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="javascript:void(0);" class="dropdown-item">Refresh Report</a>
                            <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                        </div>
                    </div>
                </div>

                <div class="card-body pt-0">
                    <div id="views-min" class="apex-charts" data-colors="#0acf97"></div>

                    <div class="table-responsive mt-3">
                        <table class="table table-sm mb-0 font-13">
                            <thead>
                                <tr>
                                    <th>Page</th>
                                    <th>Views</th>
                                    <th>Bounce Rate</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <a href="javascript:void(0);" class="text-muted">/hyper/dashboard-analytics</a>
                                    </td>
                                    <td>25</td>
                                    <td>87.5%</td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="javascript:void(0);" class="text-muted">/hyper/dashboard-crm</a>
                                    </td>
                                    <td>15</td>
                                    <td>21.48%</td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="javascript:void(0);" class="text-muted">/ubold/dashboard</a>
                                    </td>
                                    <td>10</td>
                                    <td>63.59%</td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="javascript:void(0);" class="text-muted">/minton/home</a>
                                    </td>
                                    <td>7</td>
                                    <td>56.12%</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->

        <div class="col-xl-4 col-lg-6">
            <div class="card">
                <div class="d-flex card-header justify-content-between align-items-center">
                    <h4 class="header-title">Sessions by Browser</h4>
                    <div class="dropdown">
                        <a href="#" class="dropdown-toggle arrow-none card-drop p-0"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="mdi mdi-dots-vertical"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="javascript:void(0);" class="dropdown-item">Refresh Report</a>
                            <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                        </div>
                    </div>
                </div>

                <div class="card-body pt-0">
                    <div id="sessions-browser" class="apex-charts mt-2" data-colors="#727cf5"></div>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->

        <div class="col-xl-4 col-lg-6">
            <div class="card">
                <div class="d-flex card-header justify-content-between align-items-center">
                    <h4 class="header-title">Sessions by Operating System</h4>
                    <div class="dropdown">
                        <a href="#" class="dropdown-toggle arrow-none card-drop p-0"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="mdi mdi-dots-vertical"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="javascript:void(0);" class="dropdown-item">Refresh Report</a>
                            <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                        </div>
                    </div>
                </div>

                <div class="card-body pt-0">
                    <div id="sessions-os" class="apex-charts mt-2" data-colors="#727cf5,#0acf97,#fa5c7c,#ffbc00"></div>

                    <div class="row text-center mt-2">
                        <div class="col-6">
                            <h4 class="fw-normal">
                                <span>6,510</span>
                            </h4>
                            <p class="text-muted mb-0">Online System</p>
                        </div>
                        <div class="col-6">
                            <h4 class="fw-normal">
                                <span>2,031</span>
                            </h4>
                            <p class="text-muted mb-0">Offline System</p>
                        </div>
                    </div>

                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->
    </div> --}}
    <!-- end row -->

    {{-- <div class="row">
        <div class="col-xl-4 col-lg-6">
            <div class="card">
                <div class="d-flex card-header justify-content-between align-items-center">
                    <h4 class="header-title">Channels</h4>
                    <a href="javascript:void(0);" class="btn btn-sm btn-light">Export <i class="mdi mdi-download ms-1"></i></a>
                </div>

                <div class="card-body pt-0">

                    <div class="table-responsive">
                        <table class="table table-sm table-centered mb-0 font-14">
                            <thead class="table-light">
                                <tr>
                                    <th>Channel</th>
                                    <th>Visits</th>
                                    <th style="width: 40%;"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Direct</td>
                                    <td>2,050</td>
                                    <td>
                                        <div class="progress" style="height: 3px;">
                                            <div class="progress-bar" role="progressbar"
                                                style="width: 65%; height: 20px;" aria-valuenow="65"
                                                aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Organic Search</td>
                                    <td>1,405</td>
                                    <td>
                                        <div class="progress" style="height: 3px;">
                                            <div class="progress-bar bg-info" role="progressbar"
                                                style="width: 45%; height: 20px;" aria-valuenow="45"
                                                aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Refferal</td>
                                    <td>750</td>
                                    <td>
                                        <div class="progress" style="height: 3px;">
                                            <div class="progress-bar bg-warning" role="progressbar"
                                                style="width: 30%; height: 20px;" aria-valuenow="30"
                                                aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Social</td>
                                    <td>540</td>
                                    <td>
                                        <div class="progress" style="height: 3px;">
                                            <div class="progress-bar bg-danger" role="progressbar"
                                                style="width: 25%; height: 20px;" aria-valuenow="25"
                                                aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div> <!-- end table-responsive-->
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->

        <div class="col-xl-4 col-lg-6">
            <div class="card">
                <div class="d-flex card-header justify-content-between align-items-center">
                    <h4 class="header-title">Social Media Traffic</h4>
                    <a href="javascript:void(0);" class="btn btn-sm btn-light">Export <i class="mdi mdi-download ms-1"></i></a>
                </div>

                <div class="card-body pt-0">

                    <div class="table-responsive">
                        <table class="table table-sm table-centered mb-0 font-14">
                            <thead class="table-light">
                                <tr>
                                    <th>Network</th>
                                    <th>Visits</th>
                                    <th style="width: 40%;"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Facebook</td>
                                    <td>2,250</td>
                                    <td>
                                        <div class="progress" style="height: 3px;">
                                            <div class="progress-bar" role="progressbar"
                                                style="width: 65%; height: 20px;" aria-valuenow="65"
                                                aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Instagram</td>
                                    <td>1,501</td>
                                    <td>
                                        <div class="progress" style="height: 3px;">
                                            <div class="progress-bar" role="progressbar"
                                                style="width: 45%; height: 20px;" aria-valuenow="45"
                                                aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Twitter</td>
                                    <td>750</td>
                                    <td>
                                        <div class="progress" style="height: 3px;">
                                            <div class="progress-bar" role="progressbar"
                                                style="width: 30%; height: 20px;" aria-valuenow="30"
                                                aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>LinkedIn</td>
                                    <td>540</td>
                                    <td>
                                        <div class="progress" style="height: 3px;">
                                            <div class="progress-bar" role="progressbar"
                                                style="width: 25%; height: 20px;" aria-valuenow="25"
                                                aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div> <!-- end table-responsive-->
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->

        <div class="col-xl-4 col-lg-12">
            <div class="card">
                <div class="d-flex card-header justify-content-between align-items-center">
                    <h4 class="header-title">Engagement Overview</h4>
                    <a href="javascript:void(0);" class="btn btn-sm btn-light">Export <i class="mdi mdi-download ms-1"></i></a>
                </div>

                <div class="card-body pt-0">

                    <div class="table-responsive">
                        <table class="table table-sm table-centered mb-0 font-14">
                            <thead class="table-light">
                                <tr>
                                    <th>Duration (Secs)</th>
                                    <th style="width: 30%;">Sessions</th>
                                    <th style="width: 30%;">Views</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>0-30</td>
                                    <td>2,250</td>
                                    <td>4,250</td>
                                </tr>
                                <tr>
                                    <td>31-60</td>
                                    <td>1,501</td>
                                    <td>2,050</td>
                                </tr>
                                <tr>
                                    <td>61-120</td>
                                    <td>750</td>
                                    <td>1,600</td>
                                </tr>
                                <tr>
                                    <td>121-240</td>
                                    <td>540</td>
                                    <td>1,040</td>  
                                </tr>
                            </tbody>
                        </table>
                    </div> <!-- end table-responsive-->
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->

    </div> --}}
    <!-- end row -->
   
    <script src="{{ asset('assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
  <!-- Analytics Dashboard App js -->
  <script>
    
    var options = {
          series: [{
          name: 'Edades',
          data: [10, 9, 12, 8, 5, 14]
        }],
          annotations: {
          points: [{
            x: 'Bananas',
            seriesIndex: 0,
            label: {
              borderColor: '#775DD0',
              offsetY: 0,
              style: {
                color: '#fff',
                background: '#775DD0',
              },
              text: 'Bananas are good',
            }
          }]
        },
        chart: {
          height: 350,
          type: 'bar',
          toolbar: {
            show: false
            }
        },
        plotOptions: {
          bar: {
            borderRadius: 10,
            columnWidth: '50%',
          }
        },
        dataLabels: {
          enabled: false
        },
        stroke: {
          width: 2
        },
        
        grid: {
          row: {
            colors: ['#fff', '#f2f2f2']
          }
        },
        xaxis: {
          labels: {
            rotate: -45
          },
          categories: ['15', '14', '13', '12', '9', '10'
          ],
          tickPlacement: 'on'
        },
        yaxis: {
          title: {
            text: '',
          },
        },
        fill: {
          type: 'gradient',
          gradient: {
            shade: 'light',
            type: "horizontal",
            shadeIntensity: 0.25,
            gradientToColors: undefined,
            inverseColors: true,
            opacityFrom: 0.85,
            opacityTo: 0.85,
            stops: [50, 0, 100]
          },
        }
        };

        var chart = new ApexCharts(document.querySelector("#edad"), options);
        chart.render();
  </script>
</div>