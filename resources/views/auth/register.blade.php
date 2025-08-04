<x-app-layout>
    <div class="bg-gray-50 py-20 md:py-24">
       <div class="container mx-auto px-6 max-w-lg">
           <div class="bg-white p-8 md:p-12 rounded-xl shadow-2xl" data-aos="fade-up">
               <div class="text-center">
                   <h1 class="font-spartan text-4xl font-black text-mindwell-blue uppercase">Buat Akun Baru</h1>
                   <p class="text-gray-500 mt-2">Bergabunglah dengan komunitas MindWell.</p>
               </div>

               <form method="POST" action="{{ route('register') }}" class="mt-8">
                   @csrf

                   <!-- Name -->
                   <div>
                       <label for="name" class="block font-medium text-sm text-gray-700">Nama Lengkap</label>
                       <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                       <x-input-error :messages="$errors->get('name')" class="mt-2" />
                   </div>

                   <!-- Email Address -->
                   <div class="mt-4">
                       <label for="email" class="block font-medium text-sm text-gray-700">Email</label>
                       <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                       <x-input-error :messages="$errors->get('email')" class="mt-2" />
                   </div>

                   <!-- Password -->
                   <div class="mt-4">
                       <label for="password" class="block font-medium text-sm text-gray-700">Password</label>
                       <x-text-input id="password" class="block mt-1 w-full"
                                       type="password"
                                       name="password"
                                       required autocomplete="new-password" />
                       <x-input-error :messages="$errors->get('password')" class="mt-2" />
                   </div>

                   <!-- Confirm Password -->
                   <div class="mt-4">
                       <label for="password_confirmation" class="block font-medium text-sm text-gray-700">Konfirmasi Password</label>
                       <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                       type="password"
                                       name="password_confirmation" required autocomplete="new-password" />
                       <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                   </div>

                   <div class="mt-8">
                       <button type="submit" class="w-full text-center bg-mindwell-blue text-white font-bold py-3 px-8 rounded-full hover:bg-opacity-90 transition duration-300">
                           {{ __('Register') }}
                       </button>
                   </div>

                   <div class="text-center mt-6">
                       <p class="text-sm text-gray-600">
                           Sudah punya akun?
                           <a href="{{ route('login') }}" class="font-bold text-mindwell-orange hover:underline">Login di sini</a>
                       </p>
                   </div>
               </form>
           </div>
       </div>
   </div>
</x-app-layout>
