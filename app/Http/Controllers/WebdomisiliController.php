<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Suratdomisili;

class WebdomisiliController extends Controller
{
    public function index(){
        $surat = Auth::guard('client')->user();
        $data = $surat->id;
        return view('domisili', compact('data'));
    }

    public function store(Request $request){
        $validation = $request->validate([
            'id_client' => 'required',
            'namalengkap' => 'required|string|max:255',
            'nik' => 'required|digits:16',
            'nokk' => 'required|digits:16',
            'alamatsekarang' => 'required|string|max:255',
            'alamatpindah' => 'required|string|max:255',
            'alasanpindah' => 'required|string|max:255',
            'tanggalpindah' => 'required|date',
        ]);

        if(!$validation){
            return redirect()->back()->with('gagal', 'Perhatikan kembali inputan anda');
        }

        if(Suratdomisili::where('id_client', $request->id_client)->exists()){
            return redirect()->back()->with('gagal', 'Anda sudah mengajukan surat ini');
        }

        $store = Suratdomisili::create([
            'id_client' => $request->id_client,
            'id_statussurat' => 1,
            'namalengkap' => $request->namalengkap,
            'nik' => $request->nik,
            'nokk' => $request->nokk,
            'alamatsekarang' => $request->alamatsekarang,
            'alamatpindah' => $request->alamatpindah,
            'alasanpindah' => $request->alasanpindah,
            'tanggalpindah' => $request->tanggalpindah,
        ]);

        if(!$store){
            return redirect()->back()->with('gagal', 'Gagal mengajukan surat');
        }

        // return view('services')->with('sukses', 'Surat berhasil diajukan');
        return redirect()->route('services')->with('sukses', 'Surat berhasil diajukan');
    }
}
