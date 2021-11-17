<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;   //nama model
use App\Imports\PegawaiImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; //untuk membuat query di controller
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PegawaiController extends Controller
{

    ## Cek Login
    public function __construct()
    {
        $this->middleware('auth');
    }
	
    ## Tampikan Data
    public function index()
    {
        $title = "Data Pegawai";
        $pegawai = Pegawai::where('status_hapus', 0)->orderBy('nip','ASC')->paginate(25)->onEachSide(1);
        return view('admin.pegawai.index',compact('title','pegawai'));
    }

    ## Tampilkan Data Search
    public function search(Request $request)
    {
        $title = "Data Pegawai";
        $pegawai = $request->get('search');
        $pegawai = Pegawai::where('status_hapus', 0)
                    ->where(function ($query) use ($pegawai) {
                        $query->where('nip', 'LIKE', '%'.$pegawai.'%')
                            ->orWhere('nama_pegawai', 'LIKE', '%'.$pegawai.'%');
                    })
                    ->orderBy('nip','ASC')->paginate(50)->onEachSide(1);
        
        return view('admin.pegawai.index',compact('title','pegawai'));
    }

    ## Data Utama
    public function detail(Pegawai $pegawai)
    {
        $title = "Data Utama";
        $pegawai = Pegawai::where('nip', $pegawai->nip)->orderBy('nip','ASC')->first();
        return view('admin.pegawai.detail',compact('title','pegawai'));

    }

}
