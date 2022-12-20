@extends('layouts.master')

@section('title', 'HOME')

@section('content')
    <div class="max-w-[1240px] mx-auto">
        <h1 class="text-5xl md:text-6xl font-Montserrat_Bold">Welcome to Gaming Hub</h1>

        <h1>Video Games</h1>

        {{-- Section 1 Text --}}
        <div>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum quae tenetur voluptatibus temporibus libero necessitatibus aliquam, voluptatum obcaecati perspiciatis, voluptates blanditiis. Dolores explicabo totam, sunt culpa dolor unde repellendus sequi reprehenderit, inventore rerum sit fugit iusto veniam. Culpa asperiores alias inventore impedit sunt, sed eos aliquid voluptatum velit aperiam fugit quae sint quis et ipsam! Excepturi facilis architecto libero fugiat minus impedit sunt consectetur quo suscipit dicta. Magni nihil explicabo mollitia nostrum qui, consequatur ex rem laboriosam aliquid dolores omnis doloribus architecto ipsa vero praesentium dolorem inventore molestias pariatur deserunt. Voluptates nisi tempore tempora cumque ad quaerat delectus iusto autem?</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum quae tenetur voluptatibus temporibus libero necessitatibus aliquam, voluptatum obcaecati perspiciatis, voluptates blanditiis. Dolores explicabo totam, sunt culpa dolor unde repellendus sequi reprehenderit, inventore rerum sit fugit iusto veniam. Culpa asperiores alias inventore impedit sunt, sed eos aliquid voluptatum velit aperiam fugit quae sint quis et ipsam! Excepturi facilis architecto libero fugiat minus impedit sunt consectetur quo suscipit dicta. Magni nihil explicabo mollitia nostrum qui, consequatur ex rem laboriosam aliquid dolores omnis doloribus architecto ipsa vero praesentium dolorem inventore molestias pariatur deserunt. Voluptates nisi tempore tempora cumque ad quaerat delectus iusto autem?</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum quae tenetur voluptatibus temporibus libero necessitatibus aliquam, voluptatum obcaecati perspiciatis, voluptates blanditiis. Dolores explicabo totam, sunt culpa dolor unde repellendus sequi reprehenderit, inventore rerum sit fugit iusto veniam. Culpa asperiores alias inventore impedit sunt, sed eos aliquid voluptatum velit aperiam fugit quae sint quis et ipsam! Excepturi facilis architecto libero fugiat minus impedit sunt consectetur quo suscipit dicta. Magni nihil explicabo mollitia nostrum qui, consequatur ex rem laboriosam aliquid dolores omnis doloribus architecto ipsa vero praesentium dolorem inventore molestias pariatur deserunt. Voluptates nisi tempore tempora cumque ad quaerat delectus iusto autem?</p>
            {{-- <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum quae tenetur voluptatibus temporibus libero necessitatibus aliquam, voluptatum obcaecati perspiciatis, voluptates blanditiis. Dolores explicabo totam, sunt culpa dolor unde repellendus sequi reprehenderit, inventore rerum sit fugit iusto veniam. Culpa asperiores alias inventore impedit sunt, sed eos aliquid voluptatum velit aperiam fugit quae sint quis et ipsam! Excepturi facilis architecto libero fugiat minus impedit sunt consectetur quo suscipit dicta. Magni nihil explicabo mollitia nostrum qui, consequatur ex rem laboriosam aliquid dolores omnis doloribus architecto ipsa vero praesentium dolorem inventore molestias pariatur deserunt. Voluptates nisi tempore tempora cumque ad quaerat delectus iusto autem?</p> --}}
            {{-- <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum quae tenetur voluptatibus temporibus libero necessitatibus aliquam, voluptatum obcaecati perspiciatis, voluptates blanditiis. Dolores explicabo totam, sunt culpa dolor unde repellendus sequi reprehenderit, inventore rerum sit fugit iusto veniam. Culpa asperiores alias inventore impedit sunt, sed eos aliquid voluptatum velit aperiam fugit quae sint quis et ipsam! Excepturi facilis architecto libero fugiat minus impedit sunt consectetur quo suscipit dicta. Magni nihil explicabo mollitia nostrum qui, consequatur ex rem laboriosam aliquid dolores omnis doloribus architecto ipsa vero praesentium dolorem inventore molestias pariatur deserunt. Voluptates nisi tempore tempora cumque ad quaerat delectus iusto autem?</p> --}}
        </div>

        {{-- Section 2 Text with Images --}}
        <div class="flex flex-col md:flex-row items-center justify-center my-10">
            <img src="img/heart.png" alt="gamer-zone" class="w-[200px] cursor-pointer hover:scale-105 duration-300">
            <p class="w-full md:w-1/2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus vel incidunt tempora! Ipsam, quae magni! Laboriosam libero accusamus similique facere. Porro eveniet autem debitis sunt quos, nam nesciunt minus officia accusantium consectetur quaerat rem, quia aliquam illo saepe. Eum, quibusdam.</p>
        </div>

        <div class="flex flex-col md:flex-row items-center justify-center my-10">
            <img src="img/controller.png" alt="gamer-zone" class="w-[200px] cursor-pointer hover:scale-105 duration-300">
            <p class="w-full md:w-1/2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus vel incidunt tempora! Ipsam, quae magni! Laboriosam libero accusamus similique facere. Porro eveniet autem debitis sunt quos, nam nesciunt minus officia accusantium consectetur quaerat rem, quia aliquam illo saepe. Eum, quibusdam.</p>
        </div>

        <div class="flex flex-col md:flex-row items-center justify-center my-10">
            <img src="img/gamer-zone.webp" alt="gamer-zone" class="w-[200px] cursor-pointer hover:scale-105 duration-300">
            <p class="w-full md:w-1/2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus vel incidunt tempora! Ipsam, quae magni! Laboriosam libero accusamus similique facere. Porro eveniet autem debitis sunt quos, nam nesciunt minus officia accusantium consectetur quaerat rem, quia aliquam illo saepe. Eum, quibusdam.</p>
        </div>
    </div>
@endsection