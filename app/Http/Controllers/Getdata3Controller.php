<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Sensortiga;
use Illuminate\Http\Request;

class Getdata3Controller extends Controller
{
    //
    public function store(Request $request)
    {
        try {
            $last_esp = Sensortiga::latest()->first();

            $now = Carbon::now();

            if (!$last_esp || $now->diffInSeconds(Carbon::parse($last_esp->created_at)) >= 10) {
                $esp = Sensortiga::create([
                    'value_suhu' => $request->value_suhu,
                    'value_kelembaban' => $request->value_kelembaban,
                    'value_pm25' => abs($request->value_pm25),
                    'value_pm10' => abs($request->value_pm10),
                    'value_co' => $request->value_co,
                    'value_co2' => $request->value_co2,
                ]);
                return response()->json($esp);
            }

            return response()->json('success');
        } catch (\Exception $e) {
            return response()->json([
                'code' => 400,
                'message' => $e->getMessage(),
            ]);
        }
    }
}
