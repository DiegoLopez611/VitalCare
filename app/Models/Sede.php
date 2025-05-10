<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sede extends Model
{
    use HasFactory;

    const NOMBRE = 'nombre';
    const TELEFONO = 'telefono';
    const DIRECCION = 'direccion';
    const ESTADO = 'estado';

    protected $fillable = [
        self::NOMBRE,
        self::TELEFONO,
        self::DIRECCION,
        self::ESTADO 
    ];
}
