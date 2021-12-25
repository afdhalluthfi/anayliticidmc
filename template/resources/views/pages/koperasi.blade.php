@extends('layout.master')

@push('plugin-styles')
  <!-- {!! Html::style('/assets/plugins/plugin.css') !!} -->
@endpush

@section('content')
<div class="row">
  {{-- binaan --}}
  <div class="col-sm-4 col-md-4 col-lg-4 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="row">
            <canvas id="conversionBarChart" height="150"></canvas>
        </div>
      </div>
    </div>
  </div>
  {{-- klasifikasi --}}
  <div class="col-sm-4 col-md-6 col-lg-4 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="row">
            <canvas id="conversionBarChart1" height="150"></canvas>
        </div>
      </div>
    </div>
  </div>
  {{-- pendidikan --}}
  <div class="col-sm-4 col-md-6 col-lg-4 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="row">
            <canvas id="conversionBarChart2" height="150"></canvas>
        </div>
      </div>
    </div>
  </div>  
</div>
<div class="row">
  <div class="col-md-6 grid-margin">
    <div class="card">
      <div class="card-body">
        <div class="d-sm-flex justify-content-between align-items-center mb-4">
          <h2 class="card-title mb-0">Product Analysis</h2>
          <div class="wrapper d-flex">
            <div class="d-flex align-items-center mr-3">
              <span class="dot-indicator bg-success"></span>
              <p class="mb-0 ml-2 text-muted">Product</p>
            </div>
            <div class="d-flex align-items-center">
              <span class="dot-indicator bg-primary"></span>
              <p class="mb-0 ml-2 text-muted">Resources</p>
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
          <h2 class="card-title mb-0">Product Analysis</h2>
          <div class="wrapper d-flex">
            <div class="d-flex align-items-center mr-3">
              <span class="dot-indicator bg-success"></span>
              <p class="mb-0 ml-2 text-muted">Product</p>
            </div>
            <div class="d-flex align-items-center">
              <span class="dot-indicator bg-primary"></span>
              <p class="mb-0 ml-2 text-muted">Resources</p>
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
<div class="row">
    @php
        echo "<pre>";
            var_dump($data);
        echo "</pre>";
    @endphp
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
            
            });
        })(jQuery);
  </script>
@endpush