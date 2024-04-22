<?php

namespace App\Http\Controllers;

use App\Models\Sensor;
use Illuminate\Http\Request;
use App\Exports\SensorExport;
use Maatwebsite\Excel\Facades\Excel;

class SensorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     $data = Sensor::latest()->get();
    //     $timestamps = $data->pluck('created_at')->toArray();
    //     $temperatures = $data->pluck('value_suhu')->toArray();


    //     return view('dashboard', compact('data', 'temperatures', 'timestamps'));

    // }
    public function index()
    {
        // Mendapatkan data dari tabel sensor
        $data = Sensor::latest()->get();

        // Mengelompokkan data suhu ke dalam kategori
        foreach ($data as $item) {
            $suhu = $item->value_suhu;
            if ($suhu >= 0 && $suhu <= 20) {
                $item->kategori_suhu = "Dingin";
            } elseif ($suhu >= 21 && $suhu <= 30) {
                $item->kategori_suhu = "Normal";
            } else {
                $item->kategori_suhu = "Panas";
            }

            $pm25 = $item->value_pm25;
            if ($pm25 >= 0 && $pm25 <= 15.5) {
                $item->kategori_pm25 = "Baik";
            } else if ($pm25 >= 15.5 && $pm25 <= 55.5) {
                $item->kategori_pm25 = "Sedang";
            } else if ($pm25 >=  55.5 && $pm25 <= 150.4 ) {
                $item->kategori_pm25 = "Tidak Sehat";
            } else if ($pm25 >=  150.5 && $pm25 <= 250.4 ) {
                $item->kategori_pm25 = "Sangat Tidak Sehat";

            } else if ($pm25 >=  250.5 ) {
                $item->kategori_pm25 = "Berbahaya";
            }

            $pm10 = $item->value_pm10;
            if ($pm10 >= 0 && $pm10 <= 50) {
                $item->kategori_pm10 = "Baik";
            } else if ($pm10 >= 51 && $pm10 <= 150) {
                $item->kategori_pm10 = "Sedang";
            } else if ($pm10 >=  151 && $pm10 <= 350) {
                $item->kategori_pm10 = "Tidak Sehat";
            } else if ($pm10 >=  351 && $pm10 <= 420 ) {
                $item->kategori_pm10 = "Sangat Tidak Sehat";

            } else if ($pm10 >=  420) {
                $item->kategori_pm10 = "Berbahaya";
            }
            $co2 = $item->value_co2;
            if ($co2 >= 0 && $co2 <= 1000) {
                $item->kategori_co2 = "Baik";
            } else if ($co2 >= 1001 && $co2 <= 2000) {
                $item->kategori_co2 = "Cukup";
            } else if ($co2 >=  2001 && $co2 <= 5000) {
                $item->kategori_co2 = "Buruk";
            } else if ($co2 >=  5001   && $co2 <= 40000 ) {
                $item->kategori_co2 = "Sangat Buruk";

            } else if ($co2 >=  40000) {
                $item->kategori_co2 = "Berbahaya";
            }
            $co = $item->value_co;
            if ($co >= 0 && $co <= 1000) {
                $item->kategori_co = "Baik";
            } else if ($co >= 1001 && $co <= 2000) {
                $item->kategori_co = "Cukup";
            } else if ($co >=  2001 && $co <= 5000) {
                $item->kategori_co = "Buruk";
            } else if ($co >=  5001   && $co <= 40000 ) {
                $item->kategori_co = "Sangat Buruk";

            } else if ($co >=  40000) {
                $item->kategori_co = "Berbahaya";
            }

            $kel = $item->value_kel;
            if ($kel >= 0 && $kel <= 1000) {
                $item->kategori_kel = "Baik";
            } else if ($kel >= 1001 && $kel <= 2000) {
                $item->kategori_kel = "Cukup";
            } else if ($kel >=  2001 && $kel <= 5000) {
                $item->kategori_kel = "Buruk";
            } else if ($kel >=  5001   && $kel <= 40000 ) {
                $item->kategori_kel = "Sangat Buruk";

            } else if ($kel >=  40000) {
                $item->kategori_kel = "Berbahaya";
            }
        }

        // Mengirim data yang telah dikelompokkan ke tampilan
        return view('dashboard', compact('data'));
    }



    public function data()
    {
        $data = Sensor::latest()->paginate(5);
        return view('datatable', ['data' => $data]);
    }

    public function exportExcel()
    {
        return Excel::download(new SensorExport, 'sensors.xlsx');
    }

    public function exportCsv()
    {
        return Excel::download(new SensorExport, 'sensors.csv');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
