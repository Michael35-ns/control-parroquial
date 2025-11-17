<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Espacio extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_comunidad',
        'id_tipo_espacio',
        'nombre',
    ];

    public function comunidad()
    {
        return $this->belongsTo(Comunidad::class, 'comunidad_id');
    }
    public function tipoEspacio()
    {
        return $this->belongsTo(TipoEspacio::class, 'tipo_espacio_id');
    }


}
