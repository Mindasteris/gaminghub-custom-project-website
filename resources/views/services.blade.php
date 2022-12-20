@extends('layouts.master')

@section('title', 'SERVICES')

@section('content')
    <div class="max-w-[1240px] mx-auto">
        <h1 class="text-5xl md:text-6xl font-Montserrat_Bold">Choose our Gaming Levels</h1>
        <h1>Become a Member</h1>
        {{-- Flex Container --}}
        <div class="flex flex-col lg:flex-row justify-between items-center gap-4 p-4">
            {{-- Card 1 --}}
            <div class="max-w-sm rounded-lg shadow-2xl bg-white border border-gray-200 my-5 pt-20 hover:scale-105 duration-300 group cursor-pointer">
                <a href="#">
                    <i class="fa-solid fa-gamepad text-9xl items-center flex justify-center group-hover:text-indigo-700"></i>
                </a>
                <div class="p-5">
                    <h5 class="mb-2 py-5 text-5xl font-Montserrat_Black_Strong tracking-tight text-gray-900 text-center">Basic</h5>
                    <p class="mb-3 font-Montserrat_Regular text-gray-500">Here are the biggest gaming community.</p>
                    <ul class="font-Montserrat_Bold flex flex-col justify-start gap-6 mb-3">
                        <li><i class="fa-solid fa-check text-xl text-black"></i> Access to our community</li>
                        <li><i class="fa-solid fa-check text-xl text-black"></i> Custom avatars</li>
                        <li> <i class="fa-solid fa-check text-xl text-black"></i> Private messages</li>
                    </ul>
                    <button class="bg-indigo-700 w-full py-4 my-8 text-white font-Montserrat_Bold rounded-lg hover:bg-indigo-600">
                        {{ __('$ 9.99') }}
                    </button>
                </div>
            </div>

            {{-- Card 2 --}}
            <div class="max-w-sm rounded-lg shadow-2xl bg-white border border-gray-200 my-5 pt-20 hover:scale-105 duration-300 group cursor-pointer">
                <a href="#" class="">
                    <i class="fa-solid fa-ghost text-9xl items-center flex justify-center group-hover:text-indigo-700"></i>
                </a>
                <div class="p-5">
                    <h5 class="mb-2 py-5 text-5xl font-Montserrat_Black_Strong tracking-tight text-gray-900 text-center">Premium</h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest gaming community.</p>
                    <ul class="font-Montserrat_Bold flex flex-col justify-start gap-6 mb-3">
                        <li><i class="fa-solid fa-check text-xl text-black"></i> Include all what is in basic</li>
                        <li><i class="fa-solid fa-check text-xl text-black"></i> Select from hundreds of games</li>
                        <li> <i class="fa-solid fa-check text-xl text-black"></i> Premium content</li>
                    </ul>
                    <button class="bg-indigo-700 w-full py-4 my-8 text-white font-Montserrat_Bold rounded-lg hover:bg-indigo-600">
                        {{ __('$ 19.99') }}
                    </button>
                </div>
            </div>

            {{-- Card 3 --}}
            <div class="max-w-sm rounded-lg shadow-2xl bg-white border border-gray-200 my-5 pt-20 hover:scale-105 duration-300 group cursor-pointer">
                <a href="#" class="">
                    <i class="fa-solid fa-dragon text-9xl items-center flex justify-center group-hover:text-indigo-700"></i>
                </a>
                <div class="p-5">
                    <h5 class="mb-2 py-5 text-5xl font-Montserrat_Black_Strong tracking-tight text-gray-900 text-center">Unlimited</h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest gaming community.</p>
                    <ul class="font-Montserrat_Bold flex flex-col justify-start gap-6 mb-3">
                        <li><i class="fa-solid fa-check text-xl text-black"></i> Include all what is in premium</li>
                        <li><i class="fa-solid fa-check text-xl text-black"></i> Unlimited selection of games</li>
                        <li> <i class="fa-solid fa-check text-xl text-black"></i> Blessing from the gaming GOD</li>
                    </ul>
                    <button class="bg-indigo-700 w-full py-4 my-8 text-white font-Montserrat_Bold rounded-lg hover:bg-indigo-600">
                        {{ __('$ 49.99') }}
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection