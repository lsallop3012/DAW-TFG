<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Carpeta extends Model
{ 
    /**
     * Atributos de la tabla Carpeta.
     *
     * @var list<string>
     */
    protected $fillable = [
        'contenido',
        'user_id',
        'imagen_id',
    ];

    public function usuario()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function imagen()
    {
        return $this->hasMany(Imagen::class, 'imagen_id');
    }
}
