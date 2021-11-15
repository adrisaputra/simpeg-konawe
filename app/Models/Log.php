<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
	protected $table = 'activity_log';
	
    public function user(){
        return $this->belongsTo(User::class, 'causer_id');
    }
    
    // public function user()
    // {
    //     return $this->belongsTo('App\Models\User');
    // }

}
