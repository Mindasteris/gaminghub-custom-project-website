<footer>
    <div class="w-full bg-black items-center text-white mt-20">
        {{-- Social Links --}}
        <div class="flex flex-col md:flex-row items-center justify-between pt-10">
            <div class="space-x-6 md:ml-20 pb-10">
                <i class="fa-brands fa-facebook text-3xl cursor-pointer hover:text-[#4267B2]"></i>
                <i class="fa-brands fa-twitter text-3xl cursor-pointer hover:text-[#1DA1F2]"></i>
                <i class="fa-brands fa-instagram text-3xl cursor-pointer hover:text-[#833AB4]"></i>
                <i class="fa-brands fa-youtube text-3xl cursor-pointer hover:text-[#FF0000]"></i>
                <i class="fa-brands fa-twitch text-3xl cursor-pointer hover:text-[#6441a5]"></i>
            </div>
            <img class="w-28 pb-5 md:mr-20" src="{{ asset('img/shark.png') }}" alt="footer-logo">
        </div>

            {{-- Subscribe --}}
            <div class="p-4 md:max-w-[400px] font-Montserrat_Bold text-center">
                <form action="{{ route('index') }}" method="GET">
                    <label for="sub" class="text-xl">Join Gaming Community</label>
                <div><input type="email" name="sub" class="py-2 my-4 w-full rounded-lg text-black"></div>
                <button type="submit" class="bg-indigo-700 w-full md:w-1/2 lg:w-1/3 py-2 md:py-4 text-white font-Montserrat_Bold rounded-lg hover:bg-indigo-600">
                    {{ __('SUBSCRIBE') }}
                </button>
                </form>
            </div>

        <p class="font-Montserrat_Bold text-lg md:text-xl lg:text-2xl text-center">&copy; All Rights Reserved. Mindaugas {{ date('Y') }}</p>
    </div>
</footer>