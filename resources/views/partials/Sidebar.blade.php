<aside id="default-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen overflow-y-auto transition-transform -translate-x-full sm:translate-x-0 bg-black text-white">
   <div class="px-3 py-4 overflow-y-auto h-[800px]">
       <ul class="space-y-2 font-medium">
           @guest
           <li class="flex flex-row items-center gap-5 mb-5">
               <div class="w-10 h-10 rounded-full bg-gray-500"></div>
               <a class="font-semibold text-xl" href="/login">Masuk</a>
           </li>
           @endguest
           @auth
           <li class="mb-5">
               <div class="flex flex-row items-center gap-5">
                   <div class="w-10 h-10 rounded-full bg-gray-500"></div>
                   <div class="text-white font-semibold">
                       {{ auth()->user()->name }}
                       <p class="text-xs text-blue-600">
                           <a href="/login" class="border border-blue-600 px-1">Edit profil</a>
                       </p>
                   </div>
               </div>
           </li>
           @endauth
           <li>
               <a href="/home" class="flex items-center p-2 text-gray-900 rounded-lg group">
                   <i class="bi bi-house-fill text-xl text-white"></i>
                   <span class="flex-1 ms-3 whitespace-nowrap text-white">Beranda</span>
               </a>
           </li>
           <li>
               <a href="/search" class="flex items-center p-2 rounded-lg text-white group">
                   <i class="bi bi-search text-xl text-white"></i>
                   <span class="flex-1 ms-3 whitespace-nowrap">Telusuri</span>
               </a>
           </li>
           @auth
           <li>
               <a href="/notif" class="flex items-center p-2 rounded-lg text-white group">
                   <i class="bi bi-bell-fill text-xl text-white"></i>
                   <span class="flex-1 ms-3 whitespace-nowrap">Notifikasi</span>
               </a>
           </li>
           @endauth
           @auth
           <li>
               <a href="/add-post" class="flex items-center p-2 rounded-lg text-white group">
                   <i class="bi bi-plus-circle text-xl text-white"></i>
                   <span class="flex-1 ms-3 whitespace-nowrap">Tambah Postingan</span>
               </a>
           </li>
           @endauth
           @auth
           <li>
               <a href="/bookmark" class="flex items-center p-2 rounded-lg text-white group">
                   <i class="bi bi-bookmark-fill text-xl text-white"></i>
                   <span class="flex-1 ms-3 whitespace-nowrap">Tandai</span>
               </a>
           </li>
           @endauth
           @auth
           <li>
               <a href="/logout" class="flex items-center p-2 rounded-lg text-white group">
                   <i class="bi bi-box-arrow-in-left text-xl text-white"></i>
                   <span class="flex-1 ms-3 whitespace-nowrap">Keluar</span>
               </a>
           </li>
           @endauth
           @guest
           <li>
               <a href="/login" class="flex items-center p-2 rounded-lg text-white group">
                   <i class="bi bi-box-arrow-in-right text-xl text-white"></i>
                   <span class="flex-1 ms-3 whitespace-nowrap">Masuk</span>
               </a>
           </li>
           @endguest
       </ul>
   </div>
</aside>
