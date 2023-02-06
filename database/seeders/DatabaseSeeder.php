<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // Product::create([
        //     'slug' => 'nirvana',
        //     'title' => 'Nirvana',
        //     'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing   elit. Eum quae assumenda exercitationem ducimus architecto ullam? Beatae obcaecati commodi perferendis ratione facere provident quaerat sapiente rem.',
        //     'stock' => 100,
        //     'category_id' => 1,
        //     'price' => 8000000,
        // ]);

        // Product::create([
        //     'slug' => 'gun-n-rosess',
        //     'title' => 'Gun n Rosess',
        //     'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing   elit. Eum quae assumenda exercitationem ducimus architecto ullam? Beatae obcaecati commodi perferendis ratione facere provident quaerat sapiente rem.',
        //     'stock' => 120,
        //     'category_id' => 2,
        //     'price' => 7000000,
        // ]);

        // Product::create([
        //     'slug' => 'noah',
        //     'title' => 'Noah',
        //     'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing   elit. Eum quae assumenda exercitationem ducimus architecto ullam? Beatae obcaecati commodi perferendis ratione facere provident quaerat sapiente rem.',
        //     'stock' => 10,
        //     'category_id' => 3,
        //     'price' => 1000000,
        // ]);

        Product::factory(40)->create();

        Category::create([
            'name' => 'metal',
        ]);

        Category::create([
            'name' => 'dubstep',
        ]);

        Category::create([
            'name' => 'band',
        ]);

        User::created([
            'name' => 'member',
            'email' => 'member@member.com',
            'password' => bcrypt('12345678'),
            'address' => 'Cengkareng, Jakarta, Indonesia',
            'phone' => 12345678901,
        ]);
    }
}