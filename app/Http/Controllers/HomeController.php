<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;   //nama model
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
	
    public function index()
    {
        $pegawai = Pegawai::where('status_hapus', 0)->count();
        return view('admin.beranda', compact('pegawai'));
    }
}
