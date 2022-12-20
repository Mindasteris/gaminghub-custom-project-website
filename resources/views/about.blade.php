@extends('layouts.master')

@section('title', 'ABOUT US')

@section('content')
    <div class="max-w-[1240px] mx-auto">
        {{-- About --}}
        <h1 class="text-5xl md:text-6xl font-Montserrat_Bold">About Us</h1>

        <h1 class="italic">"Eat. Sleep. Game. Repeat."</h1>

        {{-- Flex Container --}}
        <div class="flex flex-col md:flex-row justify-center items-center gap-8 pt-10">
        {{-- Card 1 --}}
        <div class="">
            <div class="rounded-lg shadow-2xl bg-white max-w-sm">
              <a href="#">
                <img class="rounded-t-lg hover:scale-105 duration-300" src="{{ asset('img/man.png') }}" alt="ceo"/>
              </a>
              <div class="p-6">
                <h5 class="text-black text-xl font-medium mb-2">CEO</h5>
                <p class="font-Montserrat_Black_Strong text-indigo-700">Mindaugas Šunokas</p>
                <p class="text-gray-700 text-base mb-4 bg-slate-100 rounded-md">
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nostrum accusamus perspiciatis id deserunt recusandae illum odio ipsum maiores harum placeat.
                </p>
                <a href="{{ route('contact.index') }}"><button type="button" class="py-4 bg-indigo-700 w-full text-white font-Montserrat_Bold leading-tight rounded-lg shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">CONTACT</button></a>  
              </div>
            </div>
        </div>

        
        {{-- Card 2 --}}
        <div class="">
            <div class="rounded-lg shadow-2xl bg-white max-w-sm pt-5">
              <a href="#">
                <img class="rounded-t-lg hover:scale-105 duration-300 mx-auto" src="{{ asset('img/woman.png') }}" alt="designer"/>
              </a>
              <div class="p-6">
                <h5 class="text-black text-xl font-medium mb-2">Director</h5>
                <p class="font-Montserrat_Black_Strong text-indigo-700">Karolina Karolina</p>
                <p class="text-gray-700 text-base mb-4 bg-slate-100 rounded-md">
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Recusandae ea quis quidem ipsam doloribus vero culpa esse nobis dignissimos fugit.
                </p>
                <a href="{{ route('contact.index') }}"><button type="button" class="py-4 bg-indigo-700 w-full text-white font-Montserrat_Bold leading-tight rounded-lg shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">CONTACT</button></a>  
              </div>
            </div>
        </div>
    </div>

        <div class="flex flex-col md:flex-row justify-center items-center gap-8 pt-20">
            {{-- Card 3 --}}
        <div class="">
            <div class="rounded-lg shadow-2xl bg-white max-w-sm">
              <a href="#">
                <img class="rounded-t-lg hover:scale-105 duration-300" src="{{ asset('img/man.png') }}" alt="designer"/>
              </a>
              <div class="p-6">
                <h5 class="text-black text-xl font-medium mb-2">Gaming Expert</h5>
                <p class="font-Montserrat_Black_Strong text-indigo-700">Tadas Tadauskas</p>
                <p class="text-gray-700 text-base mb-4 bg-slate-100 rounded-md">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis pariatur inventore impedit fugit vero. Porro, perspiciatis blanditiis. Vitae, natus debitis.
                </p>
                <a href="{{ route('contact.index') }}"><button type="button" class="py-4 bg-indigo-700 w-full text-white font-Montserrat_Bold leading-tight rounded-lg shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">CONTACT</button></a>  
              </div>
            </div>
        </div>

        {{-- Card 4 --}}
        <div class="">
            <div class="rounded-lg shadow-2xl bg-white max-w-sm">
              <a href="#">
                <img class="rounded-t-lg hover:scale-105 duration-300" src="{{ asset('img/man.png') }}" alt="designer"/>
              </a>
              <div class="p-6">
                <h5 class="text-black text-xl font-medium mb-2">Gaming Journalist</h5>
                <p class="font-Montserrat_Black_Strong text-indigo-700">Vytenis Vytenskas</p>
                <p class="text-gray-700 text-base mb-4 bg-slate-100 rounded-md">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloribus praesentium nihil provident quibusdam? Perspiciatis saepe numquam ipsum optio deserunt illo.
                </p>
                <a href="{{ route('contact.index') }}"><button type="button" class="py-4 bg-indigo-700 w-full text-white font-Montserrat_Bold leading-tight rounded-lg shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">CONTACT</button></a>  
              </div>
            </div>
        </div>
    </div>

    {{-- Gamer Logo --}}
    <div class="w-80 mx-auto mt-20">
        <img src="{{ asset('img/gamer.png') }}" alt="gamer-logo">
    </div>
    
    </div>
@endsection