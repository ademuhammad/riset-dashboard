<?php

namespace App\Exports;

use App\Models\Sensor;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class SensorExport implements FromCollection,WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Sensor::all();
    }

    public function headings(): array
    {
        return [
            'ID',
            'Suhu(C)',
            'Kelembaban',
            'PM2.5',
            'PM10',
            'Carbon Oksida',
            'Carbon Dioksida',
            'Waktu Masuk',
            'Waktu Update',
        ];
    }
}
