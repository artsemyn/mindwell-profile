<x-app-layout>
    <div class="bg-gray-50 py-20 md:py-24">
        <div class="container mx-auto px-6 max-w-lg">
            <div class="bg-white p-8 md:p-12 rounded-xl shadow-2xl" data-aos="fade-up">
                <div class="text-center">
                    <h1 class="font-spartan text-4xl font-black text-mindwell-blue uppercase">Login</h1>
                    <p class="text-gray-500 mt-2">Selamat datang kembali!</p>
                </div>

                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <form method="POST" action="{{ route('login') }}" class="mt-8">
                    @csrf

                    <!-- Email Address -->
                    <div>
                        <label for="email" class="block font-medium text-sm text-gray-700">Email</label>
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <label for="password" class="block font-medium text-sm text-gray-700">Password</label>
                        <x-text-input id="password" class="block mt-1 w-full"
                                        type="password"
                                        name="password"
                                        required autocomplete="current-password" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Remember Me -->
                    <div class="block mt-4 flex justify-between items-center">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-mindwell-orange shadow-sm focus:ring-mindwell-orange" name="remember">
                            <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label>

                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif
                    </div>

                    <div class="mt-8">
                        <button type="submit" class="w-full text-center bg-mindwell-blue text-white font-bold py-3 px-8 rounded-full hover:bg-opacity-90 transition duration-300">
                            {{ __('Log in') }}
                        </button>
                    </div>
                    
                    <div class="text-center mt-6">
                        <p class="text-sm text-gray-600">
                            Belum punya akun?
                            <a href="{{ route('register') }}" class="font-bold text-mindwell-orange hover:underline">Daftar di sini</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>