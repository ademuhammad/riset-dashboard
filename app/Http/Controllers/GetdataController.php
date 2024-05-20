<?php

namespace App\Http\Controllers;

use App\Models\Sensor;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Event;

class GetdataController extends Controller
{



    // public function store(Request $request)
    // {
    //     try {
    //         // Get the current time
    //         $now = Carbon::now();

    //         // Define the start and end time limits
    //         $start_time = Carbon::createFromTime(7, 30);
    //         $end_time = Carbon::createFromTime(16, 0);

    //         // Check if the current time is within the allowed range
    //         if ($now->between($start_time, $end_time)) {
    //             $last_esp = Sensor::latest()->first();

    //             if (!$last_esp || $now->diffInSeconds(Carbon::parse($last_esp->created_at)) >= 10) {
    //                 $esp = Sensor::create([
    //                     'value_suhu' => $request->value_suhu,
    //                     'value_kelembaban' => $request->value_kelembaban,
    //                     'value_pm25' => $request->value_pm25,
    //                     'value_pm10' => $request->value_pm10,
    //                     'value_co' => $request->value_co,
    //                     'value_co2' => $request->value_co2,
    //                 ]);
    //                 return response()->json($esp);
    //             }

    //             return response()->json('success');
    //         } else {
    //             // Return a response indicating the request was made outside the allowed time range
    //             return response()->json([
    //                 'code' => 400,
    //                 'message' => 'Data can only be created between 07:30 and 16:00',
    //             ]);
    //         }
    //     } catch (\Exception $e) {
    //         return response()->json([
    //             'code' => 400,
    //             'message' => $e->getMessage(),
    //         ]);
    //     }
    // }


    //     public function store(Request $request)
    //     {
    //         try {
    //             $last_esp = Sensor::latest()->first();

    //             $now = Carbon::now();

    //             if (!$last_esp || $now->diffInSeconds(Carbon::parse($last_esp->created_at)) >= 10) {
    //                 $esp = Sensor::create([
    //                     'value_suhu' => $request->value_suhu,
    //                     'value_kelembaban' => $request->value_kelembaban,
    //                     'value_pm25' => $request->value_pm25,
    //                     'value_pm10' => $request->value_pm10,
    //                     'value_co' => $request->value_co,
    //                     'value_co2' => $request->value_co2,
    //                 ]);
    //                 return response()->json($esp);
    //             }

    //             return response()->json('success');
    //         } catch (\Exception $e) {
    //             return response()->json([
    //                 'code' => 400,
    //                 'message' => $e->getMessage(),
    //             ]);
    //         }
    //     }
    // }

    public function store(Request $request)
    {
        try {
            $last_esp = Sensor::latest()->first();
            $now = Carbon::now();

            if (!$last_esp || $now->diffInSeconds(Carbon::parse($last_esp->created_at)) >= 10) {
                $esp = Sensor::create([
                    'value_suhu' => rand(15, 35), // Contoh nilai acak untuk suhu (dalam range 15-35)
                    'value_kelembaban' => rand(30, 90), // Contoh nilai acak untuk kelembaban (dalam range 30-90)
                    'value_pm25' => rand(0, 500), // Contoh nilai acak untuk PM2.5 (dalam range 0-500)
                    'value_pm10' => rand(0, 500), // Contoh nilai acak untuk PM10 (dalam range 0-500)
                    'value_co' => rand(0, 10), // Contoh nilai acak untuk CO (dalam range 0-10)
                    'value_co2' => rand(400, 5000), // Contoh nilai acak untuk CO2 (dalam range 400-5000)
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
