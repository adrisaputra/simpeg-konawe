<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatSkp extends Model
{
    protected $table = 'riwayat_skp_tbl';
	protected $fillable =[
        'id_skp',
        'id_pegawai',
        'nip',
        'tahun',
        'nilai_skp',
        'orientasi_pelayanan',
        'integritas',
        'komitmen',
        'disiplin',
        'kerja_sama',
        'nilai_perilaku_kerja',
        'nilai_prestasi_kerja',
        'kepemimpinan',
        'jumlah',
        'nilai_rata_rata',
        'atasan_pejabat_penilai',
        'pejabat_penilai',
        'status',
        'status_hapus',
        'user_id'
    ];
}
