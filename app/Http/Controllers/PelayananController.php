<?php

namespace App\Http\Controllers;

use App\Models\Suratpenghasilan;
use App\Models\Surattanah;
use App\Models\Surattidakmampu;
use App\Models\Suratnikah;
use App\Models\Suratmeninggal;
use App\Models\Suratdomisili;
use Illuminate\Http\Request;

class PelayananController extends Controller
{
    public function index(){
        $user = auth()->guard('client')->user();
        $data = $user->id;
        return view('services', compact('data'));
    }

    public function status($jenis_surat, $id_client){
        if($jenis_surat == 'sktm'){
            $sktm = Surattidakmampu::where('id_client', $id_client)->first();
            if(Surattidakmampu::where('id_client', $id_client)->count() == 0){
                return redirect()->back();
            }
            $surat = $sktm->id_statussurat;
            return view('status_pelayanan', compact('surat'));
        }elseif($jenis_surat == 'tanah'){
            $tanah = Surattanah::where('id_client', $id_client)->first();
            if(Surattanah::where('id_client', $id_client)->count() == 0){
                return redirect()->back();
            }
            $surat = $tanah->id_statussurat;
            return view('status_pelayanan', compact('surat'));
        }elseif($jenis_surat == 'penghasilan'){
            $penghasilan = Suratpenghasilan::where('id_client', $id_client)->first();
            if(Suratpenghasilan::where('id_client', $id_client)->count() == 0){
                return redirect()->back();
            }
            $surat = $penghasilan->id_statussurat;
            return view('status_pelayanan', compact('surat'));
        }elseif($jenis_surat == 'nikah'){
            $nikah = Suratnikah::where('id_client', $id_client)->first();
            if(Suratnikah::where('id_client', $id_client)->count() == 0){
                return redirect()->back();
            }
            $surat = $nikah->id_statussurat;
            return view('status_pelayanan', compact('surat'));
        }elseif($jenis_surat == 'meninggal'){
            $meninggal = Suratmeninggal::where('id_client', $id_client)->first();
            if(Suratmeninggal::where('id_client', $id_client)->count() == 0){
                return redirect()->back();
            }
            $surat = $meninggal->id_statussurat;
            return view('status_pelayanan', compact('surat'));
        }elseif($jenis_surat == 'domisili'){
            $domisili = Suratdomisili::where('id_client', $id_client)->first();
            if(Suratdomisili::where('id_client', $id_client)->count() == 0){
                return redirect()->back();
            }
            $surat = $domisili->id_statussurat;
            return view('status_pelayanan', compact('surat'));
        }else{
            return redirect()->back();
        }
    }
}
