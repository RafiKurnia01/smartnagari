<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Suratpenghasilan;
class SuratpenghasilanController extends Controller
{
    public function index(){
        $surat = Suratpenghasilan::all();
        return response()->json([
            'success' => true,
            'message' => 'Daftar Data Surat Penghasilan',
            'data' => $surat
        ], 200);
    }

    public function store(Request $request){
        $status = $request->validate([
            'id_client' => 'required|integer',
            'namalengkap' => 'required',
            'nik' => 'required|digits:16',
            'jabatan' => 'required',
            'namaperusahaan' => 'required',
            'alamatperusahaan' => 'required',
            'gajipokok' => 'required',
            'tunjangan' => 'required',
            'penghasilantambahan' => 'required',
            'totalpenghasilan' => 'required',
            'tujuanpenggunaan' => 'required',
        ]);

        if($status){
            $store = new Suratpenghasilan([
                'id_client' => $request->get('id_client'),
                'id_statussurat' => 1,
                'namalengkap' => $request->get('namalengkap'),
                'nik' => $request->get('nik'),
                'jabatan' => $request->get('jabatan'),
                'namaperusahaan' => $request->get('namaperusahaan'),
                'alamatperusahaan' => $request->get('alamatperusahaan'),
                'gajipokok' => $request->get('gajipokok'),
                'tunjangan' => $request->get('tunjangan'),
                'penghasilantambahan' => $request->get('penghasilantambahan'),
                'totalpenghasilan' => $request->get('totalpenghasilan'),
                'tujuanpenggunaan' => $request->get('tujuanpenggunaan'),
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
