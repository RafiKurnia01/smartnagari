<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Walinagari;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $data = Walinagari::all();
        return view('index', compact('data'));
        
    }

    public function dataWalinagari(){
        $d = Walinagari::where('id' , 1)->get();
        return view('walikota', compact('d'));
    }

}
