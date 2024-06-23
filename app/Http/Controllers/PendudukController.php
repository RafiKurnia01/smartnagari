<?php

namespace App\Http\Controllers;

use App\Models\Penduduk;
use Illuminate\Http\Request;

class PendudukController extends Controller
{
    public function balita(){
        $balita = Penduduk::where('id_jenisdata', 3)->get();
        return view('report-detail-balita', compact('balita'));
    }

    public function printBalita(){
        $balita = Penduduk::where('id_jenisdata', 3)->get();
        return view('print-data-balita', compact('balita'));
    }

    public function lansia(){
        $lansia = Penduduk::where('id_jenisdata', 2)->get();
        return view('report-detail-lansia', compact('lansia'));
    }
    public function printLansia(){
        $lansia = Penduduk::where('id_jenisdata', 2)->get();
        return view('print-data-lansia', compact('lansia'));
    }

    public function stunting(){
        $stunting = Penduduk::where('id_jenisdata', 1)->get();
        return view('report-detail-stunting', compact('stunting'));
    }

    public function printStunting(){
        $stunting = Penduduk::where('id_jenisdata', 1)->get();
        return view('print-data-stunting', compact('stunting'));
    }
}
