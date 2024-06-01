@extends('partials.Scleton')

@section('container-fluid')
<section class="bg-dark">
    <div class="flex flex-col items-center justify-center p-10 mx-auto md:h-[20%] lg:py-0">
        <a href="#" class="flex items-center mb-6 text-3xl font-bold text-white">
            <img class="w-10 h-10 mr-2" src="/img/miniproject.png" alt="logo">
            AAMANDEMY SOSMED
        </a>
        <div class="w-full bg-slate-800 rounded-lg shadow md:mt-0 sm:max-w-md xl:p-0">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <h1 class="text-xl font-bold leading-tight tracking-tight text-white md:text-2xl">
                    Buat Akun Baru
                </h1>
                <form class="space-y-4 md:space-y-6" method="POST" action="{{ route('register') }}">
                    @csrf
                    <div>
                        <label for="name" class="block mb-2 text-sm font-semibold text-white">Nama Anda</label>
                        <input 
                            id="name" 
                            type="text" 
                            name="name" 
                            :value="old('name')" 
                            required 
                            autofocus 
                            autocomplete="name" 
                            class="bg-gray-800 border border-gray-700 text-white sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-3 placeholder-gray-400" 
                            placeholder="Masukkan nama Anda">
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>
                    <div>
                        <label for="email" class="block mb-2 text-sm font-semibold text-white">Email Anda</label>
                        <input id="email" type="email" name="email" :value="old('email')" required autocomplete="email" class="bg-gray-800 border border-gray-700 text-white sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-3 placeholder-gray-400" placeholder="name@perusahaan.com">
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-semibold text-white">Password</label>
                        <input id="password" type="password" name="password" required autocomplete="new-password" class="bg-gray-800 border border-gray-700 text-white sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-3 placeholder-gray-400" placeholder="••••••••">
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
                    <div>
                        <label for="password_confirmation" class="block mb-2 text-sm font-semibold text-white">Konfirmasi Password</label>
                        <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" class="bg-gray-800 border border-gray-700 text-white sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-3 placeholder-gray-400" placeholder="••••••••">
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>
                    
                    <button type="submit" class="w-full bg-blue-600 text-white hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Buat Akun</button>

                    <p class="text-sm font-light text-white">
                        Sudah memiliki akun? <a href="/login" class="font-semibold text-primary-500 hover:underline">Masuk di sini</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</section>  
@endsection
