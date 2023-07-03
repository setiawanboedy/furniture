@extends('layouts.auth')
@section('title', 'Daftar - Nisa Mebel')
@section('content')

    <div class="flex flex-col overflow-y-auto md:flex-row">
        <div class="h-32 md:h-auto md:w-1/2">
            <img aria-hidden="true" class="object-cover w-full h-full dark:hidden"
                src="{{ url('frontend/img/login-office.jpeg') }}" alt="Office" />

        </div>
        <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
            <div class="w-full">
                <form action="{{route('register')}}" method="post">
                    @csrf
                    <h1 class="mb-4 text-xl font-semibold text-gray-700 dark:text-gray-200">
                        Buat Akun
                    </h1>
                    <label class="block text-sm" for="name">
                        <span class="text-gray-700 dark:text-gray-400">Nama</span>
                        <input type="text" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus
                            class="form-control @error('name')
is-invalid
                            @enderror block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                            placeholder="Jane Doe" />
                            @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </label>
                    <label class="block text-sm" for="email">
                        <span class="text-gray-700 dark:text-gray-400">Email</span>
                        <input type="email" name="email" value="{{old('email')}}" required autocomplete="email"
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
                        <input type="password" name="password" value="{{old('password')}}" required autocomplete="new-password"
                            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                            placeholder="***************"  />
                            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </label>
                    <label class="block mt-4 text-sm" for="password-confirm">
                        <span class="text-gray-700 dark:text-gray-400">
                            Konfirmasi password
                        </span>
                        <input type="password" name="password_confirmation" required autocomplete="new-password"
                            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                            placeholder="***************" />
                    </label>

                    <!-- You should use a button here, as the anchor is only used for the example  -->
                    <button
                    style="background-color: #333333"
                    type="submit" class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 border border-transparent rounded-lg hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                        >
                        Buat akun
                    </button>
                </form>

                <hr class="my-8" />

                <p class="mt-4">
                    <a style="color: #333333" class="text-sm font-medium text-green-500 dark:text-purple-400 hover:underline" href="{{route('login')}}">
                        Sudah punya akun? Masuk
                    </a>
                </p>
            </div>
        </div>
    </div>
@endsection
