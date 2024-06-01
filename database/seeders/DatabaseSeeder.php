<?php

namespace Database\Seeders;

use App\Models\Follows;
use App\Models\Like;
use Illuminate\Support\Str;
use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        // Membuat 10 pengguna secara acak
        \App\Models\User::factory(10)->create();

        // Membuat 10 postingan dengan detail acak
        for ($i = 0; $i < 10; $i++) {
            Post::create([
                'judul' => 'Postingan ' . ($i + 1), // Judul yang lebih detail
                'kode_post' => Str::random(10),
                'image' => 'https://source.unsplash.com/random', // URL gambar acak dari Unsplash
                'deskripsi' => $this->getRandomDescription(), // Deskripsi acak
                'user_id' => rand(1, 10) // Pastikan ada user dengan id 1 sampai 10
            ]);
        }

        // Membuat 3 like secara manual
        Like::create([
            'user_id' => 1,
            'post_id' => 1,
        ]);

        Like::create([
            'user_id' => 2,
            'post_id' => 2,
        ]);

        Like::create([
            'user_id' => 3,
            'post_id' => 3,
        ]);

        // Membuat relasi follow secara manual
        $follows = [
            ['follower_id' => 1, 'followed_id' => 2],
            ['follower_id' => 1, 'followed_id' => 3],
            ['follower_id' => 2, 'followed_id' => 3],
            ['follower_id' => 2, 'followed_id' => 4],
            ['follower_id' => 3, 'followed_id' => 4],
            ['follower_id' => 3, 'followed_id' => 5],
            ['follower_id' => 4, 'followed_id' => 5],
            ['follower_id' => 5, 'followed_id' => 1],
        ];

        Follows::insert($follows);

        // Memanggil seeder BookmarkSeeder dan CommentSeeder
        $this->call([
            BookmarkSeeder::class,
            CommentSeeder::class,
        ]);
    }

    /**
     * Mengembalikan deskripsi acak.
     *
     * @return string
     */
    private function getRandomDescription(): string
    {
        $descriptions = [
            'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
            'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
            'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
        ];

        return $descriptions[array_rand($descriptions)];
    }
}

