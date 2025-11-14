<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
    public function adminProfileUpdate(Request $request)
    {
        $id = Auth::user()->id;
        $data = User::findorFail($id);

        $data->name = $request->name;
        $data->email = $request->email;
        $data->first_name = $request->first_name;
        $data->last_name = $request->last_name;
        $data->phone = $request->phone;
        $data->address = $request->address;

        $oldPhotoPath = $data->photo;
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('upload/profile_images'), $fileName);
            $data->photo = $fileName;

            if ($oldPhotoPath && $oldPhotoPath !== $fileName) {
                $this->deleteOldImage($oldPhotoPath);
            }
        }
        $data->save();
        $notification = [
            'message' => 'Admin profile Updated Successfully',
            'alert-type' => 'success',
        ];
        return redirect()->back()->with($notification);
    }
    private function deleteOldImage($oldPhotoPath)
    {
        $fullPath = public_path('upload/profile_images/' . $oldPhotoPath);
        if (file_exists($fullPath)) {
            unlink($fullPath);
        }
    }
    public function adminChangePassword()
    {
        return view('admin.change_password');
    }
    public function adminPasswordUpdate(Request $request)
    {
        $user = Auth::user();
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed|min:8',
        ]);

        if (!Hash::check($request->old_password, $user->password)) {
            $notification = [
                'message' => 'Old Password does not match!',
                'alert-type' => 'error',
            ];
            return back()->with($notification);
        }

        User::whereId($user->id)->update([
            'password' => Hash::make($request->new_password),
        ]);

        Auth::logout();

        $notification = [
            'message' => 'Password changed successfully. Please log in with your new password.',
            'alert-type' => 'success',
        ];

        return redirect()->route('login')->with($notification);
    }
}
