<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatPendidikan extends Model
{
    protected $table = 'riwayat_pendidikan_tbl';
	protected $fillable =[
        'id_orang',
        'id_pegawai',
        'nip',
        'nama_pegawai',
        'id_tingkat_pendidikan',
        'nama_tingkat_pendidikan',
        'id_pendidikan',
        'nama_pendidikan',
        'tanggal_lulus',
        'tahun_lulus',
        'no_ijazah',
        'nama_sekolah',
        'gelar_depan',
        'gelar_belakang',
        'pendidikan_pertama',
        'status',
        'status',
        'user_id'
    ];
}
