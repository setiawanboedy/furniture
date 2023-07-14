@extends('layouts.auth')
@section('title','Masuk - Kekalik Mebel')
@section('content')
<div class="flex flex-col overflow-y-auto md:flex-row">
    <div class="h-32 md:h-auto md:w-1/2">
        <img aria-hidden="true" class="object-cover w-full h-full dark:hidden" src="{{url('frontend/img/login-office.jpeg')}}"
            alt="Office" />

    </div>
    <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
        <div class="w-full">
            <form action="{{ route('login') }}" method="post">
                @csrf
                <h1 class="mb-4 text-xl font-semibold text-gray-700 dark:text-gray-200">
                    Masuk
                </h1>
                <label class="block text-sm" for="email">
                    <span class="text-gray-700 dark:text-gray-400">Email</span>
                    <input type="email" name="email" value="{{ old('email') }}" required autocomplete="email"
                        autofocus
                        class="form-control @error('email')
is-invalid
                        @enderror block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                        placeholder="Jane Doe" />
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </label>
                <label class="block mt-4 text-sm" for="password">
                    <span class="text-gray-700 dark:text-gray-400">Password</span>
                    <input type="password" name="password" autocomplete="current-password" required
                        class="form-control @error('password')
is-invalid
                        @enderror block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                        placeholder="***************" type="password" />

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </label>

                <!-- You should use a button here, as the anchor is only used for the example  -->
                <button type="submit"
                style="background-color: #333333"
                    class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 border border-transparent rounded-lg hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                    Masuk
                </button>


            </form>
            <hr class="my-8" />

                @if (Route::has('password.request'))
                    <p class="mt-4">
                        <a style="color: #333333" class="text-sm font-medium hover:underline"
                            href="{{ route('password.request') }}">
                            Lupa kata sandi?
                        </a>
                    </p>
                @endif
                <p class="mt-1">
                    <a style="color: #333333" class="text-sm font-medium text-green-500 hover:underline"
                        href="{{ route('register') }}">
                        Buat akun
                    </a>
                </p>
        </div>
    </div>
</div>
@endsection
