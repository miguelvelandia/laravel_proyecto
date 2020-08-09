<?php

use Illuminate\Database\Seeder;
use App\Models\Blog;
use App\Models\DetalleBlog;

class DetalleBlogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $blogs=Blog::all();
        foreach ($blogs as $blog) {
         $blog->detalle_blogs()->save(factory(App\Models\DetalleBlog::class)->make());
        }
        
    }
}
