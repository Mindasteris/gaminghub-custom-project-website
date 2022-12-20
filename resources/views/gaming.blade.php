@extends('layouts.master')

@section('title', 'GAMING')

@section('content')
    <div class="max-w-[1240px] mx-auto">
        <h1 class="text-5xl md:text-6xl font-Montserrat_Bold">Gaming is Here</h1>

        <h1>Hall of Fame Family</h1>

        {{-- Brand Logos --}}
        <div class="flex flex-col justify-between items-center text-center mx-4 my-10 shadow-lg">
            <img class="w-52 hover:scale-105 duration-300 cursor-pointer" src="{{ asset('img/ps-logo.png') }}" alt="ps-logo">
            <h2 class="font-Montserrat_Bold py-2">Playstation</h2>
            <p>PlayStation (Japanese: プレイステーション, Hepburn: Pureisutēshon, officially abbreviated as PS) is a video gaming brand that consists of five home video game consoles, two handhelds, a media center, and a smartphone, as well as an online service and multiple magazines. The brand is produced by Sony Interactive Entertainment, a division of Sony; the first PlayStation console was released in Japan in December 1994, and worldwide the following year.</p>
        </div>

        <div class="flex flex-col justify-between items-center text-center mx-4 my-10 shadow-lg">
            <img class="w-52 hover:scale-105 duration-300 cursor-pointer" src="{{ asset('img/xbox-logo.png') }}" alt="xbox-logo">
            <h2 class="font-Montserrat_Bold py-2">Xbox</h2>
            <p>Xbox is a video gaming brand created and owned by Microsoft. The brand consists of five video game consoles, as well as applications (games), streaming services, an online service by the name of Xbox network, and the development arm by the name of Xbox Game Studios. The brand was first introduced in the United States in November 2001, with the launch of the original Xbox console.

                The original device was the first video game console offered by an American company after the Atari Jaguar stopped sales in 1996. It reached over 24 million units sold by May 2006. Microsoft's second console, the Xbox 360, was released in 2005 and has sold 86 million units as of October 2021. The third console, the Xbox One, was released in November 2013 and has sold 51 million units. The fourth line of Xbox consoles, the Xbox Series X and Series S, were released in November 2020. The head of Xbox is Phil Spencer, who succeeded former head Marc Whitten in late March 2014.</p>
        </div>

        <div class="flex flex-col justify-between items-center text-center mx-4 my-10 shadow-lg">
            <img class="w-52 hover:scale-105 duration-300 cursor-pointer" src="{{ asset('img/nintendo-logo.png') }}" alt="nintendo-logo">
            <h2 class="font-Montserrat_Bold py-2">Nintendo</h2>
            <p>Nintendo Co., Ltd. is a Japanese multinational video game company headquartered in Kyoto, Japan. It develops video games and video game consoles.

                Nintendo was founded in 1889 as Nintendo Karuta by craftsman Fusajiro Yamauchi and originally produced handmade hanafuda playing cards. After venturing into various lines of business during the 1960s and acquiring a legal status as a public company, Nintendo distributed its first console, the Color TV-Game, in 1977. It gained international recognition with the release of Donkey Kong in 1981 and the Nintendo Entertainment System and Super Mario Bros. in 1985.</p>
        </div>

        {{-- Gaming Images --}}
        <div class="p-4">
            {{-- God of War --}}
            <div class="flex flex-col md:flex-row flex-wrap justify-center gap-6 md:gap-4 my-10">
                <img class="w-full md:w-[500px] cursor-pointer myImages hover:opacity-80" src="{{ asset('img/gaming_gallery/god1.jpg') }}" alt="god1" loading="lazy">
                <img class="w-full md:w-[500px] cursor-pointer myImages hover:opacity-80" src="{{ asset('img/gaming_gallery/god2.jpg') }}" alt="god2" loading="lazy">
                <img class="w-full md:w-[500px] cursor-pointer myImages hover:opacity-80" src="{{ asset('img/gaming_gallery/god3.jpg') }}" alt="god3" loading="lazy">
                <img class="w-full md:w-[500px] cursor-pointer myImages hover:opacity-80" src="{{ asset('img/gaming_gallery/god4.jpg') }}" alt="god4" loading="lazy">
                <img class="w-full md:w-[500px] cursor-pointer myImages hover:opacity-80" src="{{ asset('img/gaming_gallery/god5.jpg') }}" alt="god5" loading="lazy">
                <img class="w-full md:w-[500px] cursor-pointer myImages hover:opacity-80" src="{{ asset('img/gaming_gallery/god6.jpg') }}" alt="god6" loading="lazy">
            </div>

            {{-- Halo --}}
            <div class="flex flex-col md:flex-row flex-wrap justify-center gap-6 md:gap-4 my-10">
                <img class="w-full md:w-[500px] cursor-pointer myImages hover:opacity-80" src="{{ asset('img/gaming_gallery/halo1.jpg') }}" alt="halo1" loading="lazy">
                <img class="w-full md:w-[500px] cursor-pointer myImages hover:opacity-80" src="{{ asset('img/gaming_gallery/halo2.jpg') }}" alt="halo2" loading="lazy">
                <img class="w-full md:w-[500px] cursor-pointer myImages hover:opacity-80" src="{{ asset('img/gaming_gallery/halo3.jpg') }}" alt="halo3" loading="lazy">
                <img class="w-full md:w-[500px] cursor-pointer myImages hover:opacity-80" src="{{ asset('img/gaming_gallery/halo4.jpg') }}" alt="halo4" loading="lazy">
                <img class="w-full md:w-[500px] cursor-pointer myImages hover:opacity-80" src="{{ asset('img/gaming_gallery/halo5.jpg') }}" alt="halo5" loading="lazy">
                <img class="w-full md:w-[500px] cursor-pointer myImages hover:opacity-80" src="{{ asset('img/gaming_gallery/halo6.jpg') }}" alt="halo6" loading="lazy">
            </div>

            {{-- Mario --}}
            <div class="flex flex-col md:flex-row flex-wrap justify-center gap-6 md:gap-4 my-10">
                <img class="w-full md:w-[500px] cursor-pointer myImages hover:opacity-80" src="{{ asset('img/gaming_gallery/mario1.jpg') }}" alt="mario1" loading="lazy">
                <img class="w-full md:w-[500px] cursor-pointer myImages hover:opacity-80" src="{{ asset('img/gaming_gallery/mario2.jpg') }}" alt="mario2" loading="lazy">
                <img class="w-full md:w-[500px] cursor-pointer myImages hover:opacity-80" src="{{ asset('img/gaming_gallery/mario3.jpg') }}" alt="mario3" loading="lazy">
                <img class="w-full md:w-[500px] cursor-pointer myImages hover:opacity-80" src="{{ asset('img/gaming_gallery/mario4.jpg') }}" alt="mario4" loading="lazy">
                <img class="w-full md:w-[500px] cursor-pointer myImages hover:opacity-80" src="{{ asset('img/gaming_gallery/mario5.jpg') }}" alt="mario5" loading="lazy">
                <img class="w-full md:w-[500px] cursor-pointer myImages hover:opacity-80" src="{{ asset('img/gaming_gallery/mario6.jpg') }}" alt="mario6" loading="lazy">
            </div>

            {{-- Logo Forever Gamer --}}
            <div class="-mb-20">
                <img class="mx-auto w-32 md:w-52" src="{{ asset('img/gaming-forever.png') }}" alt="gaming-forever" >
            </div>

            <!-- The Modal -->
            <div id="myModal" class="modal">
                <span class="close">&times;</span>
                <img class="modal-content" id="img01">
                <div id="caption"></div>
            </div>

        </div>
    </div>

    {{-- Script --}}
    <script>
            // Get the modal
            var modal = document.getElementById("myModal");

            // Get the image and insert it inside the modal - use its "alt" text as a caption
            var images = document.getElementsByClassName("myImages");
            var modalImg = document.getElementById("img01");
            var captionText = document.getElementById("caption");

            // Go through all of the images with our custom class
            for(var i = 0; i < images.length; i++)
            {
                var img = images[i];
                // and attach our click listener for this image
                img.onclick = function(evt) {
                    console.log(evt);
                    modal.style.display = "block";
                    modalImg.src = this.src;
                    // captionText.innerHTML = this.alt;
                }
            }


            // img.onclick = function(){
            // modal.style.display = "block";
            // modalImg.src = this.src;
            // captionText.innerHTML = this.alt;
            // }

            // Get the <span> element that closes the modal
                const span = document.getElementsByClassName("close")[0];

            // When the user clicks on <span> (x), close the modal
            span.onclick = function() { 
                modal.style.display = "none";
            }
    </script>
@endsection