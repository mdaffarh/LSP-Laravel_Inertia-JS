<?php

namespace App\Http\Controllers;

use App\Models\Administrator;
use App\Models\Guru;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Inertia\Inertia;

class IndexController extends Controller
{
    public function index()
    {
        if(session('user')){
            return back();
        }
        return Inertia::render('Login');
    }

    public function loginAdmin()
    {
        $admin = Administrator::where('id_admin',request()->idAdmin)->where('password',request()->password)->first();

        if (!$admin) return back()->with('error','Id Admin Atau Password Salah');

        $admin->role = 'admin';
        session(['user' => $admin]);

        return redirect('/home');
    }

    public function loginSiswa()
    {
        $siswa = Siswa::where('nis',request()->nis)->where('password',request()->password)->first();

        if (!$siswa) return back()->with('error','NIS Atau Password Salah');

        $siswa->role = 'siswa';
        session(['user' => $siswa]);

        return redirect('/home');
    }

    public function loginGuru()
    {
        $guru = Guru::where('nip',request()->nip)->where('password',request()->password)->first();

        if (!$guru) return back()->with('error','NIP Atau Password Salah');

        $guru->role = 'guru';
        session(['user' => $guru]);

        return redirect('/home');
    }

    public function home()
    {
        return Inertia::render('Home');
    }

    public function logout()
    {
        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/');
    }
}
