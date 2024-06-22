<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProdukController extends Controller
{
    public function index(){
        $dataproduk = Product::all();
        return view('portfolio', compact('dataproduk'));
    }

    public function detailProduk($id){
        $dataproduk = Product::find($id);
        return view('portfolio-details', compact('dataproduk'));
    }
}
