<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class manual extends Model
{
    use HasFactory;
    protected $table = 'manual';
    protected $primarykey = 'id_manual';
    protected $fittable = [
        'id_standar',
        'id_substandar',
        'id_siklus',
        'id_unitkerja',
        'macam_kerja',
        'aktivitas_perkerjaan',
        'waktu',
    ];
}
