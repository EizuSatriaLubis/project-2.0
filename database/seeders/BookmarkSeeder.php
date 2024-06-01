<?php

namespace Database\Seeders;

use App\Models\Bookmark;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmarkSeeder extends Seeder
{
  
    public function run(): void
    {
        
         $users = User::inRandomOrder()->limit(5)->get();

  
         $posts = Post::inRandomOrder()->limit(5)->get();
 
    
         foreach ($users as $user) {
         
             $post = $posts->random();

             Bookmark::create([
                 'user_id' => $user->id,
                 'post_id' => $post->id,
             ]);
         }
    }
}
