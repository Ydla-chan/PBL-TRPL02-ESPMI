<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class capaian extends Model
{
    use HasFactory;
    protected $table = 'capaian';
    protected $primarykey = 'id_capaian';
    protected $fittable = [
        'id_target',
        'Triwulan',
        'penilaian_pengguna',
        'uraian_pengguna',
        'dokumen',
        'penilaian_auditor',
        'uraian_auditor',
    ];
}
