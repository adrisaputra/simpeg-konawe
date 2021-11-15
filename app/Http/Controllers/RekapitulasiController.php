<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;   //nama model
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; //untuk membuat query di controller
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Builder;

class RekapitulasiController extends Controller
{
    ## Cek Login
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function golongan_pegawai()
    {
        $title = "Rekapitulasi Golongan Pegawai";
        $gol1a = Pegawai::where('id_gol_ruang_akhir',11)->count();
        $gol1b = Pegawai::where('id_gol_ruang_akhir',12)->count();
        $gol1c = Pegawai::where('id_gol_ruang_akhir',13)->count();
        $gol1d = Pegawai::where('id_gol_ruang_akhir',14)->count();

        $gol2a = Pegawai::where('id_gol_ruang_akhir',21)->count();
        $gol2b = Pegawai::where('id_gol_ruang_akhir',22)->count();
        $gol2c = Pegawai::where('id_gol_ruang_akhir',23)->count();
        $gol2d = Pegawai::where('id_gol_ruang_akhir',24)->count();

        $gol3a = Pegawai::where('id_gol_ruang_akhir',31)->count();
        $gol3b = Pegawai::where('id_gol_ruang_akhir',32)->count();
        $gol3c = Pegawai::where('id_gol_ruang_akhir',33)->count();
        $gol3d = Pegawai::where('id_gol_ruang_akhir',34)->count();

        $gol4a = Pegawai::where('id_gol_ruang_akhir',41)->count();
        $gol4b = Pegawai::where('id_gol_ruang_akhir',42)->count();
        $gol4c = Pegawai::where('id_gol_ruang_akhir',43)->count();
        $gol4d = Pegawai::where('id_gol_ruang_akhir',44)->count();
        $gol4e = Pegawai::where('id_gol_ruang_akhir',45)->count();

    }
    
    public function pendidikan_pegawai()
    {
        $title = "Rekapitulasi Pendidikan Pegawai";
        $sd = Pegawai::where('id_tingkat_pendidikan_terakhir', 05)->count();
        $sltp = Pegawai::where('id_tingkat_pendidikan_terakhir', 10)->count();
        $sltp_kejuruan = Pegawai::where('id_tingkat_pendidikan_terakhir', 12)->count();
        $slta = Pegawai::where('id_tingkat_pendidikan_terakhir', 15)->count();
        $slta_kejuruan = Pegawai::where('id_tingkat_pendidikan_terakhir', 17)->count();
        $slta_keguruan = Pegawai::where('id_tingkat_pendidikan_terakhir', 18)->count();
        $diploma1 = Pegawai::where('id_tingkat_pendidikan_terakhir', 20)->count();
        $diploma2 = Pegawai::where('id_tingkat_pendidikan_terakhir', 25)->count();
        $diploma3 = Pegawai::where('id_tingkat_pendidikan_terakhir', 30)->count();
        $diploma4 = Pegawai::where('id_tingkat_pendidikan_terakhir', 35)->count();
        $s1 = Pegawai::where('id_tingkat_pendidikan_terakhir', 40)->count();
        $s2 = Pegawai::where('id_tingkat_pendidikan_terakhir', 45)->count();
        $s3 = Pegawai::where('id_tingkat_pendidikan_terakhir', 50)->count();

    }
    
    public function esselon_pegawai()
    {
        $title = "Rekapitulasi Esselon Pegawai";
        $esselon10 = Pegawai::where('id_esselon', 10)->count();
        $esselon11 = Pegawai::where('id_esselon', 11)->count();
        $esselon12 = Pegawai::where('id_esselon', 12)->count();
        $esselon21 = Pegawai::where('id_esselon', 21)->count();
        $esselon22 = Pegawai::where('id_esselon', 22)->count();
        $esselon31 = Pegawai::where('id_esselon', 31)->count();
        $esselon32 = Pegawai::where('id_esselon', 32)->count();
        $esselon41 = Pegawai::where('id_esselon', 41)->count();
        $esselon42 = Pegawai::where('id_esselon', 42)->count();
        $esselon51 = Pegawai::where('id_esselon', 51)->count();
        $esselon52 = Pegawai::where('id_esselon', 52)->count();
        $esselon99 = Pegawai::where('id_esselon', 99)->count();

    }
    
    public function Jumlah_pegawai()
    {
        $title = "Rekapitulasi Jumlah Pegawai";
        $jumlah_pegawai = Pegawai::count();
        return view('admin.rekapitulasi.gender_pegawai',compact('title','jumlah_pegawai'));
    }
    
    public function gender_pegawai()
    {
        $title = "Rekapitulasi Gender Pegawai";
        $pria = Pegawai::where('jenis_kelamin','M')->count();
        $wanita = Pegawai::where('jenis_kelamin','F')->count();
        $jumlah_pegawai = Pegawai::count();
        return view('admin.rekapitulasi.gender_pegawai',compact('title','pria','wanita','jumlah_pegawai'));
    }
    
}
