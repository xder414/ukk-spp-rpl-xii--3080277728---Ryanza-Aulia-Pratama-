<?php 

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Petugas extends Authenticatable{
    protected $table = 'petugas';
    protected $primaryKey = 'id_petugas';

    protected $fillable = [
        'username',
        'password',
        'nama_petugas',
        'level',
    ];
    protected $hidden = [
        'password',
    ];
}