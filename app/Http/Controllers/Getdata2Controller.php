<?php

namespace App\Http\Controllers;

use App\Models\Sensordua;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Event;

class Getdata2Controller extends Controller
{


    public function store(Request $request)
    {
        try {
            // Get the current time
            $now = Carbon::now();

            // Define the start and end time limits
            $start_time = Carbon::createFromTime(7, 30);
            $end_time = Carbon::createFromTime(16, 0);

            // Check if the current time is within the allowed range
            if ($now->between($start_time, $end_time)) {
                $last_esp = Sensordua::latest()->first();

                if (!$last_esp || $now->diffInSeconds(Carbon::parse($last_esp->created_at)) >= 10) {
                    $esp = Sensordua::create([
                        'value_suhu' => $request->value_suhu,
                        'value_kelembaban' => $request->value_kelembaban,
                        'value_pm25' => $request->value_pm25,
                        'value_pm10' => $request->value_pm10,
                        'value_co' => $request->value_co,
                        'value_co2' => $request->value_co2,
                    ]);
                    return response()->json($esp);
                }

                return response()->json('success');
            } else {
                // Return a response indicating the request was made outside the allowed time range
                return response()->json([
                    'code' => 400,
                    'message' => 'Data can only be created between 07:30 and 16:00',
                ]);
            }
        } catch (\Exception $e) {
            return response()->json([
                'code' => 400,
                'message' => $e->getMessage(),
            ]);
        }
    }
}
