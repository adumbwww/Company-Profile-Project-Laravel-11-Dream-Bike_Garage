<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use illuminate\support\facades\Hash;
use Illuminate\support\Facades\Validator;
use Psy\CodeCleaner\FunctionContextPass;
use RealRashid\SweetAlert\Facades\Alert;

class LoginController extends Controller
{
    public function index() {
        return view('login');
    }

    public function actionLogin(Request $request) {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->to('dashboard');
        }

        Alert::error('Gagal', 'Mohon periksa kembali email dan password anda!');
        return back();
    } 

    public function register() {
        return view('register');
    }

    public function actionRegister(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);

        User::create($request->all());
        Alert::success('Success', 'Registrasi Berhasil');
        return redirect()->to('login')->with('success', 'Register Berhasil');
    }
}

