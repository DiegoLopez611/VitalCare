<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicamento extends Model
{
    use HasFactory;

    const NOMBRE = 'nombre';
    const CONCENTRACION ='concentracion';
    const NOMBRE_LABORATORIO = 'nombre_laboratorio';
    const ESTADO = 'estado';

    protected $fillable = [
        self::NOMBRE,
        self::CONCENTRACION,
        self::NOMBRE_LABORATORIO,
        self::ESTADO
    ];
}