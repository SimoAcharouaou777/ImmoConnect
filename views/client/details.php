<?php

require_once '../partials/navbar.php';
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
            <span>RENT</span>
            <h1>Light and modern apartment</h1>
            <p>Lorem ipsum dolor sit amet, wisi nemore fastidii at vis, eos equidem admodum disputando ea. An duis dolor appellantur mea, est id zril nobis appellantur. Ei sea duis senserit qualisque, te facilisis appellantur pri. Id aperiri aliquam interesset mel. Contentiones vituperatoribus id est, per prima nihil scripta no. No semper forensibus adipiscing quo..</p>
            <button>Reserve</button>
        </div>
        <div class="bgColor1 basis-1/4">
            <img class="w-1/3 " src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg">
            <h2>Michelle Ramirez</h2>
            <a href='#'>VIEW PROFILE</a>
            <form>
                <textarea></textarea>
                <input type="submit" value="send" />
            </form>
        </div>

    </div>

    <div class=" bgColor1 mt-10">
        <h1>Add Comment </h1>
        <form>
                <textarea></textarea>
                <input type="submit" value="send" />
            </form>
    </div>



</section>

<?php

require_once '../partials/footer.php';
?>