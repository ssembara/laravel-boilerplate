<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Session\Session;

class AuthController extends Controller
{
    public function showFormLogin()
    {
        return view('login');
    }

    public function login(Request $request)
    {

        $credentials = Student::where('nim', $request->nim)->where('pin', $request->pin)->where('status', 'AKTIF')->first();
        $request->session()->put('nim', $credentials['nim']);
        $request->session()->put('name', $credentials['name']);
        if ($credentials) {
            return redirect()->route('home');
        }

        // dd($credentials['nim']);

        // $request->session()->put('nim', $credentials['nim']);
        // dd($credentials['nama']);
    }

    public function logout(Request $request)
    {
        $request->session()->forget('nim');
        echo "Data telah dihapus dari session.";
    }
}
