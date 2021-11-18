<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatDiklat extends Model
{
    protected $table = 'riwayat_diklat_tbl';
	protected $fillable =[
        'id_diklat',
        'id_pegawai',
        'nip',
        'nama_pegawai',
        'id_latihan_struktural',
        'nama_latihan_struktural',
        'nomor',
        'tanggal',
        'tahun',
        'status',
        'user_id'
    ];
}
