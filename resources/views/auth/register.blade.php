@extends('layouts.master')

@section('title', 'REGISTER')

@section('content')
<div class="max-w-[1240px] mx-auto text-center">
            <div><h1>Register New User</h1></div>

            {{-- Form --}}
            <div class="py-10 shadow-2xl shadow-black rounded-lg">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="pb-10">
                        <label for="name" class="font-Montserrat_Regular text-xl"><i class="fa-solid fa-user"></i> {{ __('Name') }}</label>

                        <div class="px-4 md:px-0 py-2">
                            <input id="name" type="text" class="py-2 px-2 w-full md:w-1/2 lg:w-1/3 rounded-lg @error('name') is-invalid border-red-600 outline-none @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus>

                            <div>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong class="text-red-600">{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    
                    <div class="pb-10">
                        <label for="email" class="font-Montserrat_Regular text-xl"><i class="fa-solid fa-envelope"></i> {{ __('Email Address') }}</label>

                        <div class="px-4 md:px-0 py-2">
                            <input id="email" type="email" class="py-2 px-2 w-full md:w-1/2 lg:w-1/3 rounded-lg @error('email') is-invalid border-red-600 outline-none @enderror" name="email" value="{{ old('email') }}" autocomplete="email">

                            <div>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong class="text-red-600">{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="pb-10">
                        <label for="password" class="font-Montserrat_Regular text-xl"><i class="fa-solid fa-lock"></i> {{ __('Password') }}</label>

                        <div class="px-4 md:px-0 py-2">
                            <input id="password" type="password" class="py-2 px-2 w-full md:w-1/2 lg:w-1/3 rounded-lg @error('password') is-invalid border-red-600 outline-none @enderror" name="password" autocomplete="current-password">

                            <div>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong class="text-red-600">{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="pb-10">
                        <label for="password-confirm" class="font-Montserrat_Regular text-xl"><i class="fa-solid fa-lock"></i> {{ __('Confirm Password') }}</label>

                        <div class="px-4 md:px-0 py-2">
                            <input id="password-confirm" type="password" class="py-2 px-2 w-full md:w-1/2 lg:w-1/3 rounded-lg" name="password_confirmation" autocomplete="new-password">
                        </div>
                    </div>

                    <div class="pb-10">
                        <div class="pt-10 px-4 md:px-0">
                            <button type="submit" class="bg-indigo-700 w-full md:w-1/2 lg:w-1/3 py-4 text-white font-Montserrat_Bold rounded-lg hover:bg-indigo-600">
                                {{ __('REGISTER') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
</div>
@endsection
