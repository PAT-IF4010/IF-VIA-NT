<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

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
            'name' => 'Renal Sugiana',
            'username' => 'renalsugiana',
            'email' => 'renalsugiana@gmail.com',
            'password' => bcrypt('12345'),
        ]);

        User::factory(3)->create();

        // User::create([
        //     'name' => 'Renaru Sugi',
        //     'email' => 'renarusugi@gmail.com',
        //     'password' => bcrypt('12345'),
        // ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'category_id' => 1,
        //     'user_id' => 10,
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam ut sit nobis laudantium, repudiandae
        //     ea maxime totam tempora unde aut',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam ut sit nobis laudantium, repudiandae
        //     ea maxime totam tempora unde aut, dolores voluptatem consectetur, vel voluptas at autem? Minima similique pariatur quia asperiores
        //     error animi deserunt eveniet eligendi accusamus, repudiandae, placeat ipsa officiis eaque, nulla tempora ea aliquid beatae
        //     dolor illo obcaecati ex? Voluptatibus cum perspiciatis repudiandae vel nisi quasi.</p>
        //     <p>Dolorum et voluptate expedita voluptatibus sit amet perferendis pariatur, modi suscipit saepe temporibus eveniet illum magni odit, minus, rem sed
        //     quae praesentium. Nihil magni veniam, ex ipsam quos repudiandae provident porro, corporis laudantium quas maiores quaerat
        //     voluptatem illo aliquam adipisci libero reprehenderit eos accusamus nulla est. Suscipit placeat voluptates impedit
        //     ut quasi accusantium molestias laudantium delectus quae facilis vel earum aliquam est vitae voluptate odio architecto
        //     alias a, eos quod ratione! Omnis, repellendus enim minus pariatur sapiente quam nostrum doloribus modi alias, earum illo
        //     ut accusamus. Facere suscipit error laudantium temporibus.</p>
        //     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam ut sit nobis laudantium, repudiandae ea maxime
        //     totam tempora unde aut, dolores voluptatem consectetur, vel voluptas at autem? Minima similique pariatur quia asperiores
        //     error animi deserunt eveniet eligendi accusamus, repudiandae, placeat ipsa officiis eaque, nulla tempora ea aliquid beatae
        //     dolor illo obcaecati ex? Voluptatibus cum perspiciatis repudiandae vel nisi quasi.</p>',
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam ut sit nobis laudantium, repudiandae
        //     ea maxime totam tempora unde aut',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam ut sit nobis laudantium, repudiandae
        //     ea maxime totam tempora unde aut, dolores voluptatem consectetur, vel voluptas at autem? Minima similique pariatur quia asperiores
        //     error animi deserunt eveniet eligendi accusamus, repudiandae, placeat ipsa officiis eaque, nulla tempora ea aliquid beatae
        //     dolor illo obcaecati ex? Voluptatibus cum perspiciatis repudiandae vel nisi quasi.</p>
        //     <p>Dolorum et voluptate expedita voluptatibus sit amet perferendis pariatur, modi suscipit saepe temporibus eveniet illum magni odit, minus, rem sed
        //     quae praesentium. Nihil magni veniam, ex ipsam quos repudiandae provident porro, corporis laudantium quas maiores quaerat
        //     voluptatem illo aliquam adipisci libero reprehenderit eos accusamus nulla est. Suscipit placeat voluptates impedit
        //     ut quasi accusantium molestias laudantium delectus quae facilis vel earum aliquam est vitae voluptate odio architecto
        //     alias a, eos quod ratione! Omnis, repellendus enim minus pariatur sapiente quam nostrum doloribus modi alias, earum illo
        //     ut accusamus. Facere suscipit error laudantium temporibus.</p>
        //     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam ut sit nobis laudantium, repudiandae ea maxime
        //     totam tempora unde aut, dolores voluptatem consectetur, vel voluptas at autem? Minima similique pariatur quia asperiores
        //     error animi deserunt eveniet eligendi accusamus, repudiandae, placeat ipsa officiis eaque, nulla tempora ea aliquid beatae
        //     dolor illo obcaecati ex? Voluptatibus cum perspiciatis repudiandae vel nisi quasi.</p>',
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam ut sit nobis laudantium, repudiandae
        //     ea maxime totam tempora unde aut',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam ut sit nobis laudantium, repudiandae
        //     ea maxime totam tempora unde aut, dolores voluptatem consectetur, vel voluptas at autem? Minima similique pariatur quia asperiores
        //     error animi deserunt eveniet eligendi accusamus, repudiandae, placeat ipsa officiis eaque, nulla tempora ea aliquid beatae
        //     dolor illo obcaecati ex? Voluptatibus cum perspiciatis repudiandae vel nisi quasi.</p>
        //     <p>Dolorum et voluptate expedita voluptatibus sit amet perferendis pariatur, modi suscipit saepe temporibus eveniet illum magni odit, minus, rem sed
        //     quae praesentium. Nihil magni veniam, ex ipsam quos repudiandae provident porro, corporis laudantium quas maiores quaerat
        //     voluptatem illo aliquam adipisci libero reprehenderit eos accusamus nulla est. Suscipit placeat voluptates impedit
        //     ut quasi accusantium molestias laudantium delectus quae facilis vel earum aliquam est vitae voluptate odio architecto
        //     alias a, eos quod ratione! Omnis, repellendus enim minus pariatur sapiente quam nostrum doloribus modi alias, earum illo
        //     ut accusamus. Facere suscipit error laudantium temporibus.</p>
        //     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam ut sit nobis laudantium, repudiandae ea maxime
        //     totam tempora unde aut, dolores voluptatem consectetur, vel voluptas at autem? Minima similique pariatur quia asperiores
        //     error animi deserunt eveniet eligendi accusamus, repudiandae, placeat ipsa officiis eaque, nulla tempora ea aliquid beatae
        //     dolor illo obcaecati ex? Voluptatibus cum perspiciatis repudiandae vel nisi quasi.</p>',
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'category_id' => 2,
        //     'user_id' => 2,
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam ut sit nobis laudantium, repudiandae
        //     ea maxime totam tempora unde aut',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam ut sit nobis laudantium, repudiandae
        //     ea maxime totam tempora unde aut, dolores voluptatem consectetur, vel voluptas at autem? Minima similique pariatur quia asperiores
        //     error animi deserunt eveniet eligendi accusamus, repudiandae, placeat ipsa officiis eaque, nulla tempora ea aliquid beatae
        //     dolor illo obcaecati ex? Voluptatibus cum perspiciatis repudiandae vel nisi quasi.</p>
        //     <p>Dolorum et voluptate expedita voluptatibus sit amet perferendis pariatur, modi suscipit saepe temporibus eveniet illum magni odit, minus, rem sed
        //     quae praesentium. Nihil magni veniam, ex ipsam quos repudiandae provident porro, corporis laudantium quas maiores quaerat
        //     voluptatem illo aliquam adipisci libero reprehenderit eos accusamus nulla est. Suscipit placeat voluptates impedit
        //     ut quasi accusantium molestias laudantium delectus quae facilis vel earum aliquam est vitae voluptate odio architecto
        //     alias a, eos quod ratione! Omnis, repellendus enim minus pariatur sapiente quam nostrum doloribus modi alias, earum illo
        //     ut accusamus. Facere suscipit error laudantium temporibus.</p>
        //     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam ut sit nobis laudantium, repudiandae ea maxime
        //     totam tempora unde aut, dolores voluptatem consectetur, vel voluptas at autem? Minima similique pariatur quia asperiores
        //     error animi deserunt eveniet eligendi accusamus, repudiandae, placeat ipsa officiis eaque, nulla tempora ea aliquid beatae
        //     dolor illo obcaecati ex? Voluptatibus cum perspiciatis repudiandae vel nisi quasi.</p>',
        // ]);

        // Post::create([
        //     'title' => 'Judul Kelima',
        //     'category_id' => 3,
        //     'user_id' => 2,
        //     'slug' => 'judul-kelima',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam ut sit nobis laudantium, repudiandae
        //     ea maxime totam tempora unde aut',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam ut sit nobis laudantium, repudiandae
        //     ea maxime totam tempora unde aut, dolores voluptatem consectetur, vel voluptas at autem? Minima similique pariatur quia asperiores
        //     error animi deserunt eveniet eligendi accusamus, repudiandae, placeat ipsa officiis eaque, nulla tempora ea aliquid beatae
        //     dolor illo obcaecati ex? Voluptatibus cum perspiciatis repudiandae vel nisi quasi.</p>
        //     <p>Dolorum et voluptate expedita voluptatibus sit amet perferendis pariatur, modi suscipit saepe temporibus eveniet illum magni odit, minus, rem sed
        //     quae praesentium. Nihil magni veniam, ex ipsam quos repudiandae provident porro, corporis laudantium quas maiores quaerat
        //     voluptatem illo aliquam adipisci libero reprehenderit eos accusamus nulla est. Suscipit placeat voluptates impedit
        //     ut quasi accusantium molestias laudantium delectus quae facilis vel earum aliquam est vitae voluptate odio architecto
        //     alias a, eos quod ratione! Omnis, repellendus enim minus pariatur sapiente quam nostrum doloribus modi alias, earum illo
        //     ut accusamus. Facere suscipit error laudantium temporibus.</p>
        //     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam ut sit nobis laudantium, repudiandae ea maxime
        //     totam tempora unde aut, dolores voluptatem consectetur, vel voluptas at autem? Minima similique pariatur quia asperiores
        //     error animi deserunt eveniet eligendi accusamus, repudiandae, placeat ipsa officiis eaque, nulla tempora ea aliquid beatae
        //     dolor illo obcaecati ex? Voluptatibus cum perspiciatis repudiandae vel nisi quasi.</p>',
        // ]);
    }
}
