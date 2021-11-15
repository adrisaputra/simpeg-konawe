<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatPasangan extends Model
{
    protected $table = 'riwayat_pasangan_tbl';
	protected $fillable =[
        'nip',
        'nama_pegawai',
        'nama_pasangan',
        'jenis_kelamin',
        'tempat_lahir',
        'tanggal_lahir',
        'tanggal_menikah',
        'akta_menikah',
        'tanggal_cerai',
        'akta_cerai',
        'tanggal_meninggal',
        'akta_meninggal',
        'posisi',
        'status',
        'user_id'
    ];
}
