<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            return redirect()->back();
        }
        return view('auth.Login');
    }

    public function loginProcess(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            $userid = Auth::user()->id;
            $user = User::whereId($userid)->role('super-admin')->first();

            if ($user) {
                return redirect('/dashboard')->with('status', 'Berhasil Login');
            } else {
                return redirect(route('pendaftaran_siswa.index'));
            }
        }

        return back()->withErrors([
            'email' => 'Username atau password tidak ditemukan',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect(route('login'))->with('status', 'Logout berhasil');
    }

    public function registerAccount()
    {
        return view('auth.Register');
    }

    public function registerProcess(UserRequest $request)
    {
        try {
            $user = $request->only([
                'nama',
                'email',
                'password'
            ]);
            $user['password'] = Hash::make($request->password);
            $result = User::create($user);
            $result->assignRole('user');
            return back()->with('status', 'Akun berhasil dibuat');
        } catch (\Throwable $th) {
            return redirect()->back()->with('status', $th->getMessage());
        }
    }
}
