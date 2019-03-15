<?php

use Illuminate\Database\Seeder;

use App\Tag;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::create(['name'=>'ejemplo']);

        Tag::create(['name'=>'laravel']);

        Tag::create(['name'=>'acuatico']);

        Tag::create(['name'=>'mar']);

        Tag::create(['name'=>'pokemon']);

        Tag::create(['name'=>'refrescos']);

        Tag::create(['name'=>'nutriologia']);
    }
}
