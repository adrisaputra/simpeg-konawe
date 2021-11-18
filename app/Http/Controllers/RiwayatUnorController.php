<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;   //nama model
use App\Models\RiwayatUnor;   //nama model
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; //untuk membuat query di controller
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RiwayatUnorController extends Controller
{
    ## Cek Login
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    ## Tampikan Data
    public function index($pegawai)
    {
        $title = "Data Riwayat Unor";
        $pegawai = Pegawai::where('id',$pegawai)->first();
        $riwayat_unor = RiwayatUnor::where('nip', $pegawai->nip)->paginate(25)->onEachSide(1);
        return view('admin.riwayat_unor.index',compact('title','pegawai','riwayat_unor'));
    }
}
