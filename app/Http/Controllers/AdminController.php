<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index(){
        return view('login-admin');
    }
    public function login(Request $request){
        $validation = $request->validate([
            'nama' => 'required|string|max:255',
            'password' => 'required|string|min:8'
        ]);


        
        if(!$validation){
            return redirect()->back()->with('gagal', 'Pastikan username dan password anda benar');
        }
        if(Auth::guard('web')->attempt(['nama' => $request->nama, 'password' => $request->password])){
            return redirect()->route('index-admin');
            
        }else{
            return redirect()->back()->with('gagal', 'Pastikan username dan password anda benar');
        }
    }

    public function show(){
        $data = Auth::guard('web')->user();
        $admin = $data->nama;
        return view('index-admin', compact('admin'));
    }

    public function logout(){
        Auth::guard('web')->logout();
        return redirect()->route('login-admin');
    }

    public function wisata(){
        $data = Auth::guard('web')->user();
        $admin = $data->nama;
        return view('wisata', compact('admin'));
    }

    public function kepengurusan(){
        $data = Auth::guard('web')->user();
        $admin = $data->nama;
        return view('kepengurusan-admin', compact('admin'));
    }

    public function proker(){
        $data = Auth::guard('web')->user();
        $admin = $data->nama;
        return view('admin-proker', compact('admin'));
    }

    public function produk(){
        $data = Auth::guard('web')->user();
        $admin = $data->nama;
        return view('admin-produk', compact('admin'));
    }

    public function sejarah(){
        $data = Auth::guard('web')->user();
        $admin = $data->nama;
        return view('sejarah-admin', compact('admin'));
    }
}
