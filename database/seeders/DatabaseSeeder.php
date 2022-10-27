<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Article;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123'),
        ]);

        User::factory(10)->create();

        Category::create([
            'name' => 'Web Novel',
            'user_id' => 1,
        ]);

        Category::factory(5)->create();

        Article::create([
            'title' => 'Nageki no Bourei wa Intai Shitai',
            'content' => "Existing all over the world sleeps treasure tools with special powers.Riches, Prestige, and finally Power.Chasing glory, an era where Treasure Hunters rampage through Treasure Shrines without regard for danger.Together with his childhood friends, Cry shares the dream of becoming a hunter. On their first expedition he notices that out of the six of them, he is the only one without any talent.However, that was only the beginning of their adventures.",
            'user_id' => 1,
            'category_id' => 1,
        ]);

        Article::factory(20)->create();








    }
}
