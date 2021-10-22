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
    

        // User::create([
        //     'name' => 'Diva Amwal',
        //     'email' => '193040126.diva@mail.unpas.ac.id',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Doddy Ferdiansyah',
        //     'email' => 'doddy@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque porro minus nesciunt non labore nostrum, quis reprehenderit quisquam quae, expedita sapiente! Asperiores fugit soluta similique voluptatum, quibusdam, itaque sunt animi eligendi id, voluptatem perferendis! Similique repellat, dolor, expedita magni molestiae perferendis reprehenderit ea eum dolorem laboriosam doloremque autem esse iste animi magnam quasi voluptas ad ducimus tempore eligendi id? Sunt fugit tempore hic nulla veritatis repudiandae aperiam accusantium quidem. Iure voluptates, blanditiis fugiat impedit, nam natus deserunt dolore suscipit nobis odio voluptatem ipsam id, vitae optio eos accusamus alias quo illo! Expedita dicta saepe optio eligendi temporibus quia? Fugiat, placeat.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque porro minus nesciunt non labore nostrum, quis reprehenderit quisquam quae, expedita sapiente! Asperiores fugit soluta similique voluptatum, quibusdam, itaque sunt animi eligendi id, voluptatem perferendis! Similique repellat, dolor, expedita magni molestiae perferendis reprehenderit ea eum dolorem laboriosam doloremque autem esse iste animi magnam quasi voluptas ad ducimus tempore eligendi id? Sunt fugit tempore hic nulla veritatis repudiandae aperiam accusantium quidem. Iure voluptates, blanditiis fugiat impedit, nam natus deserunt dolore suscipit nobis odio voluptatem ipsam id, vitae optio eos accusamus alias quo illo! Expedita dicta saepe optio eligendi temporibus quia? Fugiat, placeat.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque porro minus nesciunt non labore nostrum, quis reprehenderit quisquam quae, expedita sapiente! Asperiores fugit soluta similique voluptatum, quibusdam, itaque sunt animi eligendi id, voluptatem perferendis! Similique repellat, dolor, expedita magni molestiae perferendis reprehenderit ea eum dolorem laboriosam doloremque autem esse iste animi magnam quasi voluptas ad ducimus tempore eligendi id? Sunt fugit tempore hic nulla veritatis repudiandae aperiam accusantium quidem. Iure voluptates, blanditiis fugiat impedit, nam natus deserunt dolore suscipit nobis odio voluptatem ipsam id, vitae optio eos accusamus alias quo illo! Expedita dicta saepe optio eligendi temporibus quia? Fugiat, placeat.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque porro minus nesciunt non labore nostrum, quis reprehenderit quisquam quae, expedita sapiente! Asperiores fugit soluta similique voluptatum, quibusdam, itaque sunt animi eligendi id, voluptatem perferendis! Similique repellat, dolor, expedita magni molestiae perferendis reprehenderit ea eum dolorem laboriosam doloremque autem esse iste animi magnam quasi voluptas ad ducimus tempore eligendi id? Sunt fugit tempore hic nulla veritatis repudiandae aperiam accusantium quidem. Iure voluptates, blanditiis fugiat impedit, nam natus deserunt dolore suscipit nobis odio voluptatem ipsam id, vitae optio eos accusamus alias quo illo! Expedita dicta saepe optio eligendi temporibus quia? Fugiat, placeat.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
