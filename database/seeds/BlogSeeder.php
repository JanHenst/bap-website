<?php

use Illuminate\Database\Seeder;
use App\Blogs;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker\Factory::create();

      for($i = 0; $i < 5; $i++) {

          $blog = new Blogs();
          $blog->title = $faker->text(20);
          $blog->description = $faker->realText(1000, 2);
          $blog->pub_date = $faker->dateTimeBetween('-10 years', '+5 years');

          $blog->save();

      }
    }
}
