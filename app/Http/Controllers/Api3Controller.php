<?php

namespace App\Http\Controllers;

use App\Models\Sensortiga;
use Illuminate\Http\Request;

class Api3Controller extends Controller
{
    //
    public function latest3()
    {
        $data = Sensortiga::latest()->first();
        return response()->json($data);
    }
}
