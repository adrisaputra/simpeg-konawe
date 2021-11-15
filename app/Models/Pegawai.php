<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    // use HasFactory;
	protected $table = 'pegawai_tbl';
	protected $fillable =[
        'id_orang',
        'nip',
        'nik',
        'gelar_depan',
        'gelar_belakang',
        'nama_pegawai',
        'id_tempat_lahir',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'alamat',
        'agama',
        'gol_darah',
        'email',
        'foto_formal',
        'foto_kedinasan',
        'status',
        'user_id'
    ];

}
