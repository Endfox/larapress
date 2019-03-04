<?php

use Illuminate\Database\Seeder;
use App\Comment;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Comment::create([
        	'user_id' =>1,
        	'post_id' =>13,
        	'content' => 'nice post'
        ]);

        Comment::create([
        	'user_id' =>1,
        	'post_id' =>14,
        	'content' => 'nice post'
        ]);

        Comment::create([
        	'user_id' =>1,
        	'post_id' =>12,
        	'content' => 'nice post'
        ]);

        Comment::create([
        	'user_id' =>1,
        	'post_id' =>11,
        	'content' => 'nice post'
        ]);

    }
}
