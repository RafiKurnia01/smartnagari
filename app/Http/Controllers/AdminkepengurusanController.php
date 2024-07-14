<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class AdminkepengurusanController extends Controller
{
    public function store(Request $request){
        $validation = $request->validate([
            'NIP' => 'required|string|max:255',
            'namapegawai' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'tgllahir' => 'required|date',
            'jabatan_id' => 'required|integer',
        ]);

        if(!$validation){
            return redirect()->back()->with('gagal', 'Pastikan data yang anda masukkan benar');
        }

        $store = Pegawai::create([
            'NIP' => $request->NIP,
            'namapegawai' => $request->namapegawai,
            'alamat' => $request->alamat,
            'tgllahir' => $request->tgllahir,
            'jabatan_id' => $request->jabatan_id,
        ]);

        if(!$store){
            return redirect()->back()->with('gagal', 'Data gagal disimpan');
        }

        return redirect()->back()->with('sukses', 'Data berhasil disimpan');
    }

    public function updatePegawai($id){
        $data = auth()->guard('web')->user();
        $admin = $data->nama;
        $pegawai = Pegawai::find($id);
        return view('update-kepengurusan', compact('pegawai', 'admin'));
    }

    public function updatePegawaiStore(Request $request){
        $validation = $request->validate([
            'id' => 'required|integer',
            'NIP' => 'required|string|max:255',
            'namapegawai' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'tgllahir' => 'required|date',
            'jabatan_id' => 'required|integer',
        ]);

        if(!$validation){
            return redirect()->back()->with('gagal', 'Pastikan data yang anda masukkan benar');
        }

        $update = Pegawai::where('id', $request->id)->update([
            'NIP' => $request->NIP,
            'namapegawai' => $request->namapegawai,
            'alamat' => $request->alamat,
            'tgllahir' => $request->tgllahir,
            'jabatan_id' => $request->jabatan_id,
        ]);

        if(!$update){
            return redirect()->back()->with('gagal', 'Data gagal diupdate');
        }

        return redirect()->back()->with('sukses', 'Data berhasil diupdate');
    }

    public function deletePegawai(Request $request){
        $delete = Pegawai::where('id', $request->id)->delete();
        if(!$delete){
            return redirect()->back()->with('gagal', 'Data gagal dihapus');
        }

        return redirect()->back()->with('sukses', 'Data berhasil dihapus');
    }


}
