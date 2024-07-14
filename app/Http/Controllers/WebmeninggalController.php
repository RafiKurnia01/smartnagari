<?php

namespace App\Http\Controllers;

use App\Models\Suratmeninggal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WebmeninggalController extends Controller
{
    public function index(){
        $user = Auth::guard('client')->user();
        $data = $user->id;
        return view('meninggal', compact('data'));
    }
    public function store(Request $request){
        $validation = $request->validate([
            'id_client' => 'required',
            'namalengkap' => 'required|string|max:255',
            'nik' => 'required|digits:16',
            'jenis_kelamin' => 'required',
            'tempatlahir' => 'required|string|max:255',
            'tanggallahir' => 'required|date',
            'pekerjaan' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'tanggalmeninggal' => 'required|date',
            'sebabmeninggal' => 'required|string|max:255',
            'namapelapor' => 'required|string|max:255',
            'nikpelapor' => 'required|digits:16',
            'hubunganpelapor' => 'required|string|max:255',
        ]);

        if(!$validation){
            return redirect()->back()->with('gagal', 'Perhatikan kembali inputan anda');
        }

        if(Suratmeninggal::where('id_client', $request->id_client)->exists()){
            return redirect()->back()->with('gagal', 'Anda sudah mengajukan surat ini');
        }

        $store = Suratmeninggal::create([
            'id_client' => $request->id_client,
            'id_statussurat' => 1,
            'namalengkap' => $request->namalengkap,
            'nik' => $request->nik,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tempatlahir' => $request->tempatlahir,
            'tanggallahir' => $request->tanggallahir,
            'pekerjaan' => $request->pekerjaan,
            'alamat' => $request->alamat,
            'tanggalmeninggal' => $request->tanggalmeninggal,
            'sebabmeninggal' => $request->sebabmeninggal,
            'namapelapor' => $request->namapelapor,
            'nikpelapor' => $request->nikpelapor,
            'hubunganpelapor' => $request->hubunganpelapor,
        ]);

        if(!$store){
            return redirect()->back()->with('gagal', 'Gagal mengajukan surat, silahkan coba lagi');
        }

        return redirect()->route('services')->with('sukses', 'Surat berhasil diajukan');
    }

    public function detail($id){
        $user = auth()->guard('web')->user();
        $admin = $user->nama;
        $data = Suratmeninggal::find($id);
        return view('detail-meninggal', compact('data', 'admin'));
    }

    public function updateStatus(Request $request){
        $validation = $request->validate([
            'id' => 'required',
            'status' => 'required'
        ]);

        if(!$validation){
            return redirect()->back()->with('gagal', 'Perhatikan kembali inputan anda');
        }

        $update = Suratmeninggal::where('id', $request->id)->update([
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
            return redirect()->back()->with('gagal', 'Perhatikan kembali inputan anda');
        }

        $delete = Suratmeninggal::where('id', $request->id)->delete();

        if(!$delete){
            return redirect()->back()->with('gagal', 'Gagal menghapus surat');
        }

        return redirect()->route('surat')->with('sukses', 'Surat berhasil dihapus');
    }
}
