@extends('template')
@section('content')
    <style>
        .card-people .weather-info {
            position: absolute;
            top: -60px;
            right: 24px;
        }
    </style>
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-12 grid-margin">
                    <div class="row">
                        <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                            <h3 class="font-weight-bold">Welcome Guys</h3>
                            <h6 class="font-weight-normal mb-0">Kualitas Udara Sekarang Seperti Berikut Guys:
                            </h6>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card tale-bg">
                        <div class="card-people mt-auto">
                            <img src="skydash/images/dashboard/people.svg" alt="people">
                            <div class="weather-info">
                                <div class="d-flex">
                                    {{-- <div>
                                        <h2 class="mb-0 font-weight-normal"><i
                                                class="icon-sun mr-2"></i>{{ $data->first()->value_suhu }}<sup>C</sup>
                                        </h2>
                                        <h2 class="mb-0 font-weight-normal">{{ $data->first()->kategori_suhu }}
                                        </h2>
                                    </div> --}}
                                    <div class="ml-2">
                                        <h4 class="location font-weight-normal">{{ $data->first()->value_suhu }} °C</h4>
                                        <h4 class="location font-weight-normal">Pontianak</h4>
                                        <h6 class="font-weight-normal">Indonesia</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 grid-margin transparent">
                    <div class="row">
                        <div class="col-md-6 mb-4 stretch-card transparent">
                            <div
                                class="card  @if ($data->first()->kategori_suhu == 'Baik') bg-success text-light
                            @elseif($data->first()->kategori_suhu == 'Tidak Baik')
                                bg-primary  text-light
                            @elseif($data->first()->kategori_suhu == 'Berbahaya')
                                bg-warning  text-light
                                @elseif($data->first()->kategori_suhu == 'Sangat Berbahaya')
                                bg-danger text-light
                            @else
                                bg-dark  text-light @endif
                        ">
                                <div class="card-body ">
                                    <p class="mb-3">Suhu (Temprature)</p>
                                    <p class="fs-30 mb-3" id="suhu">{{ $data->first()->value_suhu }} °C</p>
                                    <p class="fs-30 mb-2" id="suhu">{{ $data->first()->kategori_suhu }}</p>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4 stretch-card transparent">
                            <div
                                class="card  @if ($data->first()->kategori_kel == 'Baik') bg-success text-light
                                @elseif($data->first()->kategori_kel == 'Tidak Baik')
                                    bg-primary text-light
                                @elseif($data->first()->kategori_kel == 'Berbahaya')
                                    bg-warning text-light
                                @elseif($data->first()->kategori_kel == 'Sangat Berbahaya')
                                    bg-danger text-light
                                @else
                                    bg-dark text-light @endif">
                                <div class="card-body">
                                    <p class="mb-3">Kelembaban (Humidity)</p>
                                    <p class="fs-30 mb-2" id="kelembaban">{{ $data->first()->value_kelembaban }}%</p>
                                    <p class="fs-30 mb-2" id="kelembaban">{{ $data->first()->kategori_kel }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-4 stretch-card transparent">
                            <div
                                class="card  @if ($data->first()->kategori_pm10 == 'Baik') bg-success text-light
                            @elseif($data->first()->kategori_pm10 == 'Sedang')
                                bg-primary text-light
                            @elseif($data->first()->kategori_pm10 == 'Tidak Sehat')
                                bg-warning text-light
                            @elseif($data->first()->kategori_pm10 == 'Sangat Tidak Sehat')
                                bg-danger text-light
                            @else
                                bg-dark text-light @endif">
                                <div class="card-body">
                                    <p class="mb-3">PM10 </p>
                                    <p class="fs-30 mb-3" id="pm10">{{ $data->first()->value_pm10 }} mg/m3</p>
                                    <p class="fs-30 mb-2" id="pm10">{{ $data->first()->kategori_pm10 }} </p>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4 stretch-card transparent">
                            <div
                                class="card  @if ($data->first()->kategori_pm25 == 'Baik') bg-success text-light
                            @elseif($data->first()->kategori_pm25 == 'Sedang')
                                bg-primary text-light
                            @elseif($data->first()->kategori_pm25 == 'Tidak Sehat')
                                bg-warning text-light
                            @elseif($data->first()->kategori_pm25 == 'Sangat Tidak Sehat')
                                bg-danger text-light
                            @else
                                bg-dark text-light @endif ">
                                <div class="card-body">
                                    <p class="mb-3">PM2.5</p>
                                    <p class="fs-30 mb-3" id="pm25">{{ $data->first()->value_pm25 }} mg/m3</p>
                                    <p class="fs-30 mb-2" id="pm25">{{ $data->first()->kategori_pm25 }} </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                            <div
                                class="card  @if ($data->first()->kategori_co == 'Baik') bg-success text-light
                                @elseif($data->first()->kategori_co == 'Cukup')
                                    bg-primary text-light
                                @elseif($data->first()->kategori_co == 'Buruk')
                                    bg-warning text-light
                                @elseif($data->first()->kategori_co == 'Sangat Buruk')
                                    bg-danger text-light
                                @else
                                    bg-dark text-light @endif">
                                <div class="card-body">
                                    <p class="mb-3">Carbon Oksida(CO)</p>
                                    <p class="fs-30 mb-3" id="co">{{ $data->first()->value_co }} ppm</p>
                                    <p class="fs-30 mb-3" id="co">{{ $data->first()->kategori_co }} </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 stretch-card transparent">
                            <div
                                class="card @if ($data->first()->kategori_co2 == 'Baik') bg-success text-light
                                @elseif($data->first()->kategori_co2 == 'Cukup')
                                    bg-primary text-light
                                @elseif($data->first()->kategori_co2 == 'Buruk')
                                    bg-warning text-light
                                @elseif($data->first()->kategori_co2 == 'Sangat Buruk')
                                    bg-danger text-light
                                @else
                                    bg-dark text-light @endif">
                                <div class="card-body">
                                    <p class="mb-3">Carbon DiOksida(CO2)</p>
                                    <p class="fs-30 mb-3" id="co2">{{ $data->first()->value_co2 }} ppm</p>
                                    <p class="fs-30 mb-2" id="co">{{ $data->first()->kategori_co2 }} </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{--  chart --}}
            {{-- <div class="row">
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title">Suhu (Temprature)</p>
                            <canvas id="order-chart0"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title">Kelembaban (Humidity)</p>
                            <canvas id="order-chart2"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title">PM 10</p>
                            <canvas id="order-chartpm1"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title">PM2.5</p>
                            <canvas id="order-chartpm2"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title">Carbon Oksida</p>
                            <canvas id="order-chart3"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title">Carbon DiOksida</p>
                            <canvas id="order-chart4"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Area chart</h4>
                            <canvas id="areaChart"></canvas>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            setInterval(function() {
                $.ajax({
                    url: '/sensors/latest',
                    type: 'GET',
                    success: function(data) {
                        updateData(data);
                    },
                    error: function(xhr, status, error) {
                        console.error('Error:', status, error);
                    }
                });
            }, 5000); // Perbarui setiap 5 detik
        });

        function updateData(data) {
            $('#suhu').text(data.value_suhu + ' C');
            $('#kelembaban').text(data.value_kelembaban + '%');
            $('#pm10').text(data.value_pm10 + ' mg/m3');
            $('#pm25').text(data.value_pm25 + ' mg/m3');
            $('#co').text(data.value_co + 'ppm');
            $('#co2').text(data.value_co2 + 'ppm');
        }
    </script>
    {{--
    <script>
        (function($) {
            'use strict';
            $(function() {
                if ($("#order-chartpm2").length) {
                    var areaData = {
                        labels: ["10", "", "", "20", "", "", "30", "", "", "40", "", "", "50", "", "", "60",
                            "", "", "70"
                        ],
                        datasets: [{
                                data: [200, 480, 700, 600, 620, 350, 380, 350, 850, "600", "650", "350",
                                    "590", "350", "620", "500", "990", "780", "650"
                                ],
                                borderColor: [
                                    '#fe008e'
                                ],
                                borderWidth: 2,
                                fill: false,
                                label: "Orders"
                            },

                        ]
                    };
                    var areaOptions = {
                        responsive: true,
                        maintainAspectRatio: true,
                        plugins: {
                            filler: {
                                propagate: false
                            }
                        },
                        scales: {
                            xAxes: [{
                                display: true,
                                ticks: {
                                    display: true,
                                    padding: 10,
                                    fontColor: "#6C7383"
                                },
                                gridLines: {
                                    display: false,
                                    drawBorder: false,
                                    color: 'transparent',
                                    zeroLineColor: '#eeeeee'
                                }
                            }],
                            yAxes: [{
                                display: true,
                                ticks: {
                                    display: true,
                                    autoSkip: false,
                                    maxRotation: 0,
                                    stepSize: 200,
                                    min: 200,
                                    max: 1200,
                                    padding: 18,
                                    fontColor: "#6C7383"
                                },
                                gridLines: {
                                    display: true,
                                    color: "#f2f2f2",
                                    drawBorder: false
                                }
                            }]
                        },
                        legend: {
                            display: false
                        },
                        tooltips: {
                            enabled: true
                        },
                        elements: {
                            line: {
                                tension: .35
                            },
                            point: {
                                radius: 0
                            }
                        }
                    }
                    var orderChartCanvas = $("#order-chartpm2").get(0).getContext("2d");
                    var orderChart = new Chart(orderChartCanvas, {
                        type: 'line',
                        data: areaData,
                        options: areaOptions
                    });
                }
            });
            $(function() {
                if ($("#order-chartpm1").length) {
                    var areaData = {
                        labels: ["10", "", "", "20", "", "", "30", "", "", "40", "", "", "50", "", "", "60",
                            "", "", "70"
                        ],
                        datasets: [{
                                data: [200, 480, 700, 600, 620, 350, 380, 350, 850, "600", "650", "350",
                                    "590", "350", "620", "500", "990", "780", "650"
                                ],
                                borderColor: [
                                    '#7c4a66'
                                ],
                                borderWidth: 2,
                                fill: false,
                                label: "Orders"
                            },

                        ]
                    };
                    var areaOptions = {
                        responsive: true,
                        maintainAspectRatio: true,
                        plugins: {
                            filler: {
                                propagate: false
                            }
                        },
                        scales: {
                            xAxes: [{
                                display: true,
                                ticks: {
                                    display: true,
                                    padding: 10,
                                    fontColor: "#6C7383"
                                },
                                gridLines: {
                                    display: false,
                                    drawBorder: false,
                                    color: 'transparent',
                                    zeroLineColor: '#eeeeee'
                                }
                            }],
                            yAxes: [{
                                display: true,
                                ticks: {
                                    display: true,
                                    autoSkip: false,
                                    maxRotation: 0,
                                    stepSize: 200,
                                    min: 200,
                                    max: 1200,
                                    padding: 18,
                                    fontColor: "#6C7383"
                                },
                                gridLines: {
                                    display: true,
                                    color: "#f2f2f2",
                                    drawBorder: false
                                }
                            }]
                        },
                        legend: {
                            display: false
                        },
                        tooltips: {
                            enabled: true
                        },
                        elements: {
                            line: {
                                tension: .35
                            },
                            point: {
                                radius: 0
                            }
                        }
                    }
                    var orderChartCanvas = $("#order-chartpm1").get(0).getContext("2d");
                    var orderChart = new Chart(orderChartCanvas, {
                        type: 'line',
                        data: areaData,
                        options: areaOptions
                    });
                }
            });
            $(function() {
                var timestamps = <?php echo json_encode($timestamps); ?>;
                var temperatures = <?php echo json_encode($temperatures); ?>;
                if ($("#order-chart0").length) {
                    var areaData = {
                        labels: [timestamps],
                        datasets: [{
                                data: [200, 480, 700, 600, 620, 350, 380, 350, 850, "600", "650", "350",
                                    "590", "350", "620", "500", "990", "780", "650"
                                ],
                                borderColor: [
                                    '#fe7000'
                                ],
                                borderWidth: 2,
                                fill: false,
                                label: "Orders"
                            },

                        ]
                    };
                    var areaOptions = {
                        responsive: true,
                        maintainAspectRatio: true,
                        plugins: {
                            filler: {
                                propagate: false
                            }
                        },
                        scales: {
                            xAxes: [{
                                display: true,
                                ticks: {
                                    display: true,
                                    padding: 10,
                                    fontColor: "#6C7383"
                                },
                                gridLines: {
                                    display: false,
                                    drawBorder: false,
                                    color: 'transparent',
                                    zeroLineColor: '#eeeeee'
                                }
                            }],
                            yAxes: [{
                                display: true,
                                ticks: {
                                    display: true,
                                    autoSkip: false,
                                    maxRotation: 0,
                                    stepSize: 200,
                                    min: 200,
                                    max: 1200,
                                    padding: 18,
                                    fontColor: "#6C7383"
                                },
                                gridLines: {
                                    display: true,
                                    color: "#f2f2f2",
                                    drawBorder: false
                                }
                            }]
                        },
                        legend: {
                            display: false
                        },
                        tooltips: {
                            enabled: true
                        },
                        elements: {
                            line: {
                                tension: .35
                            },
                            point: {
                                radius: 0
                            }
                        }
                    }
                    var orderChartCanvas = $("#order-chart0").get(0).getContext("2d");
                    var orderChart = new Chart(orderChartCanvas, {
                        type: 'line',
                        data: areaData,
                        options: areaOptions
                    });
                }
            });
            $(function() {
                if ($("#order-chart4").length) {
                    var areaData = {
                        labels: ["10", "", "", "20", "", "", "30", "", "", "40", "", "", "50", "", "", "60",
                            "", "", "70"
                        ],
                        datasets: [{
                                data: [200, 480, 700, 600, 620, 350, 380, 350, 850, "600", "650", "350",
                                    "590", "350", "620", "500", "990", "780", "650"
                                ],
                                borderColor: [
                                    '#fe7000'
                                ],
                                borderWidth: 2,
                                fill: false,
                                label: "Orders"
                            },

                        ]
                    };
                    var areaOptions = {
                        responsive: true,
                        maintainAspectRatio: true,
                        plugins: {
                            filler: {
                                propagate: false
                            }
                        },
                        scales: {
                            xAxes: [{
                                display: true,
                                ticks: {
                                    display: true,
                                    padding: 10,
                                    fontColor: "#6C7383"
                                },
                                gridLines: {
                                    display: false,
                                    drawBorder: false,
                                    color: 'transparent',
                                    zeroLineColor: '#eeeeee'
                                }
                            }],
                            yAxes: [{
                                display: true,
                                ticks: {
                                    display: true,
                                    autoSkip: false,
                                    maxRotation: 0,
                                    stepSize: 200,
                                    min: 200,
                                    max: 1200,
                                    padding: 18,
                                    fontColor: "#6C7383"
                                },
                                gridLines: {
                                    display: true,
                                    color: "#f2f2f2",
                                    drawBorder: false
                                }
                            }]
                        },
                        legend: {
                            display: false
                        },
                        tooltips: {
                            enabled: true
                        },
                        elements: {
                            line: {
                                tension: .35
                            },
                            point: {
                                radius: 0
                            }
                        }
                    }
                    var orderChartCanvas = $("#order-chart4").get(0).getContext("2d");
                    var orderChart = new Chart(orderChartCanvas, {
                        type: 'line',
                        data: areaData,
                        options: areaOptions
                    });
                }
            });
            $(function() {
                if ($("#order-chart3").length) {
                    var areaData = {
                        labels: ["10", "", "", "20", "", "", "30", "", "", "40", "", "", "50", "", "", "60",
                            "", "", "70"
                        ],
                        datasets: [{
                                data: [200, 480, 700, 600, 620, 350, 380, 350, 850, "600", "650", "350",
                                    "590", "350", "620", "500", "990", "780", "650"
                                ],
                                borderColor: [
                                    '#00fe70'
                                ],
                                borderWidth: 2,
                                fill: false,
                                label: "Orders"
                            },

                        ]
                    };
                    var areaOptions = {
                        responsive: true,
                        maintainAspectRatio: true,
                        plugins: {
                            filler: {
                                propagate: false
                            }
                        },
                        scales: {
                            xAxes: [{
                                display: true,
                                ticks: {
                                    display: true,
                                    padding: 10,
                                    fontColor: "#6C7383"
                                },
                                gridLines: {
                                    display: false,
                                    drawBorder: false,
                                    color: 'transparent',
                                    zeroLineColor: '#eeeeee'
                                }
                            }],
                            yAxes: [{
                                display: true,
                                ticks: {
                                    display: true,
                                    autoSkip: false,
                                    maxRotation: 0,
                                    stepSize: 200,
                                    min: 200,
                                    max: 1200,
                                    padding: 18,
                                    fontColor: "#6C7383"
                                },
                                gridLines: {
                                    display: true,
                                    color: "#f2f2f2",
                                    drawBorder: false
                                }
                            }]
                        },
                        legend: {
                            display: false
                        },
                        tooltips: {
                            enabled: true
                        },
                        elements: {
                            line: {
                                tension: .35
                            },
                            point: {
                                radius: 0
                            }
                        }
                    }
                    var orderChartCanvas = $("#order-chart3").get(0).getContext("2d");
                    var orderChart = new Chart(orderChartCanvas, {
                        type: 'line',
                        data: areaData,
                        options: areaOptions
                    });
                }
            });
            $(function() {
                if ($("#order-chart2").length) {
                    var areaData = {
                        labels: ["10", "", "", "20", "", "", "30", "", "", "40", "", "", "50", "", "", "60",
                            "", "", "70"
                        ],
                        datasets: [{
                                data: [200, 480, 700, 600, 620, 350, 380, 350, 850, "600", "650", "350",
                                    "590", "350", "620", "500", "990", "780", "650"
                                ],
                                borderColor: [
                                    '#4747A1'
                                ],
                                borderWidth: 2,
                                fill: false,
                                label: "Orders"
                            },

                        ]
                    };
                    var areaOptions = {
                        responsive: true,
                        maintainAspectRatio: true,
                        plugins: {
                            filler: {
                                propagate: false
                            }
                        },
                        scales: {
                            xAxes: [{
                                display: true,
                                ticks: {
                                    display: true,
                                    padding: 10,
                                    fontColor: "#6C7383"
                                },
                                gridLines: {
                                    display: false,
                                    drawBorder: false,
                                    color: 'transparent',
                                    zeroLineColor: '#eeeeee'
                                }
                            }],
                            yAxes: [{
                                display: true,
                                ticks: {
                                    display: true,
                                    autoSkip: false,
                                    maxRotation: 0,
                                    stepSize: 200,
                                    min: 200,
                                    max: 1200,
                                    padding: 18,
                                    fontColor: "#6C7383"
                                },
                                gridLines: {
                                    display: true,
                                    color: "#f2f2f2",
                                    drawBorder: false
                                }
                            }]
                        },
                        legend: {
                            display: false
                        },
                        tooltips: {
                            enabled: true
                        },
                        elements: {
                            line: {
                                tension: .35
                            },
                            point: {
                                radius: 0
                            }
                        }
                    }
                    var orderChartCanvas = $("#order-chart2").get(0).getContext("2d");
                    var orderChart = new Chart(orderChartCanvas, {
                        type: 'line',
                        data: areaData,
                        options: areaOptions
                    });
                }
            });
        })(jQuery);
    </script> --}}
@endsection
