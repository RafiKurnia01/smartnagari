<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Suratdomisili;
class SuratdomisiliController extends Controller
{
    public function index(){
        $surat = Suratdomisili::all();
        return response()->json([
            'success' => true,
            'message' => 'Daftar Data Surat Domisili',
            'data' => $surat
        ], 200);
    }

    public function store(Request $request){
        $surat = $request->validate([
            'id_client' => 'required|integer',
            'namalengkap' => 'required',
            'nik' => 'required|digits:16',
            'nokk' => 'required',
            'alamatsekarang' => 'required',
            'alamatpindah' => 'required',
            'alasanpindah' => 'required',
            'tanggalpindah' => 'required|date',
        ]);

        if($surat){
            $store = new Suratdomisili([
                'id_client' => $request->get('id_client'),
                'id_statussurat' => 1,
                'namalengkap' => $request->get('namalengkap'),
                'nik' => $request->get('nik'),
                'nokk' => $request->get('nokk'),
                'alamatsekarang' => $request->get('alamatsekarang'),
                'alamatpindah' => $request->get('alamatpindah'),
                'alasanpindah' => $request->get('alasanpindah'),
                'tanggalpindah' => $request->get('tanggalpindah'),
            ]);

            $s = $store->save();
            if($s){
                return response()->json([
                    'success' => true,
                    'message' => 'Data Berhasil Disimpan'
                ], 200);
            }else{
                return response()->json([
                    'success' => false,
                    'message' => 'Data Gagal Disimpan'
                ], 400);
            }
        }else{
            return response()->json([
                'success' => false,
                'message' => 'Perhatikan Kembali Isian Anda'
            ], 400);
        }

    }
}
