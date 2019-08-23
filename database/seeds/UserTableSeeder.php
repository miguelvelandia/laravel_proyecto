<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = factory(App\User::class, 3)
           ->create()
           ->each(function ($user) {
                $user->blogs()->save(factory(App\Models\Blog::class)->make());
            });
    }
}
