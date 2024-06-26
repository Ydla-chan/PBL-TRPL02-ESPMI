<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class targetmutu extends Model
{
    use HasFactory;
    protected $table = 'targetmutu';
    protected $primarykey = 'id_target';
    protected $fittable = [
        'id_standar',
        'id_substandar',
        'id_unitkerja',
        'judul',
        'butir',
        'standar_mutu',
        'target_capaian',
        'indikator',
        'cara_mengukur',
        'target_waktu',
    ];

}
