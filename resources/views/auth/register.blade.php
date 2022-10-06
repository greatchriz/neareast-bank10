{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Name')" />

                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />

                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />

                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />

                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-primary-button class="ml-4">
                    {{ __('Register') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}

<x-guest-layout>
    <div class="sign-in-from">
        <h1 class="mb-0 text-center">Sign Up</h1>
        <p class="text-center text-dark">Enter your email address and password to access admin
            panel.</p>
        <form method="POST" action="{{ route('register') }}" class="mt-4" enctype="multipart/form-data">
            @csrf

            <div class="form-group">

                <x-input-label for="name" :value="__('Name')" />

                <x-text-input id="name" class="form-control mb-0" type="text" name="name" :value="old('name')" required autofocus />

                <x-input-error :messages="$errors->get('name')" class="mt-2 text-danger" />

                {{-- <label for="exampleInputEmail1">Your Full Name</label>
                <input type="email" class="form-control mb-0" id="exampleInputEmail1"
                    placeholder="Your Full Name"> --}}
            </div>
            <div class="form-group">

                <x-input-label for="email" :value="__('Email')" />

                <x-text-input id="email" class="form-control mb-0" type="email" name="email" :value="old('email')" required />

                <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger" />

                {{-- <label for="exampleInputEmail2">Email address</label>
                <input type="email" class="form-control mb-0" id="exampleInputEmail2"
                    placeholder="Enter email"> --}}
            </div>
            <div class="form-group">

                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="form-control mb-0"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="text-danger mt-2" />

                {{-- <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control mb-0" id="exampleInputPassword1"
                    placeholder="Password"> --}}
            </div>

            <div class="form-group">

                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-text-input id="password_confirmation" class="form-control mb-0"
                                type="password"
                                name="password_confirmation" required />

                <x-input-error :messages="$errors->get('password_confirmation')" class="text-danger mt-2" />

                {{-- <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control mb-0" id="exampleInputPassword1"
                    placeholder="Password"> --}}
            </div>

            <div class="form-group">

                {{-- <div class="form-group">
                    <label for="exampleFormControlFile1">Example file input</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                    </div> --}}

                <x-input-label for="profilePicture" :value="__('Profile Picture')" />

                <x-text-input id="profilePicture" class="form-control-file mb-0" type="file" name="profilePicture" :value="old('profilePicture')" required accept="image/*"/>

                <x-input-error :messages="$errors->get('profilePicture')" class="mt-2 text-danger" />

                {{-- <label for="exampleInputEmail2">Email address</label>
                <input type="email" class="form-control mb-0" id="exampleInputEmail2"
                    placeholder="Enter email"> --}}
            </div>

            {{-- <div class="mt-4">
                <label for="imageUpload" class="font-semibold block">Image Upload</label>
                <input type="file" name="imageUpload" class="mt-2" accept="image/*">
            </div> --}}





            <div class="d-inline-block w-100">
                <div class="custom-control custom-checkbox d-inline-block mt-2 pt-1">
                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                    <label class="custom-control-label" for="customCheck1">I accept <a
                            href="/terms" class="text-white">Terms and Conditions</a></label>
                </div>
            </div>
            <div class="sign-info text-center">
                <button type="submit" class="btn btn-light d-inline-block mb-2">Sign
                    Up</button>
                <span class="text-dark d-block line-height-2">Already Have Account ? <a
                        href="/login" class="text-white">Log In</a></span>
            </div>
        </form>
    </div>
</x-guest-layout>
