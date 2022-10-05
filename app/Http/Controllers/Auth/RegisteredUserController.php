<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Intervention\Image\Facades\Image;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $user = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'imageUpload' =>['file', 'image', 'max:20000'],
        ]);

        if ($request->imageUpload) {
            $requestImage = $request->file('imageUpload');

            $image = Image::make($requestImage);

            $image->resize(600, null, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });

            $path = config('filesystems.disks.public.root').'/'.$requestImage->hashName();
            $image->save($path);

            // $fields = array_merge($user, ['imageUpload' => $requestImage->hashName()]);

            // $path = $request->file('imageUpload')->store('images', 'public');
            // $fields = array_merge($fields, ['imageUpload' => $path]);
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'imageUpload' => $requestImage->hashName(),
        ]);
        // $user = User::create($user);



        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
