<?php

namespace App\Http\Controllers;

use App\Models\Suratpenghasilan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Pegawai;
use App\Models\Masukan;
use App\Models\Suratnikah;
use App\Models\Surattanah;
use App\Models\Surattidakmampu;
use App\Models\Suratmeninggal;
use App\Models\Suratdomisili;

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
        $pegawai = Pegawai::all();
        return view('admin-proker', compact('admin', 'pegawai'));
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

    public function walinagari(){
        $data = Auth::guard('web')->user();
        $admin = $data->nama;
        return view('walinagari', compact('admin'));
    }

    public function pengaduan(){
        $data = Auth::guard('web')->user();
        $admin = $data->nama;
        $datapengaduan = Masukan::all();
        return view('data-pengaduan', compact('admin', 'datapengaduan'));
    }

    public function lansia(){
        $data = Auth::guard('web')->user();
        $admin = $data->nama;
        return view('lansia', compact('admin'));
    }

    public function balita(){
        $data = Auth::guard('web')->user();
        $admin = $data->nama;
        return view('balita', compact('admin'));
    }

    public function stunting(){
        $data = Auth::guard('web')->user();
        $admin = $data->nama;
        return view('stunting', compact('admin'));
    }

    public function dataProduk(){
        $data = Auth::guard('web')->user();
        $admin = $data->nama;
        return view('admin-data-produk', compact('admin'));
    }

    public function surat(){
        $data = Auth::guard('web')->user();
        $admin = $data->nama;
        $sktm = Surattidakmampu::all();
        $tanahs = Surattanah::all();
        $penghasilans = Suratpenghasilan::all();
        $nikahs = Suratnikah::all();
        $meninggals = Suratmeninggal::all();
        $domisilis = Suratdomisili::all();
        return view('admin-surat', compact('admin', 'sktm', 'tanahs', 'penghasilans', 'nikahs', 'meninggals', 'domisilis'));
    }

    public function pegawai(){
        $data = auth()->guard('web')->user();
        $admin = $data->nama;
        $pegawais = Pegawai::all();
        return view('admin-pegawai', compact('admin', 'pegawais'));
    }
}
