<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class unitkerja extends Model
{
    use HasFactory;
    protected $table='unitkerja';
    protected $primaryKey = 'id_unitkerja';
    protected $fillable = 
    [
        
        'nama_unitkerja',
    ];

    public function users()
    {
        return $this->hasMany(User::class, 'id_unitkerja');
    }
}
