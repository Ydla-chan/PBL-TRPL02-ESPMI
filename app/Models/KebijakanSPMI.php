<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KebijakanSPMI extends Model
{
    use HasFactory;
    protected $table = 'KebijakanSPMI';
    protected $primarykey = 'id_dokumen';
    protected $fittable = [
        'link_dokumen',
    ];

}
