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
            'nama_umkm'	=>"required",
            'no_wa'	=>"required",
        ]);

        $cek = pendaftar_asosiasi::where('email',$request->email)
        ->orWhere('nik',$request->nik)
        ->first();

        if($cek != null){
            return redirect()->back()->with('gagal','Anda Sudah Mendaftar Sebelumnya');
        }

        $pendaftar = $request->all();
        if($request->kategori == "Lainnya"){
            $pendaftar['kategori'] = $request->kategori_lainnya;
        }


        pendaftar_asosiasi::create($pendaftar);

        return redirect('/')->with('sukses',"Pendaftaran sedang diproses, Konfirmasi akan dikirim melalui email");
    }
}
