<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Candidate;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Party;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();


        User::create([
            'name' => 'Abdul Mannan Saipi',
            'username' => 'ben',
            'email' => 'abdul.saipi@student.president.ac.id',
            'password' => bcrypt('12345')
        ]);

        // Party::create([
        //     'name' => 'Hati Nurani Rakyat',
        // ]);
        // Party::create([
        //     'name' => 'Golongan Karya',
        // ]);
        // Party::create([
        //     'name' => 'Gerindra',
        // ]);

        Candidate::factory(20)->create();
        Party::factory(5)->create();










        // User::create([
        //     'name' => 'dodi',
        //     'email' => 'dodi@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);
        // User::factory(5)->create();
        // Category::create([
        //     'name' => 'Web Programming',
        //     'slug' => 'web-programming'
        // ]);
        // Category::create([
        //     'name' => 'Personal',
        //     'slug' => 'personal'
        // ]);
        // Category::create([
        //     'name' => 'Programming',
        //     'slug' => 'programming'
        // ]);
        // Post::factory(10)->create();

        // Post::create([
        //     'title' => 'TitleOne',
        //     'slug' => 'titleone',
        //     'exerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ab quaerat doloribus deserunt perferendis at harum a',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ab quaerat doloribus deserunt perferendis at harum aliquam suscipit blanditiis commodiLorem, ipsum dolor sit amet consectetur adipisicing elit. Ab quaerat doloribus deserunt perferendis at harum aliquam suscipit blanditiis commodiLorem, ipsum dolor sit amet consectetur adipisicing elit. Ab quaerat doloribus deserunt perferendis at harum aliquam suscipit blanditiis commodiLorem, ipsum dolor sit amet consectetur adipisicing elit. Ab quaerat doloribus deserunt perferendis at harum aliquam suscipit blanditiis commodi sit amet consectetur adipisicing elit. Ab quaerat doloribus deserunt perferendis at harum aliquam suscipit blanditiis commodiLorem, ipsum dolor sit amet consectetur adipisicing elit. Ab quaerat doloribus deserunt perferendis at harum aliquam suscipit blanditiis commod',
        //     'category_id' => 2,
        //     'user_id' => 1,
        // ]);

        // Post::create([
        //     'title' => 'TitleTwo',
        //     'slug' => 'titletwo',
        //     'exerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ab quaerat doloribus deserunt perferendis at harum aliquam suscipit blanditiis commodi',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ab quaerat doloribus deserunt perferendis at harum aliquam suscipit blanditiis commodiLorem, ipsum dolor sit amet consectetur adipisicing elit. Ab quaerat doloribus deserunt perferendis at harum aliquam suscipit blanditiis commodiLorem, ipsum dolor sit amet consectetur adipisicing elit. Ab quaerat doloribus deserunt perferendis at harum aliquam suscipit blanditiis commodiLorem, ipsum dolor sit amet consectetur adipisicing elit. Ab quaerat doloribus deserunt perferendis at harum aliquam suscipit blanditiis commodi',
        //     'category_id' => 1,
        //     'user_id' => 1,
        // ]);

        // Post::create([
        //     'title' => 'TitleTwo',
        //     'slug' => 'titletwo',
        //     'exerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ab quaerat doloribus deserunt perferendis at harum aliquam suscipit blanditiis commodi',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ab quaerat doloribus deserunt perferendis at harum aliquam suscipit blanditiis commodiLorem, ipsum dolor sit amet consectetur adipisicing elit. Ab quaerat doloribus deserunt perferendis at harum aliquam suscipit blanditiis commodiLorem, ipsum dolor sit amet consectetur adipisicing elit. Ab quaerat doloribus deserunt perferendis at harum aliquam suscipit blanditiis commodiLorem, ipsum dolor sit amet consectetur adipisicing elit. Ab quaerat doloribus deserunt perferendis at harum aliquam suscipit blanditiis commodi',
        //     'category_id' => 2,
        //     'user_id' => 2,
        // ]);
    }
}
