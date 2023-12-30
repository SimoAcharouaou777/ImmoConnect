<?php

require_once '../partials/navbar.php';
?>

    <section class=" w-full h-5/6 z-0 ">

        <div id="default-carousel" class=" w-full h-5/6 z-0" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative  overflow-hidden rounded-lg md:h-screen z-0">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out h-screen" data-carousel-item>
                    <img src="/immoconnect/public/imgs/img1.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="/immoconnect/public/imgs/img2.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="/immoconnect/public/imgs/img3.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 4 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="/immoconnect/public/imgs/img4.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 5 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="/immoconnect/public/imgs/img5.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
            </div>
            <!-- Slider indicators -->
            <!-- <div class="absolute flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse z-0">
                <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
            </div> -->
            <!-- Slider controls -->
            <!-- <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button> -->
        </div>
    </section>

    <section class="py-12">
    <div class="flex flex-col items-center gap-16 flex-wrap">
        <h1 class="text-center text-4xl font-bold">Our choice of popular real estate</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 justify-items-center ">

            <div class="max-w-sm bgColor1 border shadow-lg border-gray-300 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg" src="/immoconnect/public/imgs/img5.jpg" alt="" />
                </a>
                <div class="p-5">
                    <p><i class="fa-solid fa-location-dot"></i> House - Rabat</p>
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">South Sun House</h5>
                    </a>
                    <p class=" font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                </div>
                <div class="flex justify-around pb-6 text-lg" >
                    <span>2000 <i class="fa-solid fa-dollar-sign"></i></span>
                    <span><i class="fa-solid fa-ruler-combined"></i> 255 m²</span>
                    <span><i class="fa-solid fa-bath"></i> 2</span>
                    <span><i class="fa-solid fa-bed"></i> 4</span>
                </div>
            </div>
        
            <div class="max-w-sm bgColor1 border shadow-lg border-gray-300 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg" src="/immoconnect/public/imgs/img5.jpg" alt="" />
                </a>
                <div class="p-5">
                    <p><i class="fa-solid fa-location-dot"></i> House - Rabat</p>
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">South Sun House</h5>
                    </a>
                    <p class=" font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                </div>
                <div class="flex justify-around pb-6 text-lg" >
                    <span>2000 <i class="fa-solid fa-dollar-sign"></i></span>
                    <span><i class="fa-solid fa-ruler-combined"></i> 255 m²</span>
                    <span><i class="fa-solid fa-bath"></i> 2</span>
                    <span><i class="fa-solid fa-bed"></i> 4</span>
                </div>
            </div>

            <div class="max-w-sm bgColor1 border shadow-lg border-gray-300 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg" src="/immoconnect/public/imgs/img5.jpg" alt="" />
                </a>
                <div class="p-5">
                    <p><i class="fa-solid fa-location-dot"></i> House - Rabat</p>
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">South Sun House</h5>
                    </a>
                    <p class=" font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                </div>
                <div class="flex justify-around pb-6 text-lg" >
                    <span>2000 <i class="fa-solid fa-dollar-sign"></i></span>
                    <span><i class="fa-solid fa-ruler-combined"></i> 255 m²</span>
                    <span><i class="fa-solid fa-bath"></i> 2</span>
                    <span><i class="fa-solid fa-bed"></i> 4</span>
                </div>
            </div>

        </div>
        <div>
            <button type="button" class="text-white bgColor2 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-base px-8 py-4 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Browse More Properties</button>
        </div>
        
    </div>
    </section>

    </section class="bg-slate-600 py-12">
        <div class="flex flex-col items-center gap-10 bgColor1 py-12 px-4">
            <h1 class="text-center text-4xl font-bold">Why Choose Us</h1>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-14">
                <div class="flex gap-4 items-center justify-center flex-wrap md:flex-nowrap">
                    <i class="fa-solid fa-user-group text-3xl"></i>
                    <div>
                        <h1 class="font-bold">TRUSTED BY THOUSANDS</h1>
                        <p>10 new offers every day. 350 offers on site, trusted by a community of thousands of users.</p>
                    </div>
                </div>
                <div class="flex gap-4 items-center justify-center flex-wrap md:flex-nowrap">
                    <i class="fa-solid fa-file-lines text-4xl"></i>
                    <div>
                        <h1 class="font-bold">WIDE RANGE OF PROPERTIES</h1>
                        <p>With a robust selection of popular properties on hand, as well as leading properties from real estate experts.</p>
                    </div>
                </div>
                <div class="flex gap-4 items-center justify-center flex-wrap md:flex-nowrap">
                    <i class="fa-solid fa-house text-4xl"></i>
                    <div>
                        <h1 class="font-bold">FINANCING MADE EASY</h1>
                        <p>Our stress-free finance department that can find financial solutions to save you money.</p>
                    </div>
                </div>
            </div>
        </div>
    <section>

    <section class="py-12 flex flex-col items-center gap-10">
    <h1 class="text-center text-4xl font-bold">Our Partners</h1>
    <div class="source">
      <div class="source-slider">
        <img src="../../public/imgs/part1.png" alt="#">
        <img src="../../public/imgs/part2.png" alt="#">
        <img src="../../public/imgs/part3.png" alt="#">
        <img src="../../public/imgs/part4.png" alt="#">
       
      </div>
      <div class="source-slider">
        <img src="../../public/imgs/part1.png" alt="#">
        <img src="../../public/imgs/part2.png" alt="#">
        <img src="../../public/imgs/part3.png" alt="#">
        <img src="../../public/imgs/part4.png" alt="#">
      </div>
    </div>
    </section>

<?php

require_once '../partials/footer.php';
?>