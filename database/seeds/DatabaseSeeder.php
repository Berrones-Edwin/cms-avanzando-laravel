<?php

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
        // $this->call(UsersTableSeeder::class);

        App\User::create([
            'name' => 'Edwin Berrones',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password')
        ]);

        factory(App\User::class,7)->create();

        App\Page::create([
            'parent_id' => null,
            'title' =>'Quienes Somos',
            'slug' => 'quienes-somos',
            'body' => 'Contenido de quienes somos'
        ]);
        App\Page::create([
            'parent_id' => 1,
            'title' =>'Mision',
            'slug' => 'mision',
            'body' => 'Contenido de mision'
        ]);
        App\Page::create([
            'parent_id' => 1,
            'title' =>'Visión',
            'slug' => 'vision',
            'body' => 'Contenido de visión'
        ]);
    }
}
