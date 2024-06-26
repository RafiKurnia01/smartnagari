<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tour;
use Illuminate\Support\Facades\Storage;

class TourController extends Controller
{
    public function index(){
        $data = Tour::all();
        return view('dashboard-wisata', compact('data'));
    }

    public function readmore($id){
        $data = Tour::find($id);
        return view('wisata-single', compact('data'));
    }

    public function store(Request $request){
        $validation = $request->validate([
            'tittle' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'image' => 'required|mimes:jpg,jpeg,png|max:2048'
        ]);

        if(!$validation){
            return redirect()->back()->with('gagal', 'Pastikan data yang anda masukkan benar');
        }

        $image = $request->file('image');
        $filename = date('y-m-d').$image->getClientOriginalName();
        $path = 'image-wisata/'.$filename;
        Storage::disk('public')->put($path, file_get_contents($image));

        $store = new Tour();
        $store->tittle = $request->tittle;
        $store->deskripsi = $request->deskripsi;
        $store->image = $path;
        $s = $store->save();

        if(!$s){
            return redirect()->back()->with('gagal', 'Data gagal disimpan');
        }

        return redirect()->back()->with('sukses', 'Data berhasil disimpan');
    }
}
