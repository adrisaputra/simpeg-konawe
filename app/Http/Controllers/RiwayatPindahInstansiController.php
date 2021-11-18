<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;   //nama model
use App\Models\RiwayatPindahInstansi;   //nama model
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; //untuk membuat query di controller
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RiwayatPindahInstansiController extends Controller
{
    ## Cek Login
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    ## Tampikan Data
    public function index($pegawai)
    {
        $title = "Data Riwayat Pindah Instansi";
        $pegawai = Pegawai::where('id',$pegawai)->first();
        $riwayat_pindah_instansi = RiwayatPindahInstansi::where('nip', $pegawai->nip)->paginate(25)->onEachSide(1);
        return view('admin.riwayat_pindah_instansi.index',compact('title','pegawai','riwayat_pindah_instansi'));
    }
}
