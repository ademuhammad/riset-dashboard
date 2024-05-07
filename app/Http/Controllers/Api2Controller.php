<?php

namespace App\Http\Controllers;

use App\Models\Sensordua;
use Illuminate\Http\Request;

class Api2Controller extends Controller
{
    //
    public function latest2()
    {
        $data = Sensordua::latest()->first();
        return response()->json($data);
    }
}
