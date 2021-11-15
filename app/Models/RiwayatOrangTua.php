<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatOrangTua extends Model
{
    protected $table = 'riwayat_orang_tua_tbl';
	protected $fillable =[
        'id_orang',
        'id_pegawai',
        'nip',
        'nama_pegawai',
        'id_ibu',
        'nama_ibu',
        'tempat_lahir_ibu',
        'tanggal_lahir_ibu',
        'id_ayah',
        'nama_ayah',
        'tempat_lahir_ayah',
        'tanggal_lahir_ayah',
        'id_jenis_anak',
        'jenis_anak',
        'status_hidup',
        'status',
        'user_id'
    ];
}
