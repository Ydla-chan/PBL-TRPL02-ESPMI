<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siklus extends Model
{
    use HasFactory;
    protected $table = 'siklus';
    protected $primaryKey = 'id_siklus';
    protected $fillable = 
    [
        'nama_siklus',
    ];
}
