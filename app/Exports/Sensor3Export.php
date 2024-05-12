<?php

namespace App\Exports;

use App\Models\Sensortiga;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class Sensor3Export implements FromCollection,WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Sensortiga::all();
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
