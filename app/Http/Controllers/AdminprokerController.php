<?php

namespace App\Http\Controllers;

use App\Models\Proker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminprokerController extends Controller
{
    public function store(Request $request){
        $validation = $request->validate([
            'namaproker' => 'required|string|max:255',
            'id_pegawai' => 'required|integer',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'keterangan' => 'required|string|max:255',
        ]);

        if(!$validation){
            return redirect()->back()->with('gagal', 'Pastikan data yang anda masukkan benar');
        }

        $image = $request->file('image');
        $filename = date('y-m-d').$image->getClientOriginalName();
        $path = 'image-proker/'.$filename;
        Storage::disk('public')->put($path, file_get_contents($image));

        $store = new Proker();
        $store->namaproker = $request->namaproker;
        $store->id_pegawai = $request->id_pegawai;
        $store->image = $path;
        $store->keterangan = $request->keterangan;
        $s = $store->save();

        if(!$s){
            return redirect()->back()->with('gagal', 'Data gagal disimpan');
        }

        return redirect()->back()->with('sukses', 'Data berhasil disimpan');

    }
}
