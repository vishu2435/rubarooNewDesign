<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use App\Models\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->has(
        //     Post::factory()
        //     ->count(3)
        //     ->state(function(array $attributes,User $user){
        //         return ['user_id'=>$user->id];
        //     })
        // )->create();
            Post::factory(30)->create();
    }
}
