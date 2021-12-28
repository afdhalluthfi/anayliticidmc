@extends('layout.master')

@push('plugin-styles')
  <!-- {!! Html::style('/assets/plugins/plugin.css') !!} -->
@endpush
@section('content')
<div class="row">
    @php
        $totUkmKab=0;
        $totPendapatan=0;
        $totAset=0;
        foreach($dataKabupaten as $kab){$totUkmKab +=$kab['jumlah'];}
        foreach($dataKlasifikasi as $kab){$totPendapatan += $kab['omset']; $totAset += $kab['aset'];}
        
    @endphp
</div>
{{-- card --}}
<div class="row">
  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
    <div class="card card-statistics" data-aos='fade-up'>
      <div class="card-body">
        <div class="d-flex flex-md-column flex-xl-row flex-wrap justify-content-between align-items-md-center justify-content-xl-between">
          <div class="float-left">
            <i class="mdi mdi-cube text-danger icon-lg"></i>
          </div>
          <div class="float-right">
            <p class="mb-0 text-right">UMKM Kabupaten</p>
            <div class="fluid-container">
              <h3 class="font-weight-medium text-right mb-0">{{$totUkmKab}}</h3>
            </div>
          </div>
        </div>
        <p class="text-muted mt-3 mb-0 text-left text-md-center text-xl-left">
          <i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"></i> Total UMKM Kabupaten </p>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card" data-aos="fade-up" data-aos-delay='500'>
    <div class="card card-statistics">
      <div class="card-body">
        <div class="d-flex flex-md-column flex-xl-row flex-wrap justify-content-between align-items-md-center justify-content-xl-between">
          <div class="float-left">
            <i class="mdi mdi-receipt text-warning icon-lg"></i>
          </div>
          <div class="float-right">
            <p class="mb-0 text-right">Total Pendapatan UMKM</p>
            <div class="fluid-container">
              <h3 class="font-weight-medium text-right mb-0">{{'Rp.'.number_format($totPendapatan)}}</h3>
            </div>
          </div>
        </div>
        <p class="text-muted mt-3 mb-0 text-left text-md-center text-xl-left">
          <i class="mdi mdi-bookmark-outline mr-1" aria-hidden="true"></i> Total Pendaptan UMKM </p>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card" data-aos="fade-up" data-aos-delay='600'>
    <div class="card card-statistics">
      <div class="card-body">
        <div class="d-flex flex-md-column flex-xl-row flex-wrap justify-content-between align-items-md-center justify-content-xl-between">
          <div class="float-left">
            <i class="mdi mdi-poll-box text-success icon-lg"></i>
          </div>
          <div class="float-right">
            <p class="mb-0 text-right">Aset</p>
            <div class="fluid-container">
              <h3 class="font-weight-medium text-right mb-0">{{'Rp.'.number_format($totAset)}}</h3>
            </div>
          </div>
        </div>
        <p class="text-muted mt-3 mb-0 text-left text-md-center text-xl-left">
          <i class="mdi mdi-calendar mr-1" aria-hidden="true"></i>Total Aset</p>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card" data-aos="fade-up" data-aos-delay='700'>
    <div class="card card-statistics">
      <div class="card-body">
        <div class="d-flex flex-md-column flex-xl-row flex-wrap justify-content-between align-items-md-center justify-content-xl-between">
          <div class="float-left">
            <i class="mdi mdi-account-box-multiple text-info icon-lg"></i>
          </div>
          <div class="float-right">
            <p class="mb-0 text-right">Anggota Binaan Koperasi</p>
            <div class="fluid-container">
              <h3 class="font-weight-medium text-right mb-0">0</h3>
            </div>
          </div>
        </div>
        <p class="text-muted mt-3 mb-0 text-left text-md-center text-xl-left">
          <i class="mdi mdi-reload mr-1" aria-hidden="true"></i> Total Seluruh Anggota </p>
      </div>
    </div>
  </div>
</div>
{{-- grafik --}}
<div class="row">
  <div class="col-md-12 grid-margin">
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
</div>
{{-- tabel --}}
<div class="row">
    <div class="col-md-12 grid-margin">
        <div class="card">
          <div class="card-body">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Binaan</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Klasifikasi</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Kabupaten</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="pills-ekraf-tab" data-toggle="pill" href="#pills-ekraf" role="tab" aria-controls="pills-ekraf" aria-selected="false">Sektro Ekraf</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="pills-disabilitas-tab" data-toggle="pill" href="#pills-disabilitas" role="tab" aria-controls="pills-disabilitas" aria-selected="false">Disabilitas</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="pills-pergrub-tab" data-toggle="pill" href="#pills-pergrub" role="tab" aria-controls="pills-pergrub" aria-selected="false">Sektro Pergub</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="pills-dataPendidikan-tab" data-toggle="pill" href="#pills-dataPendidikan" role="tab" aria-controls="pills-dataPendidikan" aria-selected="false">Pendidikan</a>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <table class="table table-bordered table-strip">
                        <thead>
                            <tr>
                                <th>Kelas Binaaan</th>
                                <th>BT</th>
                                <th>GK</th>
                                <th>KP</th>
                                <th>SM</th>
                                <th>YK</th>
                                <th>Jumlah</th>
                            </tr>
                        </thead>
                        <tbody>
                        
                                @foreach ($data as $item)
                                    <tr>
                                        <td>{{ $item['Kelas']}}</td>
                                        <td>{{$item['BTL']}}</td>
                                        <td>{{$item['GK']}}</td>
                                        <td>{{$item['KP']}}</td>
                                        <td>{{$item['SLM']}}</td>
                                        <td>{{$item['YK']}}</td>
                                        <td>{{$item['jumlah']}}</td>
                                    </tr>
                                @endforeach
                        
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <table class="table table-bordered table-strip">
                        <thead>
                            <tr>
                                <th>Klasifikasi Usaha</th>
                                <th>BT</th>
                                <th>GK</th>
                                <th>KP</th>
                                <th>SM</th>
                                <th>YK</th>
                                <th>Jumlah</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dataKlasifikasi as $item)
                                    <tr>
                                        <td>{{ $item['klasifikasi_usaha']}}</td>
                                        <td>{{$item['BTL']}}</td>
                                        <td>{{$item['GK']}}</td>
                                        <td>{{$item['KP']}}</td>
                                        <td>{{$item['SLM']}}</td>
                                        <td>{{$item['YK']}}</td>
                                        <td>{{$item['jumlah']}}</td>
                                    </tr>
                                @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <table class="table table-bordered table-strip">
                        <thead>
                            <tr>
                                <th>Kabupaten</th>
                                <th>Jumlah</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dataKabupaten as $item)
                            <tr>
                                <td>{{ $item['kabupaten']}}</td>
                                <td>{{$item['jumlah']}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="pills-ekraf" role="tabpanel" aria-labelledby="pills-ekraf-tab">
                    <table class="table table-bordered table-strip">
                        <thead>
                            <tr>
                                <th>Sektor Ekraf</th>
                                <th>BT</th>
                                <th>GK</th>
                                <th>KP</th>
                                <th>SM</th>
                                <th>YK</th>
                                <th>Jumlah</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dataEkraf as $item)
                                    <tr>
                                        <td>{{ $item['sektor_ekraf']}}</td>
                                        <td>{{$item['BTL']}}</td>
                                        <td>{{$item['GK']}}</td>
                                        <td>{{$item['KP']}}</td>
                                        <td>{{$item['SLM']}}</td>
                                        <td>{{$item['YK']}}</td>
                                        <td>{{$item['jumlah']}}</td>
                                    </tr>
                                @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="pills-disabilitas" role="tabpanel" aria-labelledby="pills-disabilitas-tab">
                    <table class="table table-bordered table-strip">
                        <thead>
                            <tr>
                                <th>Sektor Ekraf</th>
                                <th>BT</th>
                                <th>GK</th>
                                <th>KP</th>
                                <th>SM</th>
                                <th>YK</th>
                                <th>Jumlah</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dataDisabilitas as $item)
                                    <tr>
                                        <td>{{ $item['Disabilitas']}}</td>
                                        <td>{{$item['BTL']}}</td>
                                        <td>{{$item['GK']}}</td>
                                        <td>{{$item['KP']}}</td>
                                        <td>{{$item['SLM']}}</td>
                                        <td>{{$item['YK']}}</td>
                                        <td>{{$item['jumlah']}}</td>
                                    </tr>
                                @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="pills-pergrub" role="tabpanel" aria-labelledby="pills-pergrub-tab">
                    <table class="table table-bordered table-strip">
                        <thead>
                            <tr>
                                <th>Sektor Pergub</th>
                                <th>BT</th>
                                <th>GK</th>
                                <th>KP</th>
                                <th>SM</th>
                                <th>YK</th>
                                <th>Jumlah</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dataGroup as $item)
                                    <tr>
                                        <td>{{ $item['sektor_pergub']}}</td>
                                        <td>{{$item['BTL']}}</td>
                                        <td>{{$item['GK']}}</td>
                                        <td>{{$item['KP']}}</td>
                                        <td>{{$item['SLM']}}</td>
                                        <td>{{$item['YK']}}</td>
                                        <td>{{$item['jumlah']}}</td>
                                    </tr>
                                @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="pills-dataPendidikan" role="tabpanel" aria-labelledby="pills-dataPendidikan-tab">
                    <table class="table table-bordered table-strip">
                        <thead>
                            <tr>
                                <th>Pendidikan</th>
                                <th>BT</th>
                                <th>GK</th>
                                <th>KP</th>
                                <th>SM</th>
                                <th>YK</th>
                                <th>Jumlah</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dataPendidikan as $item)
                                    <tr>
                                        <td>{{ $item['Pendidikan']}}</td>
                                        <td>{{$item['BTL']}}</td>
                                        <td>{{$item['GK']}}</td>
                                        <td>{{$item['KP']}}</td>
                                        <td>{{$item['SLM']}}</td>
                                        <td>{{$item['YK']}}</td>
                                        <td>{{$item['jumlah']}}</td>
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
        if ($("#conversionBarChart").length) {
            var barChartCanvas = $("#conversionBarChart")
                .get(0)
                .getContext("2d");
            var barChart = new Chart(barChartCanvas, {
                type: "bar",
                data: {
                    labels: [
                       <?php 
                       foreach($data as $item) {
                                echo "'$item[Kelas]',";
                            }
                       ?>
                    ],
                    datasets: [
                        {
                            label: "Amount Due",
                            data: [
                                <?php
                                foreach($data as $item) {
                                echo "$item[jumlah],";
                            }
                            ?>
                            ],
                            backgroundColor: primaryColor,
                            borderColor: primaryColor,
                            borderWidth: 0
                        }
                    ]
                },
                options: {
                    layout: {
                        padding: {
                            left: 0,
                            right: 0,
                            top: 0,
                            bottom: 0
                        }
                    },

                    scales: {
                        responsive: true,
                        maintainAspectRatio: true,
                        yAxes: [
                            {
                                display: false,
                                gridLines: {
                                    color: "rgba(0, 0, 0, 0.03)"
                                },
                                ticks: {
                                    beginAtZero: true
                                }
                            }
                        ],
                        xAxes: [
                            {
                                display: false,
                                gridLines: {
                                    display: false
                                }
                            }
                        ]
                    },
                    legend: {
                        display: false
                    },
                    title: {
                        display: true,
                        text: 'Binaan Perkelas'
                    }
                }
            });
        }
        if ($("#conversionBarChart1").length) {
            var barChartCanvas = $("#conversionBarChart1")
                .get(0)
                .getContext("2d");
            var barChart = new Chart(barChartCanvas, {
                type: "bar",
                data: {
                    labels: [
                       <?php 
                       foreach($dataKlasifikasi as $item) {
                                echo "'$item[klasifikasi_usaha]',";
                            }
                       ?>
                    ],
                    datasets: [
                        {
                            label: "Jumlah: ",
                            data: [
                                <?php
                                foreach($dataKlasifikasi as $item) {
                                echo "$item[jumlah],";
                            }
                            ?>
                            ],
                            backgroundColor: primaryColor,
                            borderColor: primaryColor,
                            borderWidth: 0
                        }
                    ]
                },
                options: {
                    layout: {
                        padding: {
                            left: 0,
                            right: 0,
                            top: 0,
                            bottom: 0
                        }
                    },

                    scales: {
                        responsive: true,
                        maintainAspectRatio: true,
                        yAxes: [
                            {
                                display: false,
                                gridLines: {
                                    color: "rgba(0, 0, 0, 0.03)"
                                },
                                ticks: {
                                    beginAtZero: true
                                }
                            }
                        ],
                        xAxes: [
                            {
                                display: false,
                                gridLines: {
                                    display: false
                                }
                            }
                        ]
                    },
                    legend: {
                        display: false
                    },
                    title: {
                        display: true,
                        text:'klasifikasi berdasarkan usaha'
                    }
                }
            });
        }
        if ($("#conversionBarChart2").length) {
            var barChartCanvas = $("#conversionBarChart2")
                .get(0)
                .getContext("2d");
            var barChart = new Chart(barChartCanvas, {
                type: "bar",
                data: {
                    labels: [
                       <?php 
                       foreach($dataPendidikan as $item) {
                                echo "'$item[Pendidikan]',";
                            }
                       ?>
                    ],
                    datasets: [
                        {
                            label: "Jumlah: ",
                            data: [
                                <?php
                                foreach($dataPendidikan as $item) {
                                echo "$item[jumlah],";
                            }
                            ?>
                            ],
                            backgroundColor: primaryColor,
                            borderColor: primaryColor,
                            borderWidth: 0
                        }
                    ]
                },
                options: {
                    layout: {
                        padding: {
                            left: 0,
                            right: 0,
                            top: 0,
                            bottom: 0
                        }
                    },

                    scales: {
                        responsive: true,
                        maintainAspectRatio: true,
                        yAxes: [
                            {
                                display: false,
                                gridLines: {
                                    color: "rgba(0, 0, 0, 0.03)"
                                },
                                ticks: {
                                    beginAtZero: true
                                }
                            }
                        ],
                        xAxes: [
                            {
                                display: false,
                                gridLines: {
                                    display: false
                                }
                            }
                        ]
                    },
                    legend: {
                        display: false
                    },
                    title: {
                        display: true,
                        text: 'Pendidikan'
                    }
                }
            });
        }
        if ($("#dashboard-area-chart").length) {
            var lineChartCanvas = $("#dashboard-area-chart")
                .get(0)
                .getContext("2d");
            var data = {
                labels: [<?php foreach($dataKabupaten as $ite){echo "'$ite[kabupaten]',";}?>],
                datasets: [
                    {
                        label: "Product",
                        data: [<?php foreach($dataKabupaten as $ite){echo "$ite[jumlah],";}?>],
                        backgroundColor: "#2196f3",
                        borderColor: "#0c83e2",
                        borderWidth: 1,
                        fill: true
                    },
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
                            },
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