<?php

use App\Http\Controllers\ProfileController;
use App\Models\Follows;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    $currentUserId = Auth::id();
    $followedUserIds = Follows::where('follower_id', $currentUserId)->pluck('followed_id')->toArray();
    $users = User::whereNotIn('id', $followedUserIds)
                 ->where('id', '!=', $currentUserId)
                 ->take(3)
                 ->get();
    $posts = Post::latest()->get();
    
    return view('welcome', [
        'posts' => $posts,
        'recommend' => $users
    ]);
});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
require __DIR__.'/proto.php';
