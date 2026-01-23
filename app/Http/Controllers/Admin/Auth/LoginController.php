<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.auth.login');
    }

    public function login(Request $request)
    {
        \Log::debug("LoginController::login()");
        $params = $request->all();
        \Log::debug("LoginController::login() params: " . print_r($params, true));
        //  ユーザ検索
        $admin = Admin::where(['email' => $params['email'],])->first();
        if(!isset($admin)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
        if (!Hash::check($params['password'], $admin->password)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        //  認証
        Auth::guard('admin')->login($admin);
        
        return redirect('/');
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/admin/login');
    }
}
