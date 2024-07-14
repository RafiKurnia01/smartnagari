<?php

namespace App\Http\Controllers;

use App\Models\Suratnikah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WebnikahController extends Controller
{
    public function index(){
        $user = Auth::guard('client')->user();
        $data = $user->id;
        return view('menikah', compact('data'));
    }

    public function store(Request $request){
        $validation = $request->validate([
            'id_client' => 'required',
            'tempatmenikah' => 'required|string|max:255',
            'tanggalmenikah' => 'required|date',
            'namalengkap' => 'required|string|max:255',
            'nik' => 'required|digits:16',
            'tanggal_lahir' => 'required|date',
            'tempat_lahir' => 'required|string|max:255',
            'jenis_kelamin' => 'required|string|max:20',
            'agama' => 'required|string|max:20',
            'pekerjaan' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'namapasangan' => 'required|string|max:255',
            'nikpasangan' => 'required|digits:16',
            'tanggal_lahir_pasangan' => 'required|date',
            'tempat_lahir_pasangan' => 'required|string|max:255',
            'jenis_kelamin_pasangan' => 'required|string|max:20',
            'agama_pasangan' => 'required|string|max:20',
            'pekerjaan_pasangan' => 'required|string|max:255',
            'alamat_pasangan' => 'required|string|max:255',
        ]);

        if(!$validation){
            return redirect()->back()->with('gagal', 'Perhatikan kembali inputan anda');
        }

        if(Suratnikah::where('id_client', $request->id_client)->exists()){
            return redirect()->back()->with('gagal', 'Anda sudah mengajukan surat ini');
        }

        $store = Suratnikah::create([
            'id_client' => $request->id_client,
            'id_statussurat' => 1,
            'tempatmenikah' => $request->tempatmenikah,
            'tanggalmenikah' => $request->tanggalmenikah,
            'namalengkap' => $request->namalengkap,
            'nik' => $request->nik,
            'tanggal_lahir' => $request->tanggal_lahir,
            'tempat_lahir' => $request->tempat_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'agama' => $request->agama,
            'pekerjaan' => $request->pekerjaan,
            'alamat' => $request->alamat,
            'namapasangan' => $request->namapasangan,
            'nikpasangan' => $request->nikpasangan,
            'tanggal_lahir_pasangan' => $request->tanggal_lahir_pasangan,
            'tempat_lahir_pasangan' => $request->tempat_lahir_pasangan,
            'jenis_kelamin_pasangan' => $request->jenis_kelamin_pasangan,
            'agama_pasangan' => $request->agama_pasangan,
            'pekerjaan_pasangan' => $request->pekerjaan_pasangan,
            'alamat_pasangan' => $request->alamat_pasangan,
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
        $data = Suratnikah::find($id);
        return view('detail-nikah', compact('data', 'admin'));
    }

    public function updateStatus(Request $request){
        $validation = $request->validate([
            'id' => 'required',
            'status' => 'required'
        ]);

        if(!$validation){
            return redirect()->back()->with('gagal', 'Pastikan inputan anda benar');
        }

        $update = Suratnikah::where('id', $request->id)->update([
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
            return redirect()->back()->with('gagal', 'Pastikan inputan anda benar');
        }

        $delete = Suratnikah::where('id', $request->id)->delete();

        if(!$delete){
            return redirect()->back()->with('gagal', 'Gagal menghapus surat');
        }

        return redirect()->route('surat')->with('sukses', 'Surat berhasil dihapus');

    }
}
