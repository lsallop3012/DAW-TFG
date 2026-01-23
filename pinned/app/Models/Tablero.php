<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tablero extends Model
{
    /**
     * Atributos de la tabla Tablero.
     *
     * @var list<string>
     */
    protected $fillable = [
        'nombre',
        'descripcion',
        'fecha_creacion',
        'user_id',
    ];

    public function usuario()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function imagenes()
    {
        return $this->hasMany(Imagen::class, 'tablero_id');
    }
}
