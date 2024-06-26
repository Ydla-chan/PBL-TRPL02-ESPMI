<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class substandar extends Model
{
    use HasFactory;
    protected $table = 'substandar';
    protected $primarykey = 'id_substandar';
    protected $fittable = [
        'id_standar',
        'nama_substandar',
    ];
}
