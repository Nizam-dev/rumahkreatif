<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\pendaftar_asosiasi;

class PendaftaranController extends Controller
{
    public function index()
    {
        return view('pendaftaran');
    }

    public function pendaftaran(Request $request)
    {
        $request->validate([
            'name'	=>"required",
            'email'	=>"required|email",
            'nik'	=>"required",
            'alamat'	=>"required",
            'nama_umkm'	=>"required",
        ]);

        pendaftar_asosiasi::create($request->all());

        return redirect('/')->with('sukses',"Pendaftaran sedang diproses, Konfirmasi akan dikirim melalui email");
    }
}
