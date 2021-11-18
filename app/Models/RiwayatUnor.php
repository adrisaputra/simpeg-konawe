<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatUnor extends Model
{
    protected $table = 'riwayat_unor_tbl';
	protected $fillable =[
        'id_pindah_instansi',
        'id_pegawai',
        'nip',
        'nama_pegawai',
        'unor_baru',
        'no_sk',
        'tanggal_sk',
        'nama_unor_baru',
        'id_asal',
        'nama_asal',
        'instansi',
        'nama_label_asal',
        'status',
        'user_id'
    ];
}
