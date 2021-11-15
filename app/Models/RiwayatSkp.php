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
        'atasan_non_pns',
        'penilai_non_pns',
        'nip_nrp_penilai',
        'nip_nrp_atasan_penilai',
        'penilai_nama',
        'nama_atasan_penilai',
        'nama_penilai_unor',
        'nama_atasan_penilai_unor',
        'jabatan_penilai',
        'atasan_penilai_jabatan',
        'golongan_penilai',
        'golongan_atasan_penilai',
        'tmt_golongan_penilai',
        'tmt_golongan_atasan_penilai',
        'status_penilai',
        'status_atasan_penilai',
        'jenis_jabatan',
        'status',
        'status_hapus',
        'user_id'
    ];
}
