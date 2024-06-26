<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'user';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'nik',
        'id_unitkerja',
        'nama',
        'role',
        'jk',
        'email',
        'notelp',
        'urlProfile',
    ];

    protected $hidden = [
        'remember_token',
    ];

    public function unitKerja()
    {
        return $this->belongsTo(UnitKerja::class, 'id_unitkerja');
    }
}