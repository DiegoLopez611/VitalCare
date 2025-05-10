<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    use HasFactory;

    const CEDULA = 'cedula';
    const FECHA_NACIMIENTO = 'fecha_nacimiento';
    const EMAIL = 'email';
    const PRIMER_NOMBRE = 'primer_nombre';
    const SEGUNDO_NOMBRE = 'segundo_nombre';
    const PRIMER_APELLIDO = 'primer_apellido';
    const SEGUNDO_APELLIDO = 'segundo_apellido';
    const DIRECCION = 'direccion';
    const LICENCIA_MEDICA = 'licencia_medica';
    const FECHA_INICIO = 'fecha_inicio';
    const ESTADO = 'estado';

    protected $fillable = [
        self::CEDULA,
        self::FECHA_NACIMIENTO,
        self::EMAIL,
        self::PRIMER_NOMBRE,
        self::SEGUNDO_NOMBRE,
        self::PRIMER_APELLIDO,
        self::SEGUNDO_APELLIDO,
        self::DIRECCION,
        self::LICENCIA_MEDICA,
        self::FECHA_INICIO,
        self::ESTADO
    ];
}
