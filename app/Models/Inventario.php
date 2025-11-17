<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    use HasFactory;

    protected $fillable = [
        'espacio_id',
        'nombre',
        'descripcion',
        'cantidad',
        'estado_item_id',
        'fecha_registro'
    ];
    protected $casts = [
        'fecha_registro' => 'datetime',
    ];
    public function espacio()
    {
        return $this->belongsTo(Espacio::class, 'espacio_id');
    }
    public function estadoItem()
    {
        return $this->belongsTo(EstadoItem::class, 'estado_item_id');
    }
}
