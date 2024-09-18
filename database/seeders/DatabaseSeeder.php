<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Tweet;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Rivan Fadlani',
            'email' => 'rivan@example.com',
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'Raja Terakhir',
            'email' => 'rajaterakhir@example.com',
            'password' => bcrypt('12345')
        ]);

        Category::create([
            'name' => 'Daily Life',
            'slug' => 'daily-life'
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Tweet::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore dicta aut quasi dignissimos? Architecto blanditiis accusantium mollitia expedita neque sunt illo nostrum nam nemo.',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore dicta aut quasi dignissimos? Architecto blanditiis accusantium mollitia expedita neque sunt illo nostrum nam nemo. Doloremque cum dolorum dicta ab expedita earum doloribus maxime veniam possimus. Expedita voluptates dolorum, perspiciatis unde iure illo perferendis, maxime, a et cupiditate omnis tempora suscipit.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias tenetur eum incidunt tempora pariatur. Facilis harum, saepe quod doloribus impedit natus asperiores porro sint commodi molestiae praesentium quia sunt incidunt labore voluptate unde perferendis dignissimos eaque alias recusandae consequatur sit facere? Cupiditate enim delectus suscipit aspernatur, cum nostrum maxime voluptates.</p><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellendus unde assumenda vel amet debitis fuga quos obcaecati vero ad repudiandae.</p>',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Tweet::create([
            'title' => 'Judul Ke Dua',
            'slug' => 'judul-ke-dua',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore dicta aut quasi dignissimos? Architecto blanditiis accusantium mollitia expedita neque sunt illo nostrum nam nemo.',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore dicta aut quasi dignissimos? Architecto blanditiis accusantium mollitia expedita neque sunt illo nostrum nam nemo. Doloremque cum dolorum dicta ab expedita earum doloribus maxime veniam possimus. Expedita voluptates dolorum, perspiciatis unde iure illo perferendis, maxime, a et cupiditate omnis tempora suscipit.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias tenetur eum incidunt tempora pariatur. Facilis harum, saepe quod doloribus impedit natus asperiores porro sint commodi molestiae praesentium quia sunt incidunt labore voluptate unde perferendis dignissimos eaque alias recusandae consequatur sit facere? Cupiditate enim delectus suscipit aspernatur, cum nostrum maxime voluptates.</p><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellendus unde assumenda vel amet debitis fuga quos obcaecati vero ad repudiandae.</p>',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Tweet::create([
            'title' => 'Judul Ke Tiga',
            'slug' => 'judul-ke-tiga',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore dicta aut quasi dignissimos? Architecto blanditiis accusantium mollitia expedita neque sunt illo nostrum nam nemo.',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore dicta aut quasi dignissimos? Architecto blanditiis accusantium mollitia expedita neque sunt illo nostrum nam nemo. Doloremque cum dolorum dicta ab expedita earum doloribus maxime veniam possimus. Expedita voluptates dolorum, perspiciatis unde iure illo perferendis, maxime, a et cupiditate omnis tempora suscipit.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias tenetur eum incidunt tempora pariatur. Facilis harum, saepe quod doloribus impedit natus asperiores porro sint commodi molestiae praesentium quia sunt incidunt labore voluptate unde perferendis dignissimos eaque alias recusandae consequatur sit facere? Cupiditate enim delectus suscipit aspernatur, cum nostrum maxime voluptates.</p><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellendus unde assumenda vel amet debitis fuga quos obcaecati vero ad repudiandae.</p>',
            'category_id' => 2,
            'user_id' => 1
        ]);

        Tweet::create([
            'title' => 'Judul Ke Empat',
            'slug' => 'judul-ke-empat',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore dicta aut quasi dignissimos? Architecto blanditiis accusantium mollitia expedita neque sunt illo nostrum nam nemo.',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore dicta aut quasi dignissimos? Architecto blanditiis accusantium mollitia expedita neque sunt illo nostrum nam nemo. Doloremque cum dolorum dicta ab expedita earum doloribus maxime veniam possimus. Expedita voluptates dolorum, perspiciatis unde iure illo perferendis, maxime, a et cupiditate omnis tempora suscipit.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias tenetur eum incidunt tempora pariatur. Facilis harum, saepe quod doloribus impedit natus asperiores porro sint commodi molestiae praesentium quia sunt incidunt labore voluptate unde perferendis dignissimos eaque alias recusandae consequatur sit facere? Cupiditate enim delectus suscipit aspernatur, cum nostrum maxime voluptates.</p><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellendus unde assumenda vel amet debitis fuga quos obcaecati vero ad repudiandae.</p>',
            'category_id' => 2,
            'user_id' => 2
        ]);
    }
}
