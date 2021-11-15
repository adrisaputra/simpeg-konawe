<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatGolongan extends Model
{
    protected $table = 'riwayat_golongan_tbl';
	protected $fillable =[
        'id_orang',
        'id_pegawai',
        'nip',
        'nama_pegawai',
        'kode_jenis_kp',
        'jenis_kp',
        'id_golongan',
        'golongan',
        'pangkat',
        'no_sk',
        'tanggal_sk',
        'no_bkn',
        'tanggal_bkn',
        'tmt_golongan',
        'jumlah_angka_kredit_utama',
        'jumlah_angka_kredit_tambahan',
        'mk_tahun',
        'mk_bulan',
        'status',
        'user_id'
    ];
}
