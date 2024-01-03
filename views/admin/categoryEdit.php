<?php
require_once __DIR__ . '/../partials/navbarAdmin.php';


?>
<div class="relative overflow-x-auto shadow-md sm:rounded-lg p-16 mt-16 sm:ml-64">



    <form class="max-w-sm mx-auto" action="../update/category" method="post">
        <div class="mb-5">
            
            <input type="hidden" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  name="id" placeholder="name@flowbite.com" value="<?=$cat->id?>">
        </div>
        <div class="mb-5">
            <label  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name Category</label>
            <input type="text" value="<?=$cat->name?>" name="name"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@flowbite.com"  >
        </div>
   
        <button type="submit" class="text-white px-16 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm  sm:w-auto px-36 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
    </form>

</div>
<?php
require_once __DIR__ . '/../partials/footerAdmin.php';
?>