@extends('template')
@section('content')
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
                                <div>
                                    <h2 class="mb-0 font-weight-normal"><i
                                            class="icon-sun mr-2"></i>{{ $data->first()->value_suhu }}<sup>C</sup>
                                    </h2>
                                </div>
                                <div class="ml-2">
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
                        <div class="card card-tale">
                            <div class="card-body">
                                <p class="mb-4">Suhu (Temprature)</p>
                                <p class="fs-30 mb-2" id="suhu">{{ $data->first()->value_suhu }} C</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4 stretch-card transparent">
                        <div class="card card-dark-blue">
                            <div class="card-body">
                                <p class="mb-4">Kelembaban (Humidity)</p>
                                <p class="fs-30 mb-2" id="kelembaban">{{ $data->first()->value_kelembaban }}%</p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-4 stretch-card transparent">
                        <div class="card card-taler">
                            <div class="card-body">
                                <p class="mb-4">PM10 </p>
                                <p class="fs-30 mb-2" id="pm10">{{ $data->first()->value_pm10 }} mg/m3</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4 stretch-card transparent">
                        <div class="card card-success">
                            <div class="card-body">
                                <p class="mb-4">PM2.5</p>
                                <p class="fs-30 mb-2" id="pm25">{{ $data->first()->value_pm25 }} mg/m3</p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                        <div class="card card-light-blue">
                            <div class="card-body">
                                <p class="mb-4">Carbon Oksida(CO)</p>
                                <p class="fs-30 mb-2" id="co">{{ $data->first()->value_co }}</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 stretch-card transparent">
                        <div class="card card-light-danger">
                            <div class="card-body">
                                <p class="mb-4">Carbon DiOksida(CO2)</p>
                                <p class="fs-30 mb-2" id="co2">{{ $data->first()->value_co2 }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


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
        $('#co').text(data.value_co);
        $('#co2').text(data.value_co2);
    }
</script>

@endsection
