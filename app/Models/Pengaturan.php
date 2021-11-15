<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaturan extends Model
{
    // use HasFactory;
	protected $table = 'pengaturan_tbl';
	protected $fillable =[
        'nama_aplikasi',
        'singkatan_nama_aplikasi',
        'logo_kecil',
        'logo_besar',
        'background_login',
        'background_sidebar',
        'layout',
        'skin',
        'user_id'
    ];
}
