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
        	'content' => '<p>Bienvenido a tu primer post en tu blog<br>Hecho
        					con larapress y materializecss</p>',
        	'slug_url' => Str::slug('hola mundo'),
        	'admin_id' => 1
        ]);

        Post::create([
            'title' => 'Hola mundo 2',
            'content' => '<p>Este el el segundo post de prueba.</p>',
            'slug_url' => Str::slug('hola mundo 2'),
            'admin_id' => 1
        ]);

        Post::create([
            'title' => 'Hola mundo 3',
            'content' => '<p>Este el el segundo post de prueba.</p>',
            'slug_url' => Str::slug('hola mundo 3'),
            'admin_id' => 1
        ]);

        Post::create([
            'title' => 'Hola mundo 4',
            'content' => '<p>Este el el segundo post de prueba.</p>',
            'slug_url' => Str::slug('hola mundo 4'),
            'admin_id' => 1
        ]);

        Post::create([
            'title' => 'Hola mundo 5',
            'content' => '<p>Este el el segundo post de prueba.</p>',
            'slug_url' => Str::slug('hola mundo 5'),
            'admin_id' => 1
        ]);

        Post::create([
            'title' => 'Hola mundo 6',
            'content' => '<p>Este el el segundo post de prueba.</p>',
            'slug_url' => Str::slug('hola mundo 6'),
            'admin_id' => 1
        ]);

        Post::create([
            'title' => 'Hola mundo 7',
            'content' => '<p>Este el el segundo post de prueba.</p>',
            'slug_url' => Str::slug('hola mundo 7'),
            'admin_id' => 1
        ]);

        Post::create([
            'title' => 'Hola mundo 8',
            'content' => '<p>Este el el segundo post de prueba.</p>',
            'slug_url' => Str::slug('hola mundo 8'),
            'admin_id' => 1
        ]);
        Post::create([
            'title' => 'Hola mundo 9',
            'content' => '<p>Este el el segundo post de prueba.</p>',
            'slug_url' => Str::slug('hola mundo 9'),
            'admin_id' => 1
        ]);

        Post::create([
            'title' => 'Hola mundo 10',
            'content' => '<p>Este el el segundo post de prueba.</p>',
            'slug_url' => Str::slug('hola mundo 10'),
            'admin_id' => 1
        ]);

        Post::create([
            'title' => 'Hola mundo 11',
            'content' => '<p>Este el el segundo post de prueba.</p>',
            'slug_url' => Str::slug('hola mundo 11'),
            'admin_id' => 1
        ]);

        Post::create([
            'title' => 'Hola mundo 12',
            'content' => '<p>Este el el segundo post de prueba.</p>',
            'slug_url' => Str::slug('hola mundo 12'),
            'admin_id' => 1
        ]);

        Post::create([
            'title' => 'Hola mundo 13',
            'content' => '<p>Este el el segundo post de prueba.</p>',
            'slug_url' => Str::slug('hola mundo 13'),
            'admin_id' => 1
        ]);

        Post::create([
            'title' => 'Hola mundo 14',
            'content' => '<p>Este el el segundo post de prueba.</p>',
            'slug_url' => Str::slug('hola mundo 14'),
            'admin_id' => 1
        ]);

        Post::create([
            'title' => 'Hola mundo 15',
            'content' => '<p>Este el el segundo post de prueba.</p>',
            'slug_url' => Str::slug('hola mundo 15'),
            'admin_id' => 1
        ]);

        Post::create([
            'title' => 'Hola mundo 16',
            'content' => '<p>Este el el segundo post de prueba.</p>',
            'slug_url' => Str::slug('hola mundo 16'),
            'admin_id' => 1
        ]);
    }
}
