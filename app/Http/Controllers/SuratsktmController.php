<?php

namespace App\Http\Controllers;
use App\Models\Surattidakmampu;
use Illuminate\Http\Request;

class SuratsktmController extends Controller
{
    public function index()
    {
        $suratsktm = Surattidakmampu::all();
        return response()->json([
            'success' => true,
            'message' => 'Daftar data surat keterangan tidak mampu',
            'data' => $suratsktm
        ], 200);
    }

    public function store(Request $request){
        $status = $request->validate([
            'id_client' => 'required|integer',
            'namalengkap' => 'required',
            'nik' => 'required|digits:16',
            'tempatlahir' => 'required',
            'tanggallahir' => 'required',
            'jeniskelamin' => 'required',
            'alamat' => 'required|string|max:255',
            'pekerjaan' => 'required',
            'penghasilan' => 'required',
            'jumlahtanggungan' => 'required',
            'keperluan' => 'required',
        ]);

        if($status){
            $store = new Surattidakmampu([
                'id_client' => $request->get('id_client'),
                'id_statussurat' => 1,
                'namalengkap' => $request->get('namalengkap'),
                'nik' => $request->get('nik'),
                'tempatlahir' => $request->get('tempatlahir'),
                'tanggallahir' => $request->get('tanggallahir'),
                'jenis_kelamin' => $request->get('jeniskelamin'),
                'alamat' => $request->get('alamat'),
                'pekerjaan' => $request->get('pekerjaan'),
                'penghasilan' => $request->get('penghasilan'),
                'jumlah_tanggungan' => $request->get('jumlahtanggungan'),
                'keperluan' => $request->get('keperluan'),
            ]);

            $s = $store->save();
            if($s){
                return response()->json([
                    'success' => true,
                    'message' => 'Data berhasil disimpan'
                ], 200);
            }else{
                return response()->json([
                    'success' => false,
                    'message' => 'Data gagal disimpan'
                ], 400);
            }
        }else{
            return response()->json([
                'success' => false,
                'message' => 'Perhatikan kembali isian anda'
            ], 400);
        }

    }
}
