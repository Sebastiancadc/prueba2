<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $table = 'posts';

    protected $fillable = [
            'categorias_id',
            'titulo',
            'contenido',
    ];
    
    public function categoria()
    {
        return $this->hasOne(Categorias::class);
    }

    public function comentarios()
    {
        return $this->belongsToMany(Comentarios::class);
    }
}
