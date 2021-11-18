<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatKursus extends Model
{
    protected $table = 'riwayat_kursus_tbl';
	protected $fillable =[
        'id_kursus',
        'id_pegawai',
        'nip',
        'nama_pegawai',
        'id_jenis_kursus',
        'nama_jenis_kursus',
        'nama_kursus',
        'lama_kursus',
        'tanggal_kursus',
        'tahun_kursus',
        'no_sertifikat',
        'institusi_penyelenggara',
        'jenis_kursus_sertifikat',
        'status',
        'user_id'
    ];
}
