<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class standar extends Model
{
    use HasFactory;
    protected $table = 'standar';
    protected $primaryKey = 'id_standar';

    protected $fillable = [
        'nama_standar',
    ];

}
