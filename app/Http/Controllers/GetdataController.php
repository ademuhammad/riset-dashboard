<?php

namespace App\Http\Controllers;

use App\Models\Sensor;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Event;

class GetdataController extends Controller
{


    public function store(Request $request)
    {
        try {
            $last_esp = Sensor::latest()->first();

            $now = Carbon::now();

            if (!$last_esp || $now->diffInSeconds(Carbon::parse($last_esp->created_at)) >= 10) {
                $esp = Sensor::create([
                    'value_suhu' => $request->value_suhu,
                    'value_kelembaban' => $request->value_kelembaban,
                    'value_pm25' => $request->value_pm25,
                    'value_pm10' => $request->value_pm10,
                    'value_co' => $request->value_co,
                    'value_co2' => $request->value_co2,
                ]);
                Event::dispatch(new NewEspEvent($esp));
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
