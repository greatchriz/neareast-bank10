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

<!doctype html>
<html lang="en">

<!-- Mirrored from templates.iqonic.design/findash/html-dark/sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Apr 2022 18:23:52 GMT -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>FinDash - Responsive Bootstrap 4 Admin Dashboard Template</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="/dash/images/favicon.ico" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/dash/css/bootstrap.min.css">
    <!-- Typography CSS -->
    <link rel="stylesheet" href="/dash/css/typography.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="/dash/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="/dash/css/responsive.css">
</head>

<body>
    <!-- loader Start -->
    <div id="loading">
        <div id="loading-center">
        </div>
    </div>
    <!-- loader END -->
    <!-- Sign in Start -->
    <section class="sign-in-page">
        <div id="container-inside">
            <div class="cube"></div>
            <div class="cube"></div>
            <div class="cube"></div>
            <div class="cube"></div>
            <div class="cube"></div>
        </div>
        <div class="container p-0">
            <div class="row no-gutters height-self-center">
                <div class="col-sm-12 align-self-center bg-primary rounded">
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

                                <x-input-label for="file" :value="__('File')" />

                                <x-text-input id="email" class="form-control-file mb-0" type="file" name="imageUpload" :value="old('file')" required accept="image/*"/>

                                <x-input-error :messages="$errors->get('file')" class="mt-2 text-danger" />

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
                                            href="#">Terms and Conditions</a></label>
                                </div>
                            </div>
                            <div class="sign-info text-center">
                                <button type="submit" class="btn btn-primary d-block w-100 mb-2">Sign
                                    Up</button>
                                <span class="text-dark d-inline-block line-height-2">Already Have Account ? <a
                                        href="#">Log In</a></span>
                            </div>
                        </form>
                    </div>
                    <!-- <div class="row m-0">
                        <div class="col-md-5 bg-white sign-in-page-data">

                        </div>
                        <div class="col-md-7 text-center sign-in-page-image">
                            <div class="sign-in-detail text-white">
                                <a class="sign-in-logo mb-5" href="#"><img src="/dash/images/logo-full.png" class="img-fluid"
                                        alt="logo"></a>
                                <div class="owl-carousel" data-autoplay="true" data-loop="true" data-nav="false"
                                    data-dots="true" data-items="1" data-items-laptop="1" data-items-tab="1"
                                    data-items-mobile="1" data-items-mobile-sm="1" data-margin="0">
                                    <div class="item">
                                        <img src="/dash/images/login/1.png" class="img-fluid mb-4" alt="logo">
                                        <h4 class="mb-1 text-white">Manage your orders</h4>
                                        <p>It is a long established fact that a reader will be distracted by the
                                            readable content.</p>
                                    </div>
                                    <div class="item">
                                        <img src="/dash/images/login/1.png" class="img-fluid mb-4" alt="logo">
                                        <h4 class="mb-1 text-white">Manage your orders</h4>
                                        <p>It is a long established fact that a reader will be distracted by the
                                            readable content.</p>
                                    </div>
                                    <div class="item">
                                        <img src="/dash/images/login/1.png" class="img-fluid mb-4" alt="logo">
                                        <h4 class="mb-1 text-white">Manage your orders</h4>
                                        <p>It is a long established fact that a reader will be distracted by the
                                            readable content.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </section>
    <!-- Sign in END -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="/dash/js/jquery.min.js"></script>
    <script src="/dash/js/popper.min.js"></script>
    <script src="/dash/js/bootstrap.min.js"></script>
    <!-- Appear JavaScript -->
    <script src="/dash/js/jquery.appear.js"></script>
    <!-- Countdown JavaScript -->
    <script src="/dash/js/countdown.min.js"></script>
    <!-- Counterup JavaScript -->
    <script src="/dash/js/waypoints.min.js"></script>
    <script src="/dash/js/jquery.counterup.min.js"></script>
    <!-- Wow JavaScript -->
    <script src="/dash/js/wow.min.js"></script>
    <!-- lottie JavaScript -->
    <script src="/dash/js/lottie.js"></script>
    <!-- Apexcharts JavaScript -->
    <script src="/dash/js/apexcharts.js"></script>
    <!-- Slick JavaScript -->
    <script src="/dash/js/slick.min.js"></script>
    <!-- Select2 JavaScript -->
    <script src="/dash/js/select2.min.js"></script>
    <!-- Owl Carousel JavaScript -->
    <script src="/dash/js/owl.carousel.min.js"></script>
    <!-- Magnific Popup JavaScript -->
    <script src="/dash/js/jquery.magnific-popup.min.js"></script>
    <!-- Smooth Scrollbar JavaScript -->
    <script src="/dash/js/smooth-scrollbar.js"></script>
    <!-- Style Customizer -->
    <script src="/dash/js/style-customizer.js"></script>
    <!-- Chart Custom JavaScript -->
    <script src="/dash/js/chart-custom.js"></script>
    <!-- Custom JavaScript -->
    <script src="/dash/js/custom.js"></script>
</body>

<!-- Mirrored from templates.iqonic.design/findash/html-dark/sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Apr 2022 18:23:52 GMT -->

</html>
