<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function register_submit(Request $request)
    {
        $validation = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:4|max:10',
        ]);
        if($validation)
        {
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
            return view('auth.login');
        }
        else
        {
            return view('auth.register');
        }
    }

    public function login_submit(Request $request)
    {
        $validation = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $x = ['email' => $request->email,'password' => $request->password];
        if(Auth::attempt($x))
        {
            if(Auth::user()->role === 'manager')
            {
                return redirect('/admin/dashboard');
            }
            elseif(Auth::user()->role === 'employee')
            {
                return redirect('/dashboard');
            }
            else
            {
                return redirect()->back();
            }
        }
        else
        {
            return view('auth.login');
        }
    }

    public function admin_dashboard()
    {
        return view('manager.dashboard');
    }

    public function dashboard()
    {
        return view('employee.dashboard');
    }

    public function logout(){
        Auth::guard('web')->logout();
        return redirect('/');
    }
}
