@extends('layouts.master')

@section('content')
<div class="max-w-[1240px] mx-auto">
            <div class="text-center text-xl md:text-2xl lg:text-3xl font-Montserrat_Bold py-20">{{ __('Welcome to our Gaming Community: ') }} &nbsp;<span class="text-indigo-700">{{ Auth::user()->name }}</span></div>

                <div class="text-center text-xl md:text-2xl lg:text-3xl font-Montserrat_Bold">
                    @if (session('status'))
                        <div class="" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>

                <div class="text-center pt-10 mx-4">
                    <a href="/" class="bg-indigo-700 w-full md:w-1/2 lg:w-1/3 py-4 px-10 text-white font-Montserrat_Bold rounded-lg hover:bg-indigo-600">
                        {{ __('EXPLORE OUR WORLD') }}
                    </a>
                </div>
</div>
@endsection
