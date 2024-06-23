<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Suratnikah;
class SuratnikahController extends Controller
{
    public function index(){
        $surat = Suratnikah::all();
        return response()->json([
            'success' => true,
            'message' => 'Daftar Data Surat Nikah',
            'data' => $surat
        ], 200);
    }

    public function store(Request $request){
        $status = $request->validate([
            'id_client' => 'required|integer',
            'tempatmenikah' => 'required',
            'tanggalmenikah' => 'required|date',
            'namalengkap' => 'required',
            'nik' => 'required|digits:16',
            'tanggal_lahir' => 'required|date',
            'tempat_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'pekerjaan' => 'required',
            'alamat' => 'required',
            'namapasangan' => 'required',
            'nikpasangan' => 'required|digits:16',
            'tanggal_lahir_pasangan' => 'required|date',
            'tempat_lahir_pasangan' => 'required',
            'jenis_kelamin_pasangan' => 'required',
            'agama_pasangan' => 'required',
            'pekerjaan_pasangan' => 'required',
            'alamat_pasangan' => 'required'
        ]);

        if($status){
            $store = new Suratnikah([
                'id_client' => $request->get('id_client'),
                'id_statussurat' => 1,
                'tempatmenikah' => $request->get('tempatmenikah'),
                'tanggalmenikah' => $request->get('tanggalmenikah'),
                'namalengkap' => $request->get('namalengkap'),
                'nik' => $request->get('nik'),
                'tanggal_lahir' => $request->get('tanggal_lahir'),
                'tempat_lahir' => $request->get('tempat_lahir'),
                'jenis_kelamin' => $request->get('jenis_kelamin'),
                'agama' => $request->get('agama'),
                'pekerjaan' => $request->get('pekerjaan'),
                'alamat' => $request->get('alamat'),
                'namapasangan' => $request->get('namapasangan'),
                'nikpasangan' => $request->get('nikpasangan'),
                'tanggal_lahir_pasangan' => $request->get('tanggal_lahir_pasangan'),
                'tempat_lahir_pasangan' => $request->get('tempat_lahir_pasangan'),
                'jenis_kelamin_pasangan' => $request->get('jenis_kelamin_pasangan'),
                'agama_pasangan' => $request->get('agama_pasangan'),
                'pekerjaan_pasangan' => $request->get('pekerjaan_pasangan'),
                'alamat_pasangan' => $request->get('alamat_pasangan'),
            ]);

            $s = $store->save();
            if($s){
                return response()->json([
                    'success' => true,
                    'message' => 'Surat berhasil diajukan'
                ], 200);
            }else{
                return response()->json([
                    'success' => false,
                    'message' => 'Surat gagal diajukan'
                ], 400);
            }
        }else{
            return response()->json([
                'success' => false,
                'message' => 'Perhatikan lagi isian anda'
            ], 400);
        }
    }
}
