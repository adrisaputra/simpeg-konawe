<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;   //nama model
use App\Models\RiwayatKursus;   //nama model
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; //untuk membuat query di controller
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RiwayatPenghargaanController extends Controller
{
    ## Cek Login
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    ## Tampikan Data
    public function index($pegawai)
    {
        $title = "Data Riwayat Kursus";
        $pegawai = Pegawai::where('id',$pegawai)->first();
        $riwayat_kursus = RiwayatKursus::where('nip', $pegawai->nip)->paginate(25)->onEachSide(1);
        return view('admin.riwayat_kursus.index',compact('title','pegawai','riwayat_kursus'));
    }
}
