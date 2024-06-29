<?php

namespace App\Http\Controllers;

use App\Models\Surattanah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WebtanahController extends Controller
{
    public function index(){
        $user = Auth::guard('client')->user();
        $data = $user->id;
        return view('tanah', compact('data'));
    }

    public function store(Request $request){
        $validation = $request->validate([
            'id_client' => 'required',
            'namalengkap' => 'required|string|max:255',
            'nik' => 'required|digits:16',
            'alamat' => 'required|string|max:255',
            'nomor_sertifikat' => 'required|string|max:255',
            'letak_tanah' => 'required|string|max:255',
            'luas_tanah' => 'required|string|max:255',
            'batas_tanah' => 'required|string|max:255',
            'tujuanpenggunaan' => 'required|string|max:255'
        ]);

        if(!$validation){
            return redirect()->back()->with('gagal', 'Pastikan inputan anda sesuai');
        }

        if(Surattanah::where('id_client', $request->id_client)->exists()){
            return redirect()->back()->with('gagal', 'Anda sudah mengajukan surat ini');
        }

        $store = Surattanah::create([
            'id_client' => $request->id_client,
            'id_statussurat' => 1,
            'namalengkap' => $request->namalengkap,
            'nik' => $request->nik,
            'alamat' => $request->alamat,
            'nomor_sertifikat' => $request->nomor_sertifikat,
            'letak_tanah' => $request->letak_tanah,
            'luas_tanah' => $request->luas_tanah,
            'batas_tanah' => $request->batas_tanah,
            'tujuanpenggunaan' => $request->tujuanpenggunaan
        ]);

        if(!$store){
            return redirect()->back()->with('gagal', 'Gagal mengajukan surat, silahkan ulangi kembali');
        }

        return redirect()->route('services')->with('sukses', 'Surat berhasil diajukan');
    }
}
