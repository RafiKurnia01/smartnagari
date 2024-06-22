<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(){
        $data = News::all();
        return view('blog', compact('data'));
    }

    public function detail($id){
        $data = News::find($id);
        return view('blog-single', compact('data'));
    }
}
