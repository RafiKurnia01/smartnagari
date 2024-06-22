<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Client;
use Illuminate\Support\Facades\Validator;

class ClientController extends Controller
{
    public function index(){
        return view('registrasi_admin');
    }

    public function authenticate(Request $request){
        $validatedData = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required',
        ]);

        if ($validatedData->fails()) {
            return redirect()->back()->withErrors($validatedData)->withInput();
        }

        $client = Client::where('username', $request->username)->first();
        if($client){
            if(password_verify($request->password, $client->password)){
                session(['client' => $client]);
                return redirect()->route('index-admin');
            }
        }
        return redirect()->back()->with('error', 'Username atau password salah');
    }

    public function store(Request $request){

        $validatedData = Validator::make($request->all(), [
            'username' => 'required|unique:clients',
            'password' => 'required|min:8',
            'email' => 'required|email',
            'nik' => 'required|unique:clients',
            'namalengkap' => 'required|max:255',
            'notelp' => 'required',
            'alamat' => 'required',
            'ktp' => 'required|mimes:pdf|max:2048',
        ]);
        
        if ($validatedData->fails()) {
            return redirect()->back()->withErrors($validatedData)->withInput();
        }
        $ktp = $request->file('ktp');
        $filename = date('y-m-d').$ktp->getClientOriginalName();
        $path = 'file-user/'.$filename;
        Storage::disk('public')->put($path, file_get_contents($ktp));

        $client = new Client();
        $client->username = $request->username;
        $client->password = bcrypt($request->password);
        $client->email = $request->email;
        $client->NIK = $request->nik;
        $client->namalengkap = $request->namalengkap;
        $client->notelp = $request->notelp;
        $client->alamat = $request->alamat;
        $client->ktp = $path;
        $client->save();

        return redirect()->route('registrasi_admin')->with('success', 'Data berhasil disimpan');
    }
}
