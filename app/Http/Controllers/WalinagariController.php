<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Walinagari;

class WalinagariController extends Controller
{
    public function updateWalinagari(Request $request){
        $validation = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'nama' => 'required|string|max:255',
            'nip' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'tanggallahir' => 'required|date',
            'riwayatpendidikan' => 'required|string',
        ]);

        if(!$validation){
            return redirect()->back()->with('gagal', 'Pastikan semua data terisi dengan benar');
        }

        $image = $request->file('image');
        $filename = date('y-m-d').$image->getClientOriginalName();
        $path = 'image-walinagari/'.$filename;
        Storage::disk('public')->put($path, file_get_contents($image));

        $update = Walinagari::find(2);
        $update->image = $path;
        $update->nama = $request->nama;
        $update->nip = $request->nip;
        $update->alamat = $request->alamat;
        $update->tanggallahir = $request->tanggallahir;
        $update->riwayatpendidikan = $request->riwayatpendidikan;
        $u = $update->save();
        if(!$u){
            return redirect()->back()->with('gagal', 'Data gagal diupdate');
        }

        return redirect()->back()->with('sukses', 'Data berhasil diupdate');



    }
}
