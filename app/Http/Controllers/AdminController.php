<?php

namespace App\Http\Controllers;


use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;


class AdminController extends Controller
{
    public function adminlogin()
    {
        if (Auth::guard('admin')->check()) {
            return redirect()->route('view');
        }
        return view('admin.login');
    }
    public function adminDashboard()
    {
        return view('admin.adminDashboard');
    }
    public function verify(Request $request)
    {
        // Validate the incoming request
        $data =   $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $check = $request->all();
        $data = [
            'email' => $check['email'],
            'password' => $check['password'],
        ];
        if (Auth::guard('admin')->attempt($data)) {
            return redirect()->route('view');
        } else {
            return  redirect()->route('adminlogin')->with('error', 'data is not matched please try again');
        }
    }
    public function adminlogout()
    {
        Auth::guard('admin')->logout(); // Perform logout
        return redirect()->route('adminlogin')->with('message', 'Logout successfully');
    }
}
