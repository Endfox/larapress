<?php

use Illuminate\Database\Seeder;

use App\Admin;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
        	'name'=> 'ruben',
        	'last_name' => 'gallegos',
        	'email' => 'rubengallegosh@gmail.com',
        	'password' => bcrypt('123123')
        ]);
    }
}
