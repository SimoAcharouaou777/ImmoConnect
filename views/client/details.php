<?php

require_once(__DIR__ . '/../partials/navbar.php');
?>
<section class="p-10 m-10">
    <div class="md:flex flex-row gap-4 ">
        <div class="basis-3/4">
            <div>
                <img class="h-auto max-w-full rounded-lg my-5 md:my-auto" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" alt="">
            </div>
        </div>

        <div class="md:grid md:grid-cols-2 md:grid-cols-2 gap-4 basis-2/3">
            <div>
                <img class="h-auto max-w-full rounded-lg my-5 md:my-auto" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg my-5 md:my-auto" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg my-5 md:my-auto" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg" alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg my-5 md:my-auto" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg" alt="">
            </div>
        </div>

    </div>
    <div class="md:flex mt-20 gap-8">
        <div class="bgColor1 basis-3/4 mb-10 md:mb-0">
            <span class="bg-slate-50 p-2 px-3 rounded-ee-md">RENT</span>
            <div class='p-4  md:px-16 lg:px-20'>
                <h1 class="text-3xl font-bold mb-5 color2">Light and modern apartment</h1>
                <p class="color2">Lorem ipsum dolor sit amet, An duis dolor appellantur mea, est id zril nobis appellantur. Ei sea duis senserit qualisque, te facilisis appellantur pri. Id aperiri aliquam interesset mel. Contentiones vituperatoribus id est, per prima nihil scripta no. No semper forensibus adipiscing quo..</p>
                <div class="md:flex block md:px-5 md:m-5 ">
                    <span class=" md:md:basis-1/3 block  mx-2 px-2"> <i class="fa-solid fa-house me-2 "></i>Address</span>
                    <span class=" md:basis-1/3 block mx-2 px-2"> <i class="fa-solid fa-city me-2"></i>City</span>
                    <span class=" md:basis-1/3 block mx-2 px-2"> <i class="fa-solid fa-dollar-sign me-2"></i>2000</span>
                </div>
                <div class="md:flex block md:px-5 md:m-5">
                    <span class=" md:basis-1/3 block mx-2 px-2"> <i class="fa-solid fa-person-booth me-2"></i>Room:4</span>
                    <span class=" md:basis-1/3 block mx-2 px-2"> <i class="fa-solid fa-sink me-2"></i>bathroom:2</span>
                    <span class=" md:basis-1/3 block mx-2 px-2"> <i class="fa-solid fa-warehouse me-2"></i>Garage:1</span>
                </div>
                <div class="md:flex md:px-5 md:m-5">
                    <span class=" md:basis-1/3 block mx-2 px-2"> <i class="fa-solid fa-ruler-combined me-2"></i>size: 100m</span>
                </div>

                <button class="bgColor2 p-2  mt-5 mx-auto block w-3/5  color1 rounded-md">Reserve</button>
            </div>
        </div>
        <div class="bgColor1 basis-1/4 p-4 pt-8">
            <div class="flex ">
                <img class="w-1/3 basis-1/3" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg">
                <span class="basis-2/3 ms-2">
                    <h2 class="text-2xl">Michelle Ramirez</h2>
                    <a href='#'>VIEW PROFILE</a>
                </span>
            </div>
            <form class="mt-10">
                <textarea class="resize-none rounded-md w-full  bgColor1" rows="4" >Hello, I am interested in [Light and modern apartment]</textarea>
                <input type="submit" value="send" class="bgColor2 p-2  mt-5 mx-auto block w-4/5  color1 rounded-md" />
            </form>
        </div>

    </div>

    <div class=" bgColor1 mt-10 p-5">
        <form method ="POST" action="">
        <span class="text-3xl mx-auto block text-center my-6 ">Add Comment </span>
            <textarea class="resize-none rounded-md w-4/5 block mx-auto bgColor1  " rows="4" > add  your comment  here </textarea>
            <input type="submit" value="Comment" class="bgColor2 p-2  mt-5 mx-auto block w-3/5  color1 rounded-md" />
        </form>
    </div>



</section>

<?php

require_once(__DIR__ . '/../partials/footer.php');
?>