<?php

namespace App\Http\Controllers;

use App\Models\Suratpenghasilan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WebpenghasilanController extends Controller
{
    public function index(){
        $user = Auth::guard('client')->user();
        $data = $user->id;
        return view('penghasilan', compact('data'));
    }

    public function store(Request $request){
        $validation = $request->validate([
            'id_client' => 'required|integer',
            'namalengkap' => 'required|string|max:255',
            'nik' => 'required|digits:16',
            'jabatan' => 'required|string|max:255',
            'namaperusahaan' => 'required|string|max:255',
            'alamatperusahaan' => 'required|string|max:255',
            'gajipokok' => 'required|string|max:255',
            'tunjangan' => 'required|string|max:255',
            'penghasilantambahan' => 'required|string|max:255',
            'totalpenghasilan' => 'required|string|max:255',
            'tujuanpenggunaan' => 'required|string|max:255'
        ]);

        if(!$validation){
            return redirect()->back()->with('gagal', 'Perhatikan kembali inputan anda');
        }

        if(Suratpenghasilan::where('id_client', $request->id_client)->exists()){
            return redirect()->back()->with('gagal', 'Anda sudah mengajukan surat ini');
        }

        $store = Suratpenghasilan::create([
            'id_client' => $request->id_client,
            'id_statussurat' => 1,
            'namalengkap' => $request->namalengkap,
            'nik' => $request->nik,
            'jabatan' => $request->jabatan,
            'namaperusahaan' => $request->namaperusahaan,
            'alamatperusahaan' => $request->alamatperusahaan,
            'gajipokok' => $request->gajipokok,
            'tunjangan' => $request->tunjangan,
            'penghasilantambahan' => $request->penghasilantambahan,
            'totalpenghasilan' => $request->totalpenghasilan,
            'tujuanpenggunaan' => $request->tujuanpenggunaan
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
        $data = Suratpenghasilan::find($id);
        return view('detail-penghasilan', compact('data', 'admin'));       
    }

    public function updateStatus(Request $request){
        $validation = $request->validate([
            'id' => 'required',
            'status' => 'required|integer'
        ]);

        if(!$validation){
            return redirect()->back()->with('gagal', 'Pastikan inputan anda sesuai');
        }

        $update = Suratpenghasilan::where('id', $request->id)->update([
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

        $delete = Suratpenghasilan::where('id', $request->id)->delete();

        if(!$delete){
            return redirect()->back()->with('gagal', 'Gagal menghapus surat');
        }

        return redirect()->route('surat')->with('sukses', 'Surat berhasil dihapus');
    }
}
