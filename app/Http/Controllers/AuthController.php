<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request) {
        $email = $request->input('email');
        $password = $request->input('password');

        $user = User::where('email', $email)->first();

        if (!$user) {
            $request->session()->flash('error', 'Akun tidak ditemukan!');
            return redirect('login');
        }

        if (!password_verify($password, $user->password)) {
            $request->session()->flash('error', 'Email dan password tidak sesuai!');
            return redirect('login');
        }

        $request->session()->put('id', $user->id);

        return redirect('/admin');
    }

    public function logout(Request $request) {
        $request->session()->flush();

        return redirect('/');
    }
}
