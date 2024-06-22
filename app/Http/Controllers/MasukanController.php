<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Masukan;

class MasukanController extends Controller
{
    public function index(){
        return view('contact');
    }

    public function store(Request $request)
    {
        // Validasi data
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'pesan' => 'required|string'
        ]);

        // Simpan data ke dalam tabel masukan
        $masukan = new Masukan();
        $masukan->namasender = $validatedData['nama'];
        $masukan->emailsender = $validatedData['email'];
        $masukan->subjek = $validatedData['subject'];
        $masukan->pesan = $validatedData['pesan'];
        $masukan->save();

        // Redirect dengan pesan sukses
        return redirect()->back()->with('sukses', 'Pesan berhasil dikirim');
    }
}
