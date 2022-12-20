@extends('layouts.master')

@section('title', 'COMMUNITY')

@section('content')
    <div class="max-w-[1240px] mx-auto">
        <h1 class="text-5xl md:text-6xl font-Montserrat_Bold">Community</h1>

        <h1>Tell us what you think!</h1>

        {{-- Success Message Create --}}
        @if (Session::has('success'))
            <div class="bg-green-500 text-white text-center py-4 mx-4 md:mx-0 mb-10 rounded-lg">
                <p class="text-lg font-Montserrat_Medium">{{ Session::get('success') }}</p>
            </div>
        @endif

        {{-- Success Message Update --}}
        @if (Session::has('success_update'))
            <div class="bg-blue-500 text-white text-center py-4 mx-4 md:mx-0 mb-10 rounded-lg">
                <p class="text-lg font-Montserrat_Medium">{{ Session::get('success_update') }}</p>
            </div>
        @endif

        {{-- Success Message Delete --}}
        @if (Session::has('success_delete'))
            <div class="bg-red-500 text-white text-center py-4 mx-4 md:mx-0 mb-10 rounded-lg">
                <p class="text-lg font-Montserrat_Medium">{{ Session::get('success_delete') }}</p>
            </div>
        @endif

        {{-- Comments --}}
        <div class="py-10">
            {{-- Button Create Comment --}}
            <div class="mx-4 text-center">
                <a href="{{ route('community.create') }}"><button class="bg-indigo-700 w-full md:w-1/4 py-4 text-white font-Montserrat_Bold rounded-lg hover:bg-indigo-600">{{ __('Create a comment') }}</button></a>
            </div>
        </div>

        {{-- No Comments --}}
        <div>
            @if ($comments->count() == 0)
                <h1>No Comments!</h1>
                @else
                <h1>Comments</h1>
            @endif

            {{-- Show Comments --}}
            @foreach ($comments as $comment)
                <div class="shadow-2xl my-10 p-10">
                    <h2 class="font-Montserrat_Bold">{{ $comment->name }}</h2>
                    <span class="text-sm text-gray-500 italic">{{ $comment->updated_at }}</span>
                    <h4 class="font-Montserrat_Medium pt-5">{{ $comment->title }}</h4>
                    <h3 class="font-Montserrat_Regular py-5 border-b">{{ $comment->comment }}</h3>
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
            @endforeach
        </div>
        
        {{-- Paginate links --}}
        {{ $comments->links() }}
    </div>
@endsection