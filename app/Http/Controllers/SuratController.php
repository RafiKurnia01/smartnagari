<?php

namespace App\Http\Controllers;
use App\Models\Surattanah;
use Illuminate\Http\Request;
use Illmuninate\Support\Facades\Validator;

class SuratController extends Controller
{
    public function index(){
        $surat = Surattanah::all();
        return response()->json([
            'status' => 'success',
            'message' => 'Daftar data surat tanah',
            'data' => $surat
        ], 200);
    }
    public function store(Request $request){
        $s = $request->validate([
            'id_client' => 'required|integer',
            'namalengkap' => 'required',
            'nik' => 'required|digits:16',
            'alamat' => 'required|string|max:255',
            'nomor_sertifikat' => 'required',
            'letak_tanah' => 'required',
            'luas_tanah' => 'required',
            'batas_tanah' => 'required',
            'tujuanpenggunaan' => 'required',
        ]);

        if($s){
            $store = new Surattanah([
                'id_client' => $request->get('id_client'),
                'id_statussurat' => 1,
                'namalengkap' => $request->get('namalengkap'),
                'nik' => $request->get('nik'),
                'alamat' => $request->get('alamat'),
                'nomor_sertifikat' => $request->get('nomor_sertifikat'),
                'letak_tanah' => $request->get('letak_tanah'),
                'luas_tanah' => $request->get('luas_tanah'),
                'batas_tanah' => $request->get('batas_tanah'),
                'tujuanpenggunaan' => $request->get('tujuanpenggunaan'),
            ]);
    
            $status = $store->save();
            if($status){
                return response()->json([
                    'status' => 'success',
                    'message' => 'Data berhasil disimpan'
                ]);
            }else{
                return response()->json([
                    'status' => 'failed',
                    'message' => 'Data gagal disimpan'
                ]);
            }
        }else{
            return response()->json([
                'status' => 'failed',
                'message' => 'Perhatikan lagi isian anda'
            ]);
        }


    }
}
