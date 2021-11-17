<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;   //nama model
use App\Models\RiwayatOrangTua;   //nama model
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; //untuk membuat query di controller
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RiwayatOrangTuaController extends Controller
{
    ## Cek Login
    public function __construct()
    {
        $this->middleware('auth');
    }
	
    ## Tampikan Data
    public function index($pegawai)
    {
        $title = "Data Riwayat Orang Tua";
        $pegawai = Pegawai::where('id',$pegawai)->first();
        $riwayat_orang_tua = RiwayatOrangTua::where('nip', $pegawai->nip)->first();
        return view('admin.riwayat_orang_tua.index',compact('title','pegawai','riwayat_orang_tua'));
    }

}
