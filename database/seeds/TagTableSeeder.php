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
        $t = new Tag;
        $t->tag = "Im a tag";
        $t->save();
        $t->posts()->attach(1);

    }
}
