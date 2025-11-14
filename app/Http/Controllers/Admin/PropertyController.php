<?php

namespace App\Http\Controllers\Admin;

use App\Models\Time;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PropertyController extends Controller
{
    //
    public function allTimes()
    {
        $times = Time::latest()->get();
        return view('admin.backend.time.all_time', compact('times'));

    }
}
