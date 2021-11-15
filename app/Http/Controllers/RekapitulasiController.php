<?php

namespace App\Http\Controllers;

use App\Models\RiwayatGolongan;   //nama model
use App\Models\RiwayatPendidikan;   //nama model
use App\Models\Jabatan;   //nama model
use App\Models\Bidang;   //nama model
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
        $gol1a = RiwayatGolongan::where('id_golongan',11)->count();
        $gol1b = RiwayatGolongan::where('id_golongan',12)->count();
        $gol1c = RiwayatGolongan::where('id_golongan',13)->count();
        $gol1d = RiwayatGolongan::where('id_golongan',14)->count();

        $gol2a = RiwayatGolongan::where('id_golongan',21)->count();
        $gol2b = RiwayatGolongan::where('id_golongan',22)->count();
        $gol2c = RiwayatGolongan::where('id_golongan',23)->count();
        $gol2d = RiwayatGolongan::where('id_golongan',24)->count();

        $gol3a = RiwayatGolongan::where('id_golongan',31)->count();
        $gol3b = RiwayatGolongan::where('id_golongan',32)->count();
        $gol3c = RiwayatGolongan::where('id_golongan',33)->count();
        $gol3d = RiwayatGolongan::where('id_golongan',34)->count();

        $gol4a = RiwayatGolongan::where('id_golongan',41)->count();
        $gol4b = RiwayatGolongan::where('id_golongan',42)->count();
        $gol4c = RiwayatGolongan::where('id_golongan',43)->count();
        $gol4d = RiwayatGolongan::where('id_golongan',44)->count();
        $gol4e = RiwayatGolongan::where('id_golongan',45)->count();

        echo $gol1a;
        // return view('admin.rekapitulasi.golongan_pegawai');

    }
    
    public function pendidikan_pegawai()
    {
        $title = "Rekapitulasi Pendidikan Pegawai";
        $sd = RiwayatPendidikan::select(DB::raw('max(id_tingkat_pendidikan) as id_tingkat_pendidikanx'))
                ->having('id_tingkat_pendidikanx', 05)
                ->orderBy('id_tingkat_pendidikan', 'desc')
                ->groupBy('nip')->count();
        $sltp = RiwayatPendidikan::select(DB::raw('max(id_tingkat_pendidikan) as id_tingkat_pendidikanx'))
                ->having('id_tingkat_pendidikanx', 10)
                ->orderBy('id_tingkat_pendidikan', 'desc')
                ->groupBy('nip')->count();
        $sltp_kejuruan = RiwayatPendidikan::select(DB::raw('max(id_tingkat_pendidikan) as id_tingkat_pendidikanx'))
                ->having('id_tingkat_pendidikanx', 12)
                ->orderBy('id_tingkat_pendidikan', 'desc')
                ->groupBy('nip')->count();
        $slta = RiwayatPendidikan::select(DB::raw('max(id_tingkat_pendidikan) as id_tingkat_pendidikanx'))
                ->having('id_tingkat_pendidikanx', 15)
                ->orderBy('id_tingkat_pendidikan', 'desc')
                ->groupBy('nip')->count();
        $slta_kejuruan = RiwayatPendidikan::select(DB::raw('max(id_tingkat_pendidikan) as id_tingkat_pendidikanx'))
                ->having('id_tingkat_pendidikanx', 17)
                ->orderBy('id_tingkat_pendidikan', 'desc')
                ->groupBy('nip')->count();
        $slta_keguruan = RiwayatPendidikan::select(DB::raw('max(id_tingkat_pendidikan) as id_tingkat_pendidikanx'))
                ->having('id_tingkat_pendidikanx', 18)
                ->orderBy('id_tingkat_pendidikan', 'desc')
                ->groupBy('nip')->count();
        $diploma1 = RiwayatPendidikan::select(DB::raw('max(id_tingkat_pendidikan) as id_tingkat_pendidikanx'))
                ->having('id_tingkat_pendidikanx', 20)
                ->orderBy('id_tingkat_pendidikan', 'desc')
                ->groupBy('nip')->count();
        $diploma2 = RiwayatPendidikan::select(DB::raw('max(id_tingkat_pendidikan) as id_tingkat_pendidikanx'))
                ->having('id_tingkat_pendidikanx', 25)
                ->orderBy('id_tingkat_pendidikan', 'desc')
                ->groupBy('nip')->count();
        $diploma3 = RiwayatPendidikan::select(DB::raw('max(id_tingkat_pendidikan) as id_tingkat_pendidikanx'))
                ->having('id_tingkat_pendidikanx', 30)
                ->orderBy('id_tingkat_pendidikan', 'desc')
                ->groupBy('nip')->count();
        $diploma4 = RiwayatPendidikan::select(DB::raw('max(id_tingkat_pendidikan) as id_tingkat_pendidikanx'))
                ->having('id_tingkat_pendidikanx', 35)
                ->orderBy('id_tingkat_pendidikan', 'desc')
                ->groupBy('nip')->count();
        $s1 = RiwayatPendidikan::select(DB::raw('max(id_tingkat_pendidikan) as id_tingkat_pendidikanx'))
                ->having('id_tingkat_pendidikanx', 40)
                ->orderBy('id_tingkat_pendidikan', 'desc')
                ->groupBy('nip')->count();
        $s2 = RiwayatPendidikan::select(DB::raw('max(id_tingkat_pendidikan) as id_tingkat_pendidikanx'))
                ->having('id_tingkat_pendidikanx', 45)
                ->orderBy('id_tingkat_pendidikan', 'desc')
                ->groupBy('nip')->count();
        $s3 = RiwayatPendidikan::select(DB::raw('max(id_tingkat_pendidikan) as id_tingkat_pendidikanx'))
                ->having('id_tingkat_pendidikanx', 50)
                ->orderBy('id_tingkat_pendidikan', 'desc')
                ->groupBy('nip')->count();

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
