@extends('layouts.master')

@section('title', 'Comment')

@section('content')
    <div class="max-w-[1240px] mx-auto">
        <h1>Your Comment</h1>

        <div class="shadow-2xl my-10 p-10">
            <h2 class="font-Montserrat_Bold"><a href="{{ route('community.show', $comment->id) }}">{{ $comment->name }}</a></h2>
            <span class="text-sm text-gray-500 italic">{{ $comment->updated_at }}</span>
            <h4 class="font-Montserrat_Medium pt-5">{{ $comment->title }}</h4>
            <h3 class="font-Montserrat_Regular text-xl py-5 border-b">{{ $comment->comment }}</h3>
            <div class="flex items-center gap-8 pt-4">
                {{-- Update Link --}}
                <a class="hover:bg-black hover:text-white p-2 rounded-lg font-Montserrat_Bold" href="{{ route('community.edit', $comment->id) }}"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                {{-- Delete Button--}}
                <form action="{{ route('community.destroy', $comment->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="hover:bg-black hover:text-white p-2 rounded-lg font-Montserrat_Bold" onclick="return confirm('Are You Sure ?')"><i class="fa-solid fa-trash"></i> Delete</button>
                </form>
            </div>
        </div>

        {{-- Back Button --}}
        <a href="{{ route('community.index') }}"><button type="button" class="bg-indigo-700 ml-5 xl:ml-0 w-32 py-4 md:py-4 text-white font-Montserrat_Bold rounded-lg hover:bg-indigo-600">
            {{ __('BACK') }}
        </button></a>
    </div>
@endsection