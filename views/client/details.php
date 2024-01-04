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
                <h1 class="text-3xl font-bold mb-5 color2"><?= $ann->title ?></h1>
                <p class="color2"><?= $ann->description ?></p>
                <div class="md:flex block md:px-5 md:m-5 ">
                    <span class=" md:md:basis-1/3 block  mx-2 px-2"> <i class="fa-solid fa-house me-2 "></i><?= $ann->address ?></span>
                    <span class=" md:basis-1/3 block mx-2 px-2"> <i class="fa-solid fa-city me-2"></i><?= $ann->city ?></span>
                    <span class=" md:basis-1/3 block mx-2 px-2"> <i class="fa-solid fa-dollar-sign me-2"></i><?= $ann->price ?></span>
                </div>
                <div class="md:flex block md:px-5 md:m-5">
                    <span class=" md:basis-1/3 block mx-2 px-2"> <i class="fa-solid fa-person-booth me-2"></i><?= $ann->room ?></span>
                    <span class=" md:basis-1/3 block mx-2 px-2"> <i class="fa-solid fa-sink me-2"></i><?= $ann->bathroom ?></span>
                    <span class=" md:basis-1/3 block mx-2 px-2"> <i class="fa-solid fa-warehouse me-2"></i><?= $ann->garage ?></span>
                </div>
                <div class="md:flex md:px-5 md:m-5">
                    <span class=" md:basis-1/3 block mx-2 px-2"> <i class="fa-solid fa-ruler-combined me-2"></i><?= $ann->size ?> m²</span>
                </div>

                <button class="bgColor2 p-2  mt-5 mx-auto block w-3/5  color1 rounded-md">Reserve</button>
            </div>
        </div>
        <div class="bgColor1 basis-1/4 p-4 pt-8">
            <div class="flex ">
                <img class="w-1/3 basis-1/3" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg">
                <span class="basis-2/3 ms-2">
                    <h2 class="text-2xl"><?= $ann->firstname ?> <?= $ann->lastname ?></h2>
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
        <form method ="POST" action="../../../UserComment/Controller">
        <span class="text-3xl mx-auto block text-center my-6 ">Add Comment </span>
        <input type="hidden" name="userid" value="<?=$_SESSION['id'] ?>">
        <input type="hidden" name="annonceid" value="<?= $ann->annId?>">
            <textarea class="resize-none rounded-md w-4/5 block mx-auto bgColor1  " name="comment" rows="4" > add  your comment  here </textarea>
            <input type="submit" value="Comment" class="bgColor2 p-2  mt-5 mx-auto block w-3/5  color1 rounded-md" />

        </form>
    </div>



</section>


<div class="grid mb-8 border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 md:mb-12 md:grid-cols-2 bg-white dark:bg-gray-800">

<?php foreach($comments as $comm) {?>

    <figure class="flex flex-col items-center justify-center p-8 text-center bg-white border-b border-gray-200 rounded-t-lg md:rounded-t-none md:rounded-ss-lg md:border-e dark:bg-gray-800 dark:border-gray-700">
   
        <figcaption class="flex items-center justify-center ">
            <img class="rounded-full w-9 h-9" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/karen-nelson.png" alt="profile picture">
           
            <div class="space-y-0.5 font-medium dark:text-white text-left rtl:text-right ms-3">
                <div><?= $comm->firstname?></div>
                <div class="text-sm text-gray-500 dark:text-gray-400 "><?= $comm->rolename?></div>
            </div>
        </figcaption>  
        <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
            <p class="my-4"><?= $comm->comment?></p>
        </blockquote>
       
    </figure>
    <?php }?>
</div>

<?php

require_once(__DIR__ . '/../partials/footer.php');
?>