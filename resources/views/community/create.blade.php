@extends('layouts.master')

@section('title', "Create Comment")

@section('content')
    <div class="max-w-[1240px] mx-auto text-center">

         {{-- Form --}}
         <div class="py-10 shadow-2xl shadow-black rounded-lg">
            <form method="POST" action="{{ route('community.index') }}">
                @csrf

                <div class="pb-10">
                    <label for="name" class="font-Montserrat_Regular text-xl"><i class="fa-solid fa-user"></i></i> {{ __('Name') }}</label>

                    <div class="px-4 md:px-0 py-2">
                        <input id="name" type="text" class="py-2 w-full md:w-1/2 lg:w-1/3 rounded-lg @error('name') is-invalid border-red-600 outline-none @enderror" name="name" autofocus>

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
                    <label for="title" class="font-Montserrat_Regular text-xl"><i class="fa-solid fa-pen"></i> {{ __('Title') }}</label>

                    <div class="px-4 md:px-0 py-2">
                        <input id="title" type="text" class="py-2 w-full md:w-1/2 lg:w-1/3 rounded-lg @error('title') is-invalid border-red-600 outline-none @enderror" name="title">

                        <div>
                            @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong class="text-red-600">{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="pb-10">
                    <label for="comment" class="font-Montserrat_Regular text-xl"><i class="fa-solid fa-message"></i> {{ __('Comment') }}</label>

                    <div class="px-4 md:px-0 py-2">
                        <textarea name="comment" id="comment" rows="10" class="py-2 w-full md:w-1/2 lg:w-1/3 rounded-lg @error('comment') is-invalid border-red-600 outline-none @enderror"></textarea>
                        
                        <div>
                            @error('comment')
                                <span class="invalid-feedback" role="alert">
                                    <strong class="text-red-600">{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="pt-10 px-4 md:px-0">
                        <button type="submit" class="bg-indigo-700 w-full md:w-1/2 lg:w-1/3 py-4 text-white font-Montserrat_Bold rounded-lg hover:bg-indigo-600">
                            {{ __('POST') }}
                        </button>
                    </div>
                </div>
            </form>
    </div>
@endsection