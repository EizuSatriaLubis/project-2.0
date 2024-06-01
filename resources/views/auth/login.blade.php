@extends('partials.Scleton')
@section('container-fluid')
<section class="bg-dark">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
        <a href="#" class="flex items-center mb-6 text-3xl font-extrabold text-white">
            <img class="w-10 h-10 mr-2" src="/img/miniproject.png" alt="logo">
            AMANDEMY SOSMED
        </a>
        <div class="w-full bg-gray-900 rounded-lg shadow-lg md:mt-0 sm:max-w-md xl:p-0">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <h1 class="text-xl font-bold leading-tight tracking-tight text-white md:text-2xl">
                    Masuk ke akun Anda
                </h1>
                <form class="space-y-4 md:space-y-6" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div>
                        <label for="email" class="block mb-2 text-sm font-semibold text-white">Email Anda</label>
                        <input type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username" id="email" class="bg-gray-800 border border-gray-700 text-white sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-3 placeholder-gray-400" placeholder="nama@perusahaan.com">
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                    
                    <div>
                        <label for="password" class="block mb-2 text-sm font-semibold text-white">Kata Sandi</label>
                        <input id="password"
                               type="password"
                               name="password"
                               required autocomplete="current-password"
                               class="bg-gray-800 border border-gray-700 text-white sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-3 placeholder-gray-400" 
                               placeholder="••••••••">
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
                    
                    <button type="submit" class="w-full text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-primary-500 font-semibold rounded-lg text-sm px-6 py-3 text-center transition duration-300 ease-in-out transform hover:scale-105">Masuk</button>
                    <p class="text-sm font-light text-white">
                        Belum memiliki akun? <a href="/register" class="font-semibold text-primary-500 hover:underline">Daftar</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
