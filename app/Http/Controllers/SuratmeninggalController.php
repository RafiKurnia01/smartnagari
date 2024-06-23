<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Suratmeninggal;

class SuratmeninggalController extends Controller
{
    public function index(){
        $surat = Suratmeninggal::all();
        return response()->json([
            'success' => true,
            'message' => 'Daftar Data Surat Meninggal',
            'data' => $surat
        ], 200);
    }

    public function store(Request $request){
        $surat = $request->validate([
            'id_client' => 'required|integer',
            'namalengkap' => 'required|string|max:255',
            'nik' => 'required|digits:16',
            'jenis_kelamin' => 'required',
            'tempatlahir' => 'required|string|max:255',
            'tanggallahir' => 'required|date',
            'pekerjaan' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'tanggalmeninggal' => 'required|date'
        ]);

        if($surat){
            $store = new Suratmeninggal([
                'id_client' => $request->get('id_client'),
                'id_statussurat' => 1,
                'namalengkap' => $request->get('namalengkap'),
                'nik' => $request->get('nik'),
                'jenis_kelamin' => $request->get('jenis_kelamin'),
                'tempatlahir' => $request->get('tempatlahir'),
                'tanggallahir' => $request->get('tanggallahir'),
                'pekerjaan' => $request->get('pekerjaan'),
                'alamat' => $request->get('alamat'),
                'tanggalmeninggal' => $request->get('tanggalmeninggal')
            ]);

            $s = $store->save();
            if($s){
                return response()->json([
                    'success' => true,
                    'message' => 'Data Surat Meninggal Berhasil Diajukan',
                ], 200);
            }else{
                return response()->json([
                    'success' => false,
                    'message' => 'Data Surat Meninggal Gagal Diajukan',
                ], 400);
            }
        }else{
            return response()->json([
                'success' => false,
                'message' => 'Perhatikan lagi inputan anda',
            ], 400);
        }

    }
}
