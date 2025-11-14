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
    public function addTimes()
    {
        return view('admin.backend.time.add_time');
    }
    public function storeTimes(Request $request)
    {
        Time::create([
            'time_name' => $request->time_name,
            'time_hour' => $request->time_hour,
        ]);
        $notification = [
            'message' => 'Time Added Successfully',
            'alert-type' => 'success'
        ];
        return redirect()->route('all.times')->with($notification);
    }
    public function editTimes(Request $request)
    {
        $time = Time::findOrFail($request->id);
        return view('admin.backend.time.edit_time', compact('time'));
    }
    public function updateTimes(Request $request)
    {
        $time_id = $request->id;
        Time::findOrFail($time_id)->update([
            'time_name' => $request->time_name,
            'time_hour' => $request->time_hour,
        ]);
        $notification = [
            'message' => 'Time Updated Successfully',
            'alert-type' => 'success'
        ];
        return redirect()->route('all.times')->with($notification);
    }
}
