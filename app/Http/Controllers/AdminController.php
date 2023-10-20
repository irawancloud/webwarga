<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.index');
    }

    public function authenticate(Request $request){
        $akun = $request->validate([
            'email'     => ['required', 'email:dns'],
            'password'  => ['required'],
        ]);

        if(Auth::attempt($akun)){
            $request->session()->regenerate();
            return redirect()->intended('/home');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records',
        ])->onlyInput('email');
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }

    public function home(){
        $no = 1;
        $data = DB::table('blogs')->orderBy('id', 'desc')->get();
        return view('admin.home', [
            'data'  => $data,
            'no'    => $no,
        ]);
    }
}
