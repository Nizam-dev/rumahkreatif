<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pendaftar_asosiasi;
use Auth;
class PendaftaranController extends Controller
{
    public function index()
    {
        if(Auth::check()){
            return redirect('dashboard');
        }
        return view('pendaftaran');
    }

    public function pendaftaran(Request $request)
    {
        $request->validate([
            'name'	=>"required",
            'email'	=>"required|email",
            'nik'	=>"required",
            'alamat'	=>"required",
            'alamat_produksi'	=>"required",
            'no_izin'	=>"required",
            'nama_umkm'	=>"required",
        ]);

        $cek = pendaftar_asosiasi::where('email',$request->email)
        ->orWhere('nik',$request->nik)
        ->orWhere('no_izin',$request->no_izin)
        ->first();

        if($cek != null){
            return redirect()->back()->with('gagal','Anda Sudah Mendaftar Sebelumnya');
        }

        pendaftar_asosiasi::create($request->all());

        return redirect('/')->with('sukses',"Pendaftaran sedang diproses, Konfirmasi akan dikirim melalui email");
    }
}
