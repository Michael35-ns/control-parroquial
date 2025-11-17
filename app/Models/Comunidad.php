<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comunidad extends Model
{
    use HasFactory;

    protected $table = 'comunidad';

    protected $fillable = [
        'id_parroquia',
        'nombre',
        'direccion'
    ];

    public function users()
    {
        return $this->hasMany(User::class, 'comunidad_id');
    }

    public function espacios()
    {
        return $this->hasMany(Espacio::class, 'comunidad_id');
    }
}
