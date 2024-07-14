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

    public function detail($id){
        $user = auth()->guard('web')->user();
        $admin = $user->nama;
        $data = Surattidakmampu::find($id);
        return view('detail-sktm', compact('data', 'admin'));
    }

    public function updateStatusSurat(Request $request){
        $validation = $request->validate([
            'id' => 'required',
            'status' => 'required|integer'
        ]);

        if(!$validation){
            return redirect()->back()->with('gagal', 'Pastikan inputan anda sesuai');
        }

        $update = Surattidakmampu::where('id', $request->id)->update([
            'id_statussurat' => $request->status
        ]);

        if(!$update){
            return redirect()->back()->with('gagal', 'Gagal mengubah status surat');
        }

        return redirect()->route('surat')->with('sukses', 'Status surat berhasil diubah');
    }

    public function delete(Request $request){
        $validation = $request->validate([
            'id' => 'required'
        ]);

        if(!$validation){
            return redirect()->back()->with('gagal', 'Pastikan inputan anda sesuai');
        }

        $delete = Surattidakmampu::where('id', $request->id)->delete();

        if(!$delete){
            return redirect()->back()->with('gagal', 'Gagal menghapus surat');
        }

        return redirect()->route('surat')->with('sukses', 'Surat berhasil dihapus');
    }
}
