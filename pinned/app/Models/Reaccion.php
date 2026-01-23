<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reaccion extends Model
{
    /**
     * Atributos de la tabla Reacción.
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
        return $this->belongsTo(Imagen::class, 'imagen_id');
    }
}
