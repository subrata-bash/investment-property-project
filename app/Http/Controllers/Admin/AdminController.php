<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //
    public function adminDashboard()
    {
        return view('admin.index');
    }
    public function adminLogout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login');
    }

    public function adminProfile()
    {
        $id = Auth::user()->id;
        $profileData = User::findorFail($id);
        return view('admin.admin_profile', compact('profileData'));
    }
}
