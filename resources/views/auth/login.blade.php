@extends('layouts.master')

@section('title', 'LOGIN')

@section('content')
<div class="max-w-[1240px] mx-auto text-center">
            <div><h1>Login</h1></div>

                {{-- Form --}}
                <div class="py-10 shadow-2xl shadow-black rounded-lg">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        
                        <div class="pb-10">
                            <label for="email" class="font-Montserrat_Regular text-xl"><i class="fa-solid fa-envelope"></i> {{ __('Email Address') }}</label>

                            <div class="px-4 md:px-0 py-2">
                                <input id="email" type="email" class="py-2 px-2 w-full md:w-1/2 lg:w-1/3 rounded-lg @error('email') is-invalid border-red-600 outline-none @enderror" name="email" value="{{ old('email') }}" autocomplete="email" autofocus>

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
                            <div class="">
                                <div class="">
                                    <input class="accent-indigo-700" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="font-Montserrat_Regular text-xl" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                            <div class="pb-10">
                                @if (Route::has('password.request'))
                                    <a class="font-Montserrat_Regular text-xl hover:underline hover:text-indigo-700" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password ?') }}
                                    </a>
                                @endif

                                <div class="pt-10 px-4 md:px-0">
                                    <button type="submit" class="bg-indigo-700 w-full md:w-1/2 lg:w-1/3 py-4 text-white font-Montserrat_Bold rounded-lg hover:bg-indigo-600">
                                        {{ __('LOGIN') }}
                                    </button>
                                </div>
                            </div>
                    </form>
                </div>
</div>
@endsection
