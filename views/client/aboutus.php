<?php require_once '../partials/navbar.php'; ?>

<figure class="relative max-w-full bg-center bg-cover transition-all duration-300">
    <a href="#">
        <img class="rounded-lg w-full md:w-auto" style="filter: blur(1.5px);" src="../../Public/imgs/photoholgic-fn6x1TL290w-unsplash.jpg" alt="image description">
    </a>
    <figcaption class="absolute px-4 text-lg text-white top-20">
        <p class="text-4xl md:text-8xl color2">Buy or rent properties with no commission</p>
    </figcaption>
</figure>

<div class="container flex flex-col md:flex-row justify-around mt-14">
    <div class="size-96 mb-4 md:mb-0">
        <img src="../../Public/imgs/dell-8pb7Hq539Zw-unsplash.jpg" class="mx-auto w-full h-auto rounded-md md:rounded-lg md:w-full" alt="image 2">
    </div>
    <div class="md:w-1/2">
        <h2 class="text-3xl md:text-5xl color2">VISION</h2>
        <p class="text-base md:text-2xld mt-10">Welcome to QAMIMMOBILIER, the ultimate destination for seamless real estate transactions. Whether you're looking for a dream home or eager to sell or rent your property, QAMIMMOBILIER is here to make the process smooth and efficient.</p>
        <button type="button" class="bgColor2 text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center mt-5">View More</button>
    </div>
</div>

    <!-- Your existing code for the data section -->
    <div class="flex flex-col sm:flex-row justify-around p-20">
    <div class="flex flex-col items-center justify-center mb-4 sm:mb-0">
        <dt class="mb-2 text-3xl font-extrabold">$ 980K</dt>
        <dd class="text-gray-500 dark:text-gray-400">Median sold price</dd>
    </div>
    <div class="flex flex-col items-center justify-center mb-4 sm:mb-0">
        <dt class="mb-2 text-3xl font-extrabold">240</dt>
        <dd class="text-gray-500 dark:text-gray-400">Properties sold</dd>
    </div>
    <div class="flex flex-col items-center justify-center mb-4 sm:mb-0">
        <dt class="mb-2 text-3xl font-extrabold">$ 680K</dt>
        <dd class="text-gray-500 dark:text-gray-400">Median leased price</dd>
    </div>
    <div class="flex flex-col items-center justify-center">
        <dt class="mb-2 text-3xl font-extrabold">100</dt>
        <dd class="text-gray-500 dark:text-gray-400">Properties leased</dd>
    </div>
</div>


    <figure class="relative max-w-full bg-center bg-cover transition-all duration-300  md:mt-0">
        <a href="#">
            <img class="rounded-lg w-full h-auto md:w-auto" style="filter: blur(1.5px);" src="../../Public/imgs/Couple at home working on a laptop together 1.png" alt="image description">
        </a>
        <figcaption class="absolute px-4 text-lg text-white top-10">
            <h2 class="text-4xl md:text-8xl color2">Premium Houses and Apartments</h2>
            <p class="text-sm md:text-xl color1">* Save your time and easily rent or sell your property</p>
        </figcaption>
    </figure>


<div class="text-center pt-5 text-3xl md:text-5xl color2">
    <h2>Testimonial</h2>
</div>

<div class="swiper-container mt-8 md:mt-26">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <figcaption class="flex items-center justify-center p-5">
                <img class="w-14 h-14 md:w-19 md:h-19" src="../../Public/imgs/about-us-testimonials1-83x83 1.png" alt="profile picture">
                <div class="space-y-0.5 font-medium dark:text-white text-left rtl:text-right ms-3">
                    <p class="text-base md:text-lg">Bonnie Green</p>
                    <div class="text-sm md:text-base text-gray-500 dark:text-gray-400">Developer at Open AI</div>
                    <p class="text-sm md:text-base">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ila?</p>
                </div>
            </figcaption>
        </div>

        <div class="swiper-slide">
            <figcaption class="flex items-center justify-center p-5">
                <img class="w-14 h-14 md:w-19 md:h-19" src="../../Public/imgs/about-us-testimonials1-83x83 2.png" alt="profile picture">
                <div class="space-y-0.5 font-medium dark:text-white text-left rtl:text-right ms-3">
                    <p class="text-base md:text-lg">Bonnie Green</p>
                    <div class="text-sm md:text-base text-gray-500 dark:text-gray-400">Developer at Open AI</div>
                    <p class="text-sm md:text-base">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ila?</p>
                </div>
            </figcaption>
        </div>
    </div>

    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
</div>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="../../Public/js/aboutus.js"></script>

<?php require_once '../partials/footer.php'; ?>
