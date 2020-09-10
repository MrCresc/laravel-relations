<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Tag;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      $arrayTags = [
        'arrabbiato',
        'vivace',
        'calmo',
        'cupo',
        'drammatico',
        'funky',
        'felice',
        'motivante',
        'romantico',
        'triste',
      ]

      foreach ($arrayTags as $array) {
        $new_tag = new Tag();
        $new_tag->tag = $array;
        $new_tag->save();
      }
    }
}
