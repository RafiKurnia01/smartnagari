<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PendudukController extends Controller
{
    public function balita(){
        return view('report-detail-balita');
    }

    public function lansia(){
        return view('report-detail-lansia');
    } 

    public function stunting(){
        return view('report-detail-stunting');
    }
}
