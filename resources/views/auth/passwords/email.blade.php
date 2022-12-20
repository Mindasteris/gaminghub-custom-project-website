@extends('layouts.master')

@section('content')
<div class="max-w-[1240px] mx-auto text-center py-20">
            <div><h1>Reset Password</h1></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="p-10 shadow-2xl shadow-black rounded-lg">
                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf
    
                            <div class="pb-10">
                                <label for="email" class="font-Montserrat_Regular text-xl"><i class="fa-solid fa-envelope"></i> {{ __('Email Address') }}</label>
    
                                <div class="px-4 md:px-0 py-2">
                                    <input id="email" type="email" class="py-2 w-full md:w-1/2 lg:w-1/3 rounded-lg @error('email') is-invalid border-red-600 outline-none @enderror" name="email" value="{{ old('email') }}" autocomplete="email" autofocus>
    
                                    <div>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong class="text-red-600">{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
    
                            <div class="pt-10 px-4 md:px-0">
                                <button type="submit" class="bg-indigo-700 w-full md:w-1/2 lg:w-1/3 py-4 text-white font-Montserrat_Bold rounded-lg hover:bg-indigo-600">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
</div>
@endsection
