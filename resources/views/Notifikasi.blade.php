
@extends('partials.Scleton')
@extends('partials.Sidebar')
<main class="sm:ml-64 w-full">
    <nav class="w-full h-22 shadow-lg flex items-center z-30 p-5">
      <div class="ml-[30%]">
    <img class="w-7 h-7 mx-auto mb-3" src="/img/miniproject.png" alt="logo">
    <div class="flex flex-row w-[200px] justify-between">
      <a class="font-semibold text-white" href="#">For you</a>
      <a class="font-semibold text-white" href="#">Following</a>
    </div>
      </div>
    </nav>
    <div class="flex flex-row">
      <div class="overscroll-contain h-fit w-1/2 max-h-screen overflow-y-auto p-7">
    <form class="flex items-center max-w-sm mx-auto">   
        <label for="simple-search" class="sr-only">Search</label>
        <div class="relative w-full">
            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5v10M3 5a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm0 10a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm12 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm0 0V6a3 3 0 0 0-3-3H9m1.5-2-2 2 2 2"/>
                </svg>
            </div>
            <input type="text" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5" placeholder="Search branch name..." required />
        </div>
        <button type="submit" class="p-2.5 ms-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
            </svg>
            <span class="sr-only">Search</span>
        </button>
    </form>
        <ul>
          @foreach($notifications as $notification)
             
                 
                 @if($notification->type == 'follow')
                 <li class="w-full p-3 border border-1 border-white rounded-md">
                  <div class="flex flec-col gap-4 justify-between">
                <p class="mt-2 text-sm"> {{ json_decode($notification->data)->follower_name }} followed you.</p>
                    <p class="p-2 font-bold text-red-600">Hapus</p>
                    </div>
                  </li>
                 
                   
                  @endif
             
          @endforeach
      </ul>
      </div>
      <div class="w-[40%] p-10">
        <div class="mb-5">
          <h1 class="font-bold">Rekomendasi untuk Diikuti</h1>
          <p class="text-xs"></p>
        </div>
        <div>
          <div class="w-[70%] h-fit rounded-md flex justify-between items-center space-x-4 p-4 border-2 border-white shadow-md mb-3">
           <div class="flex flex-row gap-3">
            <img class="w-10 h-10 rounded-full" src="https://github.com/EizuSatriaLubis.png alt="Profile">
            <div class="flex flex-col items-center justify-between">
              <p>Eizu Satria Lubis</p>
              <p class="text-xs">Temukan dan ikuti mereka untuk koneksi baru! </p>
           </div>

            </div>
            <p class="text-red-400">Follow</p>
          </div>
          <div class="w-[70%] h-fit rounded-md flex justify-between items-center space-x-4 p-4 border-2 border-white shadow-md mb-3">
            <div class="flex flex-row gap-3">
             <img class="w-10 h-10 rounded-full" src="https://github.com/EizuSatriaLubis.png" alt="Profile">
             <div class="flex flex-col items-center justify-between">
               <p>Eizu Satria Lubis</p>
               <p class="text-xs">Temukan dan ikuti mereka untuk koneksi baru! </p>
            </div>
 
             </div>
             <p class="text-red-400">Follow</p>
           </div>
        </div>
        <hr class="border-t-2 w-[70%] border-gray-300 my-4">
        <p class="text-wrap w-[70%]">Ayo follow mereka dan temukan koneksi baru! Perluas jaringanmu, dapatkan inspirasi, dan bangun hubungan yang bermanfaat. Jangan lewatkan kesempatan untuk terhubung dengan mereka yang memiliki minat yang sama.</p>
      </div>
    </div>
  </main>