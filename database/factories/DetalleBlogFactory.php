<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\DetalleBlog;
use Faker\Generator as Faker;

$factory->define(App\Models\DetalleBlog::class, function (Faker $faker) {
      return [
            'content' => $faker->paragraph,
            'blog_id' => function () {
                return factory(App\Models\Blog::class)->create()->id;
            }
          ];
});
