@extends('template')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">

                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">

                        <div class="card-body">
                            <h4 class="card-title">Tabel Kualitas Udara</h4>
                            <!-- Tombol download Excel -->
                            <a href="{{ url('/export-excel2') }}" class="btn btn-success">Download Excel</a>

                            <!-- Tombol download CSV -->
                            <a href="{{ url('/export-csv2') }}" class="btn btn-primary">Download CSV</a>

                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Jam/Hari/Tanggal</th>
                                            <th>Suhu(C)</th>
                                            <th>Kelembaban</th>
                                            <th>PM10</th>
                                            <th>PM2.5</th>
                                            <th>Carbon Oksida</th>
                                            <th>Carbon Dioksida</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $item)
                                            <tr>
                                                <td>{{ $item->created_at }}</td>
                                                <td>{{ $item->value_suhu }}</td>
                                                <td>{{ $item->value_kelembaban }}</td>
                                                <td>{{ $item->value_pm10 }}</td>
                                                <td>{{ $item->value_pm25 }}</td>
                                                <td>{{ $item->value_co }}</td>
                                                <td>{{ $item->value_co2 }}</td>

                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>

                            </div>

                        </div>
                    </div>
                </div>
                {{ $data->links() }}

            </div>
        </div>
        <!-- content-wrapper ends -->

    </div>
@endsection
