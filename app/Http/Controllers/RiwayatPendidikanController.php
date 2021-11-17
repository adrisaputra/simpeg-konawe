<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;   //nama model
use App\Models\RiwayatPendidikan;   //nama model
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; //untuk membuat query di controller
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RiwayatPendidikanController extends Controller
{
    ## Cek Login
    public function __construct()
    {
        $this->middleware('auth');
    }
	
    ## Tampikan Data
    public function index($pegawai)
    {
        $title = "Data Riwayat Pendidikan";
        $pegawai = Pegawai::where('id',$pegawai)->first();
        $riwayat_pendidikan = RiwayatPendidikan::where('nip', $pegawai->nip)->orderBy('id_tingkat_pendidikan','ASC')->paginate(25)->onEachSide(1);
        return view('admin.riwayat_pendidikan.index',compact('title','pegawai','riwayat_pendidikan'));
    }
}
