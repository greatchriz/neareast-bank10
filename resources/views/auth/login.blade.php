{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" />

                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />

                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-primary-button class="ml-3">
                    {{ __('Log in') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}

<x-guest-layout>
    <div class="sign-in-from">
        <h1 class="mb-0 text-center">Sign in</h1>
        <p class="text-center text-dark">Enter your email address and password to access your Dashboard.</p>
        <x-auth-session-status class="mb-4" :status="session('status')" />
        <form method="POST" action="{{ route('login') }}" class="mt-4">
            @csrf
            <div class="form-group">
                <x-input-label for="email" :value="__('Email')" />

                <x-text-input id="email" class="form-control mb-0" type="email" name="email" :value="old('email')"
                    required autofocus />

                <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger" />

                {{-- <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control mb-0" id="exampleInputEmail1" placeholder="Enter email"> --}}
            </div>
            <div class="form-group">

                <x-input-label for="password" :value="__('Password')" />

                <a href="/forgot-password" class="float-right text-white">Forgot password?</a>

                <x-text-input id="password" class="form-control mb-0" type="password" name="password" required
                    autocomplete="current-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />

                {{-- <label for="exampleInputPassword1">Password</label>
                                <a href="#" class="float-right">Forgot password?</a>
                                <input type="password" class="form-control mb-0" id="exampleInputPassword1" placeholder="Password"> --}}
            </div>
            <div class="d-inline-block w-100">
                <div class="custom-control custom-checkbox d-inline-block mt-2 pt-1">
                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                    <label class="custom-control-label" for="customCheck1">Remember Me</label>
                </div>
            </div>

            <div class="sign-info text-center">
                <button type="submit" class="btn btn-light d-inline-block mb-2">Sign in</button>
                <span class="text-dark d-block line-height-2">Don't have an account? <a href="/register"
                        class="text-white">Sign up</a></span>
            </div>

        </form>
    </div>
</x-guest-layout>
