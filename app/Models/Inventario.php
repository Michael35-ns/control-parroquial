<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_espacio',
        'nombre',
        'descripcion',
        'cantidad',
        'id_estado',
        'fecha_registro'
    ];
}
