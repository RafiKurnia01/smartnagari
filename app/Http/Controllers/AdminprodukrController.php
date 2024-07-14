<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class AdminprodukrController extends Controller
{
    public function store(Request $request){
        $validation = $request->validate([
            'namaumkm' => 'required|string|max:255',
            'namaproduk' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'deskripsi' => 'required|string',
        ]);

        if(!$validation){
            return redirect()->back()->with('gagal', 'Pastikan semua data terisi dengan benar');
        }

        $image = $request->file('image');
        $filename = date('y-m-d').$image->getClientOriginalName();
        $path = 'image-produk/'.$filename;
        Storage::disk('public')->put($path, file_get_contents($image));

        $store = new Product();
        $store->namaumkm = $request->namaumkm;
        $store->namaproduk = $request->namaproduk;
        $store->image = $path;
        $store->deskripsi = $request->deskripsi;
        $s = $store->save();

        if(!$s){
            return redirect()->back()->with('gagal', 'Data gagal disimpan');
        }

        return redirect()->back()->with('sukses', 'Data berhasil disimpan');
    }
}
