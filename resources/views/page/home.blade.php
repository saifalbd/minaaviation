<x-app>

   <section class="flex justify-center">
    <div class="container">
        <div class="py-4 md:px-4">
            <div id="default-carousel" class="relative w-full" data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                    <!-- Item 1 -->
                    <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                        <img src="{{ asset('static/img/slider/01.jpg') }}"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                    <!-- Item 2 -->
                    <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                        <img src="{{asset('static/img/slider/02.jpg') }}"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                    <!-- Item 3 -->
                    <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                        <img src="{{ asset('static/img/slider/03.jpg') }}"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                    <!-- Item 4 -->
                    <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                        <img src="{{ asset('static/img/slider/04.jpg') }}"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                   
                </div>
                <!-- Slider indicators -->
                <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                    <button type="button" class="w-3 h-3 rounded-full border border-fuchsia-50" aria-current="true"
                        aria-label="Slide 1" data-carousel-slide-to="0"></button>
                    <button type="button" class="w-3 h-3 rounded-full border border-fuchsia-50" aria-current="false"
                        aria-label="Slide 2" data-carousel-slide-to="1"></button>
                    <button type="button" class="w-3 h-3 rounded-full border border-fuchsia-50" aria-current="false"
                        aria-label="Slide 3" data-carousel-slide-to="2"></button>
                    <button type="button" class="w-3 h-3 rounded-full border border-fuchsia-50" aria-current="false"
                        aria-label="Slide 4" data-carousel-slide-to="3"></button>
                 
                </div>
                <!-- Slider controls -->
                <button type="button"
                    class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-prev>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 1 1 5l4 4" />
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button"
                    class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-next>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>
        </div>
    </div>

   </section>

    {{-- End Carosule --}}


    

    <div class="flex justify-center">
        <x-well-come-section></x-well-come-section>
    </div>

    

    <x-package-list :packages="$packages"></x-package-list>

   <section class="flex justify-center">
    <div class="container relative pt-10 pb-10 mb-10 z-10 ">

        <h1 class="text-center font-extrabold text-4xl font-ac my-10 text-cyan-600">

            <div class="sec-title">Our Team</div>
        </h1>

        <div class="grid grid-cols-3 gap-5 pt-6 px-5">
            <div
                class=" ring-4 ring-fuchsia-300 bg-white border border-gray-200 rounded-lg shadow
            hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700
            relative col-span-3 md:col-span-1">
                <div class="flex justify-center items-center"><img style="height: 300px"
                        src="{{ asset('static/dummy/team1.jpg') }}" alt=""></div>
                <div>

                    <div class=" flex justify-center items-center flex-col mt-2">
                        <h3 class="text-cyan-600 text-lg">মুফতি শহিদুল ইসলাম</h3>
                        <h4 class="text-cyan-500">প্রতিষ্ঠাতা চেয়ারম্যান</h4>
                        <h4 class="text-cyan-500">মিনা এভিয়েশন</h4>
                    </div>

                </div>
            </div>
            <div
                class="p-1 ring-4 ring-fuchsia-300 bg-white border border-gray-200 rounded-lg shadow
            hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700
            relative col-span-3 md:col-span-1">
                <div class="flex justify-center items-center"> <img style="height: 300px"
                        src="{{ asset('static/dummy/team2.jpg') }}" alt=""></div>
                <div class=" flex justify-center items-center flex-col mt-2">
                    <h3 class="text-cyan-600 text-lg">মাওলানা সারোয়ার হোসাইন</h3>
                    <h4 class="text-cyan-500">প্রতিষ্ঠাতা চেয়ারম্যান</h4>
                    <h4 class="text-cyan-500">মিনা এভিয়েশন</h4>
                </div>
            </div>
            <div
                class="p-1 ring-4 ring-fuchsia-300 bg-white border border-gray-200 rounded-lg shadow
            hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700
            relative  col-span-3 md:col-span-1">

                <div class="flex justify-center items-center"><img style="height: 300px"
                        src="{{ asset('static/dummy/team3.jpg') }}" alt=""></div>

                        <div class=" flex justify-center items-center flex-col mt-2">
                            <h3 class="text-cyan-600 text-lg">মুফতি হামজা শহিদুল ইসলাম</h3>
                            <h4 class="text-cyan-500">চেয়ারম্যান</h4>
                            <h4 class="text-cyan-500">মিনা এভিয়েশন</h4>
                        </div>

            </div>
        </div>
    </div>
   </section>
</x-app>
