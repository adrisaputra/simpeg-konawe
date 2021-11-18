<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatPindahInstansi extends Model
{
    protected $table = 'riwayat_pindah_instansi_tbl';
	protected $fillable =[
        'id_pindah_instansi',
        'id_pegawai',
        'nip',
        'nama_pegawai',
        'instansi_kerja_lama',
        'jenis_pegawai',
        'satuan_kerja_baru',
        'satuan_kerja_induk_baru',
        'lokasi_kerja_baru',
        'kpkn_baru',
        'jenis_jabatan_baru',
        'esselon',
        'instansi_kerja_baru',
        'unor_baru',
        'jabatan_fungsional_baru',
        'no_sk_usul',
        'tanggal_sk_usul',
        'no_sk_bkn',
        'tanggal_sk_bkn',
        'tmt_pi',
        'no_sk_tujuan',
        'tanggal_sk_tujuan',
        'status',
        'user_id'
    ];
}
