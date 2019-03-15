<?php

use Illuminate\Database\Seeder;

use App\PostTag;

class PostTagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PostTag::create(['post_id'=>14,'tag_id'=>2]);

        PostTag::create(['post_id'=>14,'tag_id'=>3]);

        PostTag::create(['post_id'=>14,'tag_id'=>4]);

        PostTag::create(['post_id'=>12,'tag_id'=>1]);

        PostTag::create(['post_id'=>8,'tag_id'=>2]);

        PostTag::create(['post_id'=>5,'tag_id'=>2]);
    }
}
