<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatDp3 extends Model
{
    protected $table = 'riwayat_dp3_tbl';
	protected $fillable =[
        'id_dp3',
        'id_pegawai',
        'nip',
        'nama_pegawai',
        'tahun',
        'kesetiaan',
        'prestasi_kerja',
        'tanggung_jawab',
        'ketaatan',
        'kejujuran',
        'kerjasama',
        'prakarsa',
        'kepemimpinan',
        'jumlah',
        'nilai_rata_rata',
        'nama_penilai',
        'status',
        'user_id'
    ];
}
