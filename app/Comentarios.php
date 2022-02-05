<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentarios extends Model
{
    protected $table = 'comentarios';

    protected $fillable = [
            'post_id',
            'contenido',
    ];
    
    public function categoria()
    {
        return $this->hasMany(Posts::class);
    }
}
