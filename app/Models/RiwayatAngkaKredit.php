<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatAngkaKredit extends Model
{
    protected $table = 'riwayat_angka_kredit_tbl';
	protected $fillable =[
        'id_angka_kredit',
        'id_pegawai',
        'nip',
        'nama_pegawai',
        'no_sk',
        'tanggal_sk',
        'bulan_mulai_penilaian',
        'tahun_mulai_penilaian',
        'bulan_selesai_penilaian',
        'tahun_selesai_penilaian',
        'kredit_utama_baru',
        'kredit_penunjang_baru',
        'total_kredit_baru',
        'riwayat_jabatan',
        'nama_jabatan',
        'angka_kredit_pertama',
        'status',
        'user_id'
    ];
}
