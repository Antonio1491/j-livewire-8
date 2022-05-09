<?php

namespace Database\Seeders;

//Hacemos referencia a la entidad (clase que representa a la tabla en el sistema)
use App\Models\User;
use App\Models\Category;
use App\Models\Curse;
use App\Models\Post;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //usar está entidad para crear datos falsos
        User::factory(5)->create();
        Category::factory(3)->create();
        Curse::factory(10)->create();
        Post::factory(90)->create();
    }
}
