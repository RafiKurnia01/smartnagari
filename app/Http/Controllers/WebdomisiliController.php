<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Suratdomisili;
use App\Models\Suratmeninggal;

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

    public function detail($id){
        $user = auth()->guard('web')->user();
        $admin = $user->nama;
        $data = Suratdomisili::find($id);
        return view('detail-domisili', compact('data', 'admin'));
    }

    public function updateStatus(Request $request){
        $validation = $request->validate([
            'id' => 'required',
            'status' => 'required'
        ]);

        if(!$validation){
            return redirect()->back()->with('gagal', 'Pastikan semua data terisi dengan benar');
        }

        $update = Suratdomisili::where('id', $request->id)->update([
            'id_statussurat' => $request->status
        ]);

        if(!$update){
            return redirect()->back()->with('gagal', 'Gagal mengupdate status surat');
        }

        return redirect()->route('surat')->with('sukses', 'Status surat berhasil diupdate');
    }

    public function delete(Request $request){
        $validation = $request->validate([
            'id' => 'required'
        ]);

        if(!$validation){
            return redirect()->back()->with('gagal', 'Pastikan semua data terisi dengan benar');
        }

        $delete = Suratdomisili::where('id', $request->id)->delete();

        if(!$delete){
            return redirect()->back()->with('gagal', 'Gagal menghapus surat');
        }

        return redirect()->route('surat')->with('sukses', 'Surat berhasil dihapus');
    }
}
