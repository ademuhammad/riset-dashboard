<?php

namespace App\Http\Controllers;

use App\Models\Sensor;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    //
    public function latest()
    {
        $data = Sensor::latest()->first();
        return response()->json($data);
    }
}
