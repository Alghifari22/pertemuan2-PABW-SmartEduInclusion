<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    protected $table = 'modules';
    protected $fillable = [
        'kode_modul',
        'judul',
        'mata_pelajaran',
        'kelas',
    ];
}
