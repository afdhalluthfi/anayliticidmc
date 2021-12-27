@extends('layout.master')

@push('plugin-styles')
  <!-- {!! Html::style('/assets/plugins/plugin.css') !!} -->
@endpush
 @php
        $sumAtf=0; //jml Aktif seluruh binaan koperasi
        $sumPsf=0; //jml Pasif seluruh binaan koperasi
        $jmlAgt=0; //jml Anggota seluruh binaan koperasi
        $jmlAP=0; //jml Aktif Pasif Seluruh Jenis Koperasi
        foreach ($data as $dt ) {
            # code...
            $sumAtf += $dt['aktif'];
            $sumPsf +=$dt['pasif'];
            $jmlAgt += $dt['jumlah_anggota'];
        }
        foreach ($dataJenis as $dtj){
          $jmlAP += $dtj['jml_ap'];
        }
        $sumAtf;
        $sumPsf;
        $jmlAgt;
        $jmlAP;
        function sumAP($sum1,$sum2)
        { 
            return $sum1+$sum2;
        }
        function sumpersen($obj,$jump):float
        {   
            return ($obj/$jump)*100;
        }

        $tot =sumAP($sumAtf,$sumPsf);
        
        $persenPSF =sumpersen($sumPsf,$tot);
        $persenATF =sumpersen($sumAtf,$tot);

    @endphp
@section('content')

<div class="row">
  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
    <div class="card card-statistics">
      <div class="card-body">
        <div class="d-flex flex-md-column flex-xl-row flex-wrap justify-content-between align-items-md-center justify-content-xl-between">
          <div class="float-left">
            <i class="mdi mdi-cube text-danger icon-lg"></i>
          </div>
          <div class="float-right">
            <p class="mb-0 text-right">Total Revenue</p>
            <div class="fluid-container">
              <h3 class="font-weight-medium text-right mb-0">$65,650</h3>
            </div>
          </div>
        </div>
        <p class="text-muted mt-3 mb-0 text-left text-md-center text-xl-left">
          <i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"></i> 65% lower growth </p>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
    <div class="card card-statistics">
      <div class="card-body">
        <div class="d-flex flex-md-column flex-xl-row flex-wrap justify-content-between align-items-md-center justify-content-xl-between">
          <div class="float-left">
            <i class="mdi mdi-receipt text-warning icon-lg"></i>
          </div>
          <div class="float-right">
            <p class="mb-0 text-right">Orders</p>
            <div class="fluid-container">
              <h3 class="font-weight-medium text-right mb-0">3455</h3>
            </div>
          </div>
        </div>
        <p class="text-muted mt-3 mb-0 text-left text-md-center text-xl-left">
          <i class="mdi mdi-bookmark-outline mr-1" aria-hidden="true"></i> Product-wise sales </p>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
    <div class="card card-statistics">
      <div class="card-body">
        <div class="d-flex flex-md-column flex-xl-row flex-wrap justify-content-between align-items-md-center justify-content-xl-between">
          <div class="float-left">
            <i class="mdi mdi-poll-box text-success icon-lg"></i>
          </div>
          <div class="float-right">
            <p class="mb-0 text-right">Aktif Pasif Koperasi Perjenis</p>
            <div class="fluid-container">
              <h3 class="font-weight-medium text-right mb-0">{{number_format($jmlAP)}}</h3>
            </div>
          </div>
        </div>
        <p class="text-muted mt-3 mb-0 text-left text-md-center text-xl-left">
          <i class="mdi mdi-calendar mr-1" aria-hidden="true"></i>Total Jumlah Aktif Pasif Koperasi Perjenis</p>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
    <div class="card card-statistics">
      <div class="card-body">
        <div class="d-flex flex-md-column flex-xl-row flex-wrap justify-content-between align-items-md-center justify-content-xl-between">
          <div class="float-left">
            <i class="mdi mdi-account-box-multiple text-info icon-lg"></i>
          </div>
          <div class="float-right">
            <p class="mb-0 text-right">Anggota Binaan Koperasi</p>
            <div class="fluid-container">
              <h3 class="font-weight-medium text-right mb-0">{{number_format($jmlAgt)}}</h3>
            </div>
          </div>
        </div>
        <p class="text-muted mt-3 mb-0 text-left text-md-center text-xl-left">
          <i class="mdi mdi-reload mr-1" aria-hidden="true"></i> Total Seluruh Anggota </p>
      </div>
    </div>
  </div>
</div>
{{-- grafik koperasi --}}
<div class="row">
  <div class="col-md-6 grid-margin">
    <div class="card">
      <div class="card-body">
        <div class="d-sm-flex justify-content-between align-items-center mb-4">
          <h2 class="card-title mb-0">Jenis Koperasi</h2>
          <div class="wrapper d-flex">
            <div class="d-flex align-items-center mr-3">
              <span class="dot-indicator bg-success"></span>
              <p class="mb-0 ml-2 text-muted">Aktif</p>
            </div>
            <div class="d-flex align-items-center mr-3">
              <span class="dot-indicator bg-primary"></span>
              <p class="mb-0 ml-2 text-muted">Pasif</p>
            </div>
            <div class="d-flex align-items-center">
              <span class="dot-indicator bg-danger"></span>
              <p class="mb-0 ml-2 text-muted">Jumlah</p>
            </div>
          </div>
        </div>
        <div class="chart-container">
          <canvas id="dashboard-area-chart" height="80"></canvas>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-6 grid-margin">
    <div class="card">
      <div class="card-body">
        <div class="d-sm-flex justify-content-between align-items-center mb-4">
          <h2 class="card-title mb-0">Binaan Koperasi</h2>
          <div class="wrapper d-flex">
            <div class="d-flex align-items-center mr-3">
              <span class="dot-indicator bg-success"></span>
              <p class="mb-0 ml-2 text-muted">Aktif</p>
            </div>
            <div class="d-flex align-items-center mr-3">
              <span class="dot-indicator bg-primary"></span>
              <p class="mb-0 ml-2 text-muted">Pasif</p>
            </div>
            <div class="d-flex align-items-center">
              <span class="dot-indicator bg-danger"></span>
              <p class="mb-0 ml-2 text-muted">Jumlah</p>
            </div>
          </div>
        </div>
        <div class="chart-container">
          <canvas id="dashboard-area-chart-jenis" height="80"></canvas>
        </div>
      </div>
    </div>
  </div>
</div>
{{-- tabel koperasi --}}
<div class="row">
    <div class="col-md-12 grid-margin">
        <div class="card">
          <div class="card-body">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Jenis Koperasi</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Binaan Koperasi</a>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <table class="table table-bordered table-strip">
                        <thead>
                            <tr>
                                <th>Koperasi Jenis</th>
                                <th>BT</th>
                                <th>GK</th>
                                <th>KP</th>
                                <th>SM</th>
                                <th>YK</th>
                                <th>Jumlah</th>
                            </tr>
                        </thead>
                        <tbody>
                        
                                @foreach ($dataJenis as $item)
                                    <tr>
                                        <td>{{ $item['koperasi']}}</td>
                                        <td>{{ $item['BTL']}}</td>
                                        <td>{{ $item['GK']}}</td>
                                        <td>{{ $item['KP']}}</td>
                                        <td>{{ $item['SLM']}}</td>
                                        <td>{{ $item['YK']}}</td>
                                        <td>{{$item['jml_ap']}}</td>
                                    </tr>
                                @endforeach
                        
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <table class="table table-bordered table-strip">
                        <thead>
                            <tr>
                                <th>Binaan Koperasi</th>
                                <th>Anggota Pria</th>
                                <th>Anggota Wanita</th>
                                <th>Akit</th>
                                <th>Pasif</th>
                                <th>Jumlah Anggota</th>
                                <th>Jumlah Aktif Pasif</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                    <tr>
                                        <td>{{ $item['koperasi']}}</td>
                                        <td>{{ $item['anggota_pria']}}</td>
                                        <td>{{ $item['anggota_wanita']}}</td>
                                        <td>{{ $item['aktif']}}</td>
                                        <td>{{ $item['pasif']}}</td>
                                        <td>{{ $item['jumlah_anggota']}}</td>
                                        <td>{{$item['jml_ap']}}</td>
                                    </tr>
                                @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
          </div>
        </div>
    </div>
</div>
{{-- diagram donat koperasi aktiv pasif --}}
<div class="row">
  <div class="col-sm-6 col-md-6 col-lg-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-md-5 d-flex align-items-center">
            <canvas id="UsersDoughnutChart" class="400x160 mb-4 mb-md-0" height="200"></canvas>
          </div>
          <div class="col-md-7">
            <h4 class="card-title font-weight-medium mb-0 d-none d-md-block">Koperasi Aktif Pasif</h4>
            <div class="wrapper mt-4">
              <div class="d-flex justify-content-between mb-2">
                <div class="d-flex align-items-center">
                  <p class="mb-0 font-weight-medium">{{number_format($sumPsf)}}</p>
                  <small class="text-muted ml-2">Pasif</small>
                </div>
                <p class="mb-0 font-weight-medium">{{ceil($persenPSF)}}%</p>
              </div>
              <div class="progress">
                <div class="progress-bar bg-primary" role="progressbar" style="width: {{$persenPSF}}%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <div class="wrapper mt-4">
              <div class="d-flex justify-content-between mb-2">
                <div class="d-flex align-items-center">
                  <p class="mb-0 font-weight-medium">{{number_format($sumAtf)}}</p>
                  <small class="text-muted ml-2">Aktif</small>
                </div>
                <p class="mb-0 font-weight-medium">{{ceil($persenATF)}}%</p>
              </div>
              <div class="progress">
                <div class="progress-bar bg-success" role="progressbar" style="width:{{$persenATF}}%" aria-valuenow="93" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-6 col-lg-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-md-7">
            <h4 class="card-title font-weight-medium mb-3">Amount Due</h4>
            <h1 class="font-weight-medium mb-0">$5998</h1>
            <p class="text-muted">Milestone Completed</p>
            <p class="mb-0">Payment for next week</p>
          </div>
          <div class="col-md-5 d-flex align-items-end mt-4 mt-md-0">
            <canvas id="conversionBarChart" height="150"></canvas>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



@endsection

@push('plugin-scripts')
  {!! Html::script('/assets/plugins/chartjs/chart.min.js') !!}
  {!! Html::script('/assets/plugins/jquery-sparkline/jquery.sparkline.min.js') !!}
@endpush

@push('custom-scripts')
  <script>
      (function($) {
        "use strict";
        $(function() {
            var lineChartStyleOption_1 = {
                scales: {
                    yAxes: [
                        {
                            display: false
                        }
                    ],
                    xAxes: [
                        {
                            display: false
                        }
                    ]
                },
                legend: {
                    display: false
                },
                elements: {
                    point: {
                        radius: 1
                    },
                    line: {
                        tension: 0
                    }
                },
                stepsize: 100
            };
            
            if ($("#dashboard-area-chart").length) {
                var lineChartCanvas = $("#dashboard-area-chart")
                    .get(0)
                    .getContext("2d");
                var data = {
                    labels: [<?php foreach ($dataJenis as $dt){ echo "'$dt[koperasi]',";} ?>],
                    datasets: [
                        {
                            label: "Pasif",
                            data: [<?php foreach ($dataJenis as $dt){ echo "$dt[pasif],";} ?>],
                            backgroundColor: "#2196f3",
                            borderColor: "#0c83e2",
                            borderWidth: 1,
                            fill: true
                        },
                        {
                            label: "Aktif",
                            data: [<?php foreach ($dataJenis as $dt){ echo "$dt[aktif],";} ?>],
                            backgroundColor: "#19d895",
                            borderColor: "#15b67d",
                            borderWidth: 1,
                            fill: true
                        },
                        {
                            label: "Jumlah",
                            data: [<?php foreach ($dataJenis as $dt){ echo "$dt[jml_ap],";} ?>],
                            backgroundColor: "red",
                            borderColor: "#15b67d",
                            borderWidth: 1,
                            fill: true
                        }
                    ]
                };
                var options = {
                    responsive: true,
                    maintainAspectRatio: true,
                    scales: {
                        yAxes: [
                            {
                                gridLines: {
                                    color: "#F2F6F9"
                                }
                            }
                        ],
                        xAxes: [
                            {
                                gridLines: {
                                    color: "#F2F6F9"
                                },
                                ticks: {
                                    beginAtZero: true
                                }
                            }
                        ]
                    },
                    legend: {
                        display: false
                    },
                    elements: {
                        point: {
                            radius: 2
                        }
                    },
                    layout: {
                        padding: {
                            left: 0,
                            right: 0,
                            top: 0,
                            bottom: 0
                        }
                    },
                    stepsize: 1
                };
                var lineChart = new Chart(lineChartCanvas, {
                    type: "bar",
                    data: data,
                    options: options
                });
            }
            if ($("#dashboard-area-chart-jenis").length) {
                var lineChartCanvas = $("#dashboard-area-chart-jenis")
                    .get(0)
                    .getContext("2d");
                var data = {
                    labels: [<?php foreach ($data as $dt){ echo "'$dt[koperasi]',";} ?>],
                    datasets: [
                        {
                            label: "Pasif",
                            data: [<?php foreach ($data as $dt){ echo "$dt[pasif],";} ?>],
                            backgroundColor: "#2196f3",
                            borderColor: "#0c83e2",
                            borderWidth: 1,
                            fill: true
                        },
                        {
                            label: "Aktif",
                            data: [<?php foreach ($data as $dt){ echo "$dt[aktif],";} ?>],
                            backgroundColor: "#19d895",
                            borderColor: "#15b67d",
                            borderWidth: 1,
                            fill: true
                        },
                        {
                            label: "Jumlah",
                            data: [<?php foreach ($data as $dt){ echo "$dt[jml_ap],";} ?>],
                            backgroundColor: "red",
                            borderColor: "#15b67d",
                            borderWidth: 1,
                            fill: true
                        }
                    ]
                };
                var options = {
                    responsive: true,
                    maintainAspectRatio: true,
                    scales: {
                        yAxes: [
                            {
                                gridLines: {
                                    color: "#F2F6F9"
                                }
                            }
                        ],
                        xAxes: [
                            {
                                gridLines: {
                                    color: "#F2F6F9"
                                },
                                ticks: {
                                    beginAtZero: true
                                }
                            }
                        ]
                    },
                    legend: {
                        display: false
                    },
                    elements: {
                        point: {
                            radius: 2
                        }
                    },
                    layout: {
                        padding: {
                            left: 0,
                            right: 0,
                            top: 0,
                            bottom: 0
                        }
                    },
                    stepsize: 1
                };
                var lineChart = new Chart(lineChartCanvas, {
                    type: "bar",
                    data: data,
                    options: options
                });
            }
            if ($("#UsersDoughnutChart").length) {
                var doughnutChartCanvas = $("#UsersDoughnutChart")
                    .get(0)
                    .getContext("2d");
                var doughnutPieData = {
                    datasets: [
                        {
                            data: [{{$sumAtf}},{{$sumPsf}}],
                            backgroundColor: [
                                successColor,
                                primaryColor,
                                secondaryColor
                            ],
                            borderColor: [
                                successColor,
                                primaryColor,
                                secondaryColor
                            ]
                        }
                    ],
                    labels: ["Aktif", "Pasif"]
                };
                var doughnutPieOptions = {
                        cutoutPercentage: 70,
                        animationEasing: "easeOutBounce",
                        animateRotate: true,
                        animateScale: false,
                        responsive: true,
                        maintainAspectRatio: true,
                        showScale: true,
                    legend: {
                        display: false
                    },
                    layout: {
                        padding: {
                            left: 0,
                            right: 0,
                            top: 0,
                            bottom: 0
                        }
                    }
                };
                var doughnutChart = new Chart(doughnutChartCanvas, {
                    type: "doughnut",
                    data: doughnutPieData,
                    options: doughnutPieOptions
                });
            }
            
        });
        })(jQuery);
  </script>
@endpush