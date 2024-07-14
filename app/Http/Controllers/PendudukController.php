<?php

namespace App\Http\Controllers;

use App\Models\Penduduk;
use Illuminate\Http\Request;

class PendudukController extends Controller
{
    public function balita(){
        $balita = Penduduk::where('id_jenisdata', 3)->get();
        return view('report-detail-balita', compact('balita'));
    }

    public function printBalita(){
        $balita = Penduduk::where('id_jenisdata', 3)->get();
        return view('print-data-balita', compact('balita'));
    }

    public function lansia(){
        $lansia = Penduduk::where('id_jenisdata', 2)->get();
        return view('report-detail-lansia', compact('lansia'));
    }
    public function printLansia(){
        $lansia = Penduduk::where('id_jenisdata', 2)->get();
        return view('print-data-lansia', compact('lansia'));
    }

    public function stunting(){
        $stunting = Penduduk::where('id_jenisdata', 1)->get();
        return view('report-detail-stunting', compact('stunting'));
    }

    public function printStunting(){
        $stunting = Penduduk::where('id_jenisdata', 1)->get();
        return view('print-data-stunting', compact('stunting'));
    }

    //Insert

    public function storeStunting(Request $request){
        $validation = $request->validate([
            'nama' => 'required|string|max:255',
            'nik' => 'required|digits:16',
            'umur' => 'required|string',
            'jenis_kelamin' => 'required|string',
            'nama_ibu' => 'required|string|max:255',
            'nama_ayah' => 'required|string|max:255',
            'alamat' => 'required|string',
        ]);

        if(!$validation){
            return redirect()->back()->with('gagal', 'Periksa kembali inputan anda');
        }

        $store = new Penduduk();
        $store->id_jenisdata = 1;
        $store->nama = $request->nama;
        $store->nik = $request->nik;
        $store->umur = $request->umur;
        $store->jenis_kelamin = $request->jenis_kelamin;
        $store->nama_ibu = $request->nama_ibu;
        $store->nama_ayah = $request->nama_ayah;
        $store->alamat = $request->alamat;

        $s = $store->save();
        if(!$s){
            return redirect()->back()->with('gagal', 'Gagal menambahkan data, silahkan ulangi kembali');
        }

        return redirect()->back()->with('sukses', 'Data berhasil ditambahkan');
    }

    public function storeBalita(Request $request){
        $validation = $request->validate([
            'nama' => 'required|string|max:255',
            'nik' => 'required|digits:16',
            'umur' => 'required|string',
            'jenis_kelamin' => 'required|string',
            'nama_ibu' => 'required|string|max:255',
            'nama_ayah' => 'required|string|max:255',
            'alamat' => 'required|string',
        ]);

        if(!$validation){
            return redirect()->back()->with('gagal', 'Periksa kembali inputan anda');
        }

        $store = new Penduduk();
        $store->id_jenisdata = 3;
        $store->nama = $request->nama;
        $store->nik = $request->nik;
        $store->umur = $request->umur;
        $store->jenis_kelamin = $request->jenis_kelamin;
        $store->nama_ibu = $request->nama_ibu;
        $store->nama_ayah = $request->nama_ayah;
        $store->alamat = $request->alamat;

        $s = $store->save();
        if(!$s){
            return redirect()->back()->with('gagal', 'Gagal menambahkan data, silahkan ulangi kembali');
        }

        return redirect()->back()->with('sukses', 'Data berhasil ditambahkan');
    }

    public function storeLansia(Request $request){
        $validation = $request->validate([
            'nama' => 'required|string|max:255',
            'nik' => 'required|digits:16',
            'umur' => 'required|string',
            'jenis_kelamin' => 'required|string',
            'riwayatpenyakit' => 'required|string',
            'alamat' => 'required|string',
        ]);

        if(!$validation){
            return redirect()->back()->with('gagal', 'Periksa kembali inputan anda');
        }

        $store = new Penduduk();
        $store->id_jenisdata = 2;
        $store->nama = $request->nama;
        $store->nik = $request->nik;
        $store->umur = $request->umur;
        $store->jenis_kelamin = $request->jenis_kelamin;
        $store->riwayatpenyakit = $request->riwayatpenyakit;
        $store->alamat = $request->alamat;

        $s = $store->save();
        if(!$s){
            return redirect()->back()->with('gagal', 'Gagal menambahkan data, silahkan ulangi kembali');
        }

        return redirect()->back()->with('sukses', 'Data berhasil ditambahkan');
    }
}
