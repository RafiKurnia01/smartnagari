<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use App\Models\User;
use App\Models\Walinagari;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $data = Walinagari::all();
        return view('index', compact('data'));
        
    }

    public function dataWalinagari(){
        $d = Walinagari::where('id' , 1)->get();
        return view('walikota', compact('d'));
    }

    public function strukturKota(){
        $d = Walinagari::where('id' , 1)->get();
        $kepalakeuangan = Pegawai::where('jabatan_id' , 1)->get();
        $kepalaumum = Pegawai::where('jabatan_id' , 2)->get();
        $kepalaperencanaan = Pegawai::where('jabatan_id' , 3)->get();
        $sekretaris = Pegawai::where('jabatan_id' , 4)->get();
        $kepalapelayanan = Pegawai::where('jabatan_id' , 5)->get();
        $kepalakesejahteraan = Pegawai::where('jabatan_id' , 6)->get();
        $kepalaseksipemerintahan = Pegawai::where('jabatan_id' , 7)->get();
        $jorong = Pegawai::where('jabatan_id' , 8)->get();

        return view('struktur_kota', compact('d', 'kepalakeuangan', 'kepalaumum', 'kepalaperencanaan', 'sekretaris', 'kepalapelayanan', 'kepalakesejahteraan', 'kepalaseksipemerintahan', 'jorong'));
    }
}
