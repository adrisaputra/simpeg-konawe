<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatJabatan extends Model
{
    protected $table = 'riwayat_jabatan_tbl';
	protected $fillable =[
        'id_orang',
        'id_pegawai',
        'nip',
        'nama_pegawai',
        'id_unor',
        'unor',
        'id_jenis_jabatan',
        'jenis_jabatan',
        'id_jabatan',
        'nama_jabatan',
        'id_esselon',
        'esselon',
        'tmt_jabatan',
        'no_sk',
        'tanggal_sk',
        'id_satuan_kerja',
        'tmt_pelantikan',
        'status',
        'user_id'
    ];
}
