<?php

use App\Libro;
use Illuminate\Database\Seeder;

class LibroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Libro::create([
            'nombre' => 'Padre rico, Padre pobre',
            'autor' => 'Rober R. Kiyosaki',
            'genero' => 'Finansas',
            'editorial' => 'De bolsillo',
            'descripcion' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deserunt expedita tempora quidem provident, distinctio ducimus omnis voluptate veritatis placeat dolores minus corrupti, architecto totam accusamus quam dicta, ea dignissimos voluptatem.',
        ]);

        Libro::create([
            'nombre' => 'El principito',
            'autor' => 'Antoine de saint-Exupery',
            'genero' => 'Novela',
            'editorial' => 'Reynal & Hitchcock',
            'descripcion' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deserunt expedita tempora quidem provident, distinctio ducimus omnis voluptate veritatis placeat dolores minus corrupti, architecto totam accusamus quam dicta, ea dignissimos voluptatem.',

        ]);
    }
}
