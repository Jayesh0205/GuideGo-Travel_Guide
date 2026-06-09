<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DistrictController extends Controller
{
        public function show($district)
    {
        return view('districts.' . $district);
    }

}
