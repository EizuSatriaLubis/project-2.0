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
    <div class="flex flex-row justify-center">
        <form method="POST" action="/posts" class="w-[40%] max-h-screen overflow-y-auto p-7" enctype="multipart/form-data">
            @csrf
            <div class="mb-5">
                <label for="judul" class="block mb-2 text-sm font-medium text-white">Judul</label>
                <input type="text" id="judul" name="judul" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Judul post ...." required />
            </div>
            <div class="mb-5">
                <label for="deskripsi" class="block mb-2 text-sm font-medium text-white">Deskripsi</label>
                <input type="text" id="deskripsi" name="deskripsi" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Deskripsi post ...." required />
            </div>
            <div class="mb-5">
                <label for="dropzone-file" class="block mb-2 text-sm font-medium text-white">Unggah Gambar</label>
                <div class="flex items-center justify-center w-full">
                    <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2 border-dashed rounded-lg cursor-pointer bg-gray-100">
                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                            <svg class="w-12 h-12 mb-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                            </svg>
                            <p class="mb-2 text-sm text-gray-500">Klik untuk mengunggah atau seret dan lepas</p>
                            <p class="text-xs text-gray-500">Format: SVG, PNG, JPG, atau GIF (MAKS. 800x400px)</p>
                        </div>
                        <input name="image" id="dropzone-file" type="file" class="hidden" />
                    </label>
                </div>
            </div>
            <button type="submit" class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 mt-5">Kirim</button>
        </form>
        <div class="w-[40%] p-10">
          <div class="mb-5">
              <h1 class="font-bold text-white">Rekomendasi untuk Diikuti</h1>
              <p class="text-xs text-white">Orang-orang yang mungkin cocok denganmu</p>
          </div>
          <div>        
          </div>
      </div>
  </div>
</main>