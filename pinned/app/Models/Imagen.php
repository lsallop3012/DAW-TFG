<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
    /**
     * Atributos de la tabla Imagen.
     *
     * @var list<string>
     */
    protected $fillable = [
        'url',
        'nombre',
        'descripcion',
        'fecha_subida',
        'user_id',
    ];

    public function usuario()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function comentarios()
    {
        return $this->hasMany(Comentario::class, 'imagen_id');
    }

    public function reacciones()
    {
        return $this->hasMany(Reaccion::class, 'imagen_id');
    }
}
