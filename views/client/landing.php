<?php

require_once(__DIR__ . '/../partials/navbar.php');

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
        </div>
        <div class="p-10 bg-stone-500/50 z-5 absolute top-3/4 left-36 right-36 ">
            <form class="grid sm:grid-cols-1 md:grid-cols-3 gap-4 p-4">
                <select class="p-2 bgColor1 rounded col-span-1">
                    <option value="">Select Option</option>
                    <option value="option1">Option 1</option>
                    <option value="option2">Option 2</option>
                </select>
                <input type="text" class="p-2 bgColor1 rounded col-span-1" placeholder="Search here...">
                <button class="p-2 bgColor2 text-white rounded col-span-1 md:col-span-1 mx-16">Search</button>
            </form>
        </div> 
    </section>

    <section class="py-12">
    <div class="flex flex-col items-center gap-16 flex-wrap">
        <h1 class="text-center text-4xl font-bold">Our choice of popular real estate</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 justify-items-center ">
                <?php foreach($annonces as $ann){?>
            <div class="max-w-sm bgColor1 border shadow-lg border-gray-300 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="detail/annonce?id=<?= $ann->annId ?>">
                    <img class="rounded-t-lg" src="/immoconnect/public/imgs/img5.jpg" alt="" />
                </a>
                <div class="p-5">
                    <p><i class="fa-solid fa-location-dot"></i> <?= $ann->category ?> - <?= $ann->city ?></p>
                    <a href="detail/annonce?id=<?= $ann->annId ?>">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><?= $ann->title ?></h5>
                    </a>
                    <p class=" font-normal text-gray-700 dark:text-gray-400"><?= $ann->description ?></p>
                </div>
                <div class="flex justify-around pb-6 text-lg" >
                    <span><?= $ann->price ?>$<i class="fa-solid fa-dollar-sign"></i></span>
                    <span><i class="fa-solid fa-ruler-combined"></i><?= $ann->size ?> m²</span>
                    <span><i class="fa-solid fa-bath"></i><?= $ann->bathroom ?></span>
                    <span><i class="fa-solid fa-bed"></i><?= $ann->room ?></span>
                </div>
            </div>
            <?php }?>
        

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

    <section class="py-12 flex flex-col items-center gap-10 overflow-hidden">
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

require_once (__DIR__.'/../partials/footer.php');
?>