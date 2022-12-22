@extends('layouts.master')

@section('title', 'CONTACT US')

@section('content')
    <div class="max-w-[1240px] mx-auto text-center">
        <h1>Contact Us</h1>

        {{-- Success Message --}}
        @if (Session::has('success'))
            <div class="bg-green-500 text-white text-center py-4 mx-4 md:mx-0 mb-10 rounded-lg">
                <p class="text-xl font-Montserrat_Medium">{{ Session::get('success') }}</p>
            </div>
        @endif

        {{-- Form --}}
        <div class="py-10 shadow-2xl shadow-black rounded-lg">
            <form method="POST" action="{{ route('contact.index') }}">
                @csrf

                <div class="pb-10">
                    <label for="name" class="font-Montserrat_Regular text-xl"><i class="fa-solid fa-user"></i> {{ __('Name') }}</label>

                    <div class="px-4 md:px-0 py-2">
                        <input id="name" type="text" class="py-2 px-2 w-full md:w-1/2 lg:w-1/3 rounded-lg @error('name') is-invalid border-red-600 outline-none @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus>

                        <div>
                            @error('name')
                                <span class="" role="alert">
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
                                <span class="" role="alert">
                                    <strong class="text-red-600">{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="pb-10">
                    <label for="subject" class="font-Montserrat_Regular text-xl"><i class="fa-solid fa-pen-nib"></i> {{ __('Subject') }}</label>

                    <div class="px-4 md:px-0 py-2">
                        <input id="subject" type="text" class="py-2 px-2 w-full md:w-1/2 lg:w-1/3 rounded-lg @error('subject') is-invalid border-red-600 outline-none @enderror" name="subject">

                        <div>
                            @error('subject')
                                <span class="invalid-feedback" role="alert">
                                    <strong class="text-red-600">{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="pb-10">
                    <label for="contact_message" class="font-Montserrat_Regular text-xl"><i class="fa-solid fa-message"></i> {{ __('Message') }}</label>

                    <div class="px-4 md:px-0 py-2">
                        <textarea name="contact_message" id="contact_message" rows="10" class="py-2 px-2 w-full md:w-1/2 lg:w-1/3 rounded-lg @error('contact_message') is-invalid border-red-600 outline-none @enderror"></textarea>
                        
                        <div>
                            @error('contact_message')
                                <span class="invalid-feedback" role="alert">
                                    <strong class="text-red-600">{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>

                

                <div class="pb-10">
                    <div class="pt-10 px-4 md:px-0">
                        <button type="submit" class="bg-indigo-700 w-full md:w-1/2 lg:w-1/3 py-4 text-white font-Montserrat_Bold rounded-lg hover:bg-indigo-600">
                            {{ __('SEND') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection