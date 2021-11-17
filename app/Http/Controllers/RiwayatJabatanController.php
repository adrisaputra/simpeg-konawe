<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;   //nama model
use App\Models\RiwayatJabatan;   //nama model
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; //untuk membuat query di controller
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RiwayatJabatanController extends Controller
{

    ## Cek Login
    public function __construct()
    {
        $this->middleware('auth');
    }
	
    ## Tampikan Data
    public function index($pegawai)
    {
        $title = "Data Riwayat Jabatan";
        $pegawai = Pegawai::where('id',$pegawai)->first();
        $riwayat_jabatan = RiwayatJabatan::where('nip', $pegawai->nip)->orderBy('tmt_jabatan','ASC')->paginate(25)->onEachSide(1);
        return view('admin.riwayat_jabatan.index',compact('title','pegawai','riwayat_jabatan'));
    }

}
