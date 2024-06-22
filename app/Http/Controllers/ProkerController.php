<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proker;

class ProkerController extends Controller
{
    public function index(){
        $data = Proker::with('pegawai')->get();
        return view('proker', compact('data'));
    }


}
