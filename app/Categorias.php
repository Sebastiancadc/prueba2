<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    protected $table = 'categorias';

    protected $fillable = [
        'name'
    ];

    public function Posts()
    {
        return $this->hasMany(Posts::class);
    }
}
