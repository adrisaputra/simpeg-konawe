<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatPenghargaan extends Model
{
    protected $table = 'riwayat_penghargaan_tbl';
	protected $fillable =[
        'id_penghargaan',
        'id_pegawai',
        'nip',
        'nama_pegawai',
        'tahun',
        'no_sk',
        'tanggal_sk',
        'jenis_penghargaan',
        'nama_penghargaan',
        'status',
        'user_id'
    ];
}
