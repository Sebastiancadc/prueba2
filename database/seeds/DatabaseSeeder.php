<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Categorias;
use App\Comentarios;
use App\Posts;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $Categorias = Categorias::orderByRaw('rand()')->get();
        foreach ($Categorias as $Categoria) {
        }
        $Posts = Posts::orderByRaw('rand()')->get();
        foreach ($Posts as $Post) {
        }
        factory(Categorias::class,5)->create();

        factory(Posts::class)->create([
            'categorias_id' => $Categoria->id
        ]);
      
        factory(Comentarios::class,6)->create([
            'posts_id' => $Post->id
        ]);
    }
}
