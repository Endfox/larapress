<?php

use Illuminate\Support\Str as Str;
use Illuminate\Database\Seeder;
use App\Post;



class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Post::create([
        	'title' => 'Hola mundo',
        	'content' => '<h1>Bienvenido a tu primer post en tu blog<br>Hecho
        					con larapress y materializecss</h1>',
        	'slug_url' => Str::slug('hola mundo'),
        	'admin_id' => 1
        ]);

        Post::create([
            'title' => 'Hola mundo 2',
            'content' => '<h1>Este el el segundo post de prueba.</h1>',
            'slug_url' => Str::slug('hola mundo 2'),
            'admin_id' => 1
        ]);
    }
}
