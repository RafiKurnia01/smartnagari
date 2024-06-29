<?php

namespace App\Http\Controllers;

use App\Models\Surattidakmampu;
use Illuminate\Http\Request;

class WebsktmController extends Controller
{
    public function index(){
        $user = auth()->guard('client')->user();
        $data = $user->id;
        return view('tidak_mampu', compact('data'));
    }

    public function store(Request $request){
        $validation = $request->validate([
            'id_client' => 'required',
            'namalengkap' => 'required|string|max:255',
            'nik' => 'required|digits:16',
            'tempatlahir' => 'required|string|max:255',
            'tanggallahir' => 'required',
            'jenis_kelamin' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'pekerjaan' => 'required|string|max:255',
            'penghasilan' => 'required|string|max:255',
            'jumlah_tanggungan' => 'required',
            'keperluan' => 'required|string|max:255'
        ]);

        if(!$validation){
            return redirect()->back()->with('gagal', 'Pastikan inputan anda sesuai');
        }

        if(Surattidakmampu::where('id_client', $request->id_client)->exists()){
            return redirect()->back()->with('gagal', 'Anda sudah mengajukan surat ini');
        }

        $store = Surattidakmampu::create([
            'id_client' => $request->id_client,
            'id_statussurat' => 1,
            'namalengkap' => $request->namalengkap,
            'nik' => $request->nik,
            'tempatlahir' => $request->tempatlahir,
            'tanggallahir' => $request->tanggallahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,
            'pekerjaan' => $request->pekerjaan,
            'penghasilan' => $request->penghasilan,
            'jumlah_tanggungan' => $request->jumlah_tanggungan,
            'keperluan' => $request->keperluan
        ]);

        if(!$store){
            return redirect()->back()->with('gagal', 'Gagal mengajukan surat, silahkan ulangi kembali');
        }

        // return view('services')->with('sukses', 'Surat berhasil diajukan');
        return redirect()->route('services')->with('sukses', 'Surat berhasil diajukan');
    }
}
