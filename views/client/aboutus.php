<?php
require_once '../partials/navbar.php';
?>

<figure class="relative max-w-full  bg-center bg-cover transition-all duration-300 ">
  <a href="#">
    <img class="rounded-lg" style="filter: blur(1.5px);" src="../../Public/imgs/photoholgic-fn6x1TL290w-unsplash.jpg" alt="image description">
  </a>
  <figcaption class="absolute px-4 text-lg text-white top-20">
      <p class="text-8xl color2" >Buy or rent properties with no commission</p>
  </figcaption>
</figure>
  <div class=" container flex justify-around mt-14 ">
        <div class="size-96">
            <img src="../../Public/imgs/dell-8pb7Hq539Zw-unsplash.jpg" style="border-radius: 0.25rem;" alt="image 2">
        </div>
        <div>
            <h2 class="text-5xl color2">VISION</h2>
            <p class="text-2xl mt-2">Welcome to QAMIMMOBILIER, the ultimate <br> destination for seamless real estate <br> transactions. Whether you're
                looking for a <br> dream home or eager to sell or rent <br> your property, QAMIMMOBILIER is here <br> to make the
                process smooth and efficient.</p>
                <button type="button" class="bgColor2 text-white  focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center mt-1 ">View More</button>
        </div>
  </div>
        <div class=" flex justify-around" >
            <div class="flex flex-col items-center justify-center">
                    <dt class="mb-2 text-3xl font-extrabold">$ 980K</dt>
                    <dd class="text-gray-500 dark:text-gray-400">Median sold price</dd>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <dt class="mb-2 text-3xl font-extrabold">240</dt>
                    <dd class="text-gray-500 dark:text-gray-400">Properties sold</dd>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <dt class="mb-2 text-3xl font-extrabold">$ 680K</dt>
                    <dd class="text-gray-500 dark:text-gray-400">Median leased price</dd>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <dt class="mb-2 text-3xl font-extrabold">100</dt>
                    <dd class="text-gray-500 dark:text-gray-400">Properties leased</dd>
                </div>
            </div>
            <figure class="relative max-w-full  bg-center bg-cover transition-all duration-300 mt-16 ">
                <a href="#">
                    <img class="rounded-lg" style="filter: blur(1.5px);" src="../../Public/imgs/Couple at home working on a laptop together 1.png" alt="image description">
                </a>
                <figcaption class="absolute px-4 text-lg text-white top-10">
                    <h2 class="text-8xl color2">Premium Houses and Apartments</h2>
                    <p class="text-xl color1" >* Save your time and easily rent or sell your property</p>
                </figcaption>
            </figure>
            <div class="text-center pt-5 text-5xl color2">
            <h2>Testimonial</h2>
            </div>

            <div class="swiper-container mt-26">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <figcaption class="flex items-center justify-center ">
                <img class="w-19 h-19" src="../../Public/imgs/about-us-testimonials1-83x83 1.png" alt="profile picture">
                <div class="space-y-0.5 font-medium dark:text-white text-left rtl:text-right ms-3">
                    <p class="">Bonnie Green</p>
                    <div class="text-sm text-gray-500 dark:text-gray-400">Developer at Open AI</div>
                    <p class="w-96">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ila?</p>
                </div>
            </figcaption>
        </div>

        <div class="swiper-slide">
            <figcaption class="flex items-center justify-center p-5">
                <img class="w-19 h-19" src="../../Public/imgs/about-us-testimonials1-83x83 2.png" alt="profile picture">
                <div class="space-y-0.5 font-medium dark:text-white text-left rtl:text-right ms-3">
                    <p class="">Bonnie Green</p>
                    <div class="text-sm text-gray-500 dark:text-gray-400">Developer at Open AI</div>
                    <p class="w-96">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ila?</p>
                </div>
            </figcaption>
        </div>
    </div>

    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
</div>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    // Initialize Swiper
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 1,
        spaceBetween: 20,
        loop: true,
        autoplay: {
            delay: 3000,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });
</script>
<?php
require_once '../partials/footer.php';
?>

