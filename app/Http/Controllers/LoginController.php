<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
    public function login(Request $request)
    {
        request()->validate([
            'username' => 'required',
            'password' => 'required',
        ], [
            'username.required' => 'Username Wajib Diisi',
            'password' => 'Password Wajib diisi',
        ]);
        $cekAkun = [
            'username' => $request->username,
            'password' => $request->password,
        ];
        if (Auth::attempt($cekAkun)) {
            return redirect()->route('admin.dashboard')->with('success','Berhasil Login');
        } else {
            return redirect('')->withErrors('Username atau Password Tidak Sesuai !')->withInput();
        }
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('login')->with('success', 'Anda Berhasi keluar');
    }
}
