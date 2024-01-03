<?php 
require_once __DIR__.'/../partials/navbarAdmin.php';

// var_dump($cities);
?>
<div class="relative overflow-x-auto shadow-md sm:rounded-lg p-16 mt-16 sm:ml-64">
    <a href="add/category" class="px-5 p-2  bg-blue-600">add</a>
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 p-16">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Id
                </th>
                <th scope="col" class="px-6 py-3">
                    City Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($categories as $cat){?>
            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium  whitespace-nowrap dark:text-white">
                    <?=$cat->id?>
                </th>
                <td class="px-6 py-4">
                <?=$cat->name?>
                </td>
                <td class="px-6 py-4">
                    <a href="edit/category?id=<?=$cat->id?>" class="p-2 px-4 bg-green-500">Edit</a>
                    <a href="delete/category?id=<?=$cat->id?>" class="p-2 px-4 bg-red-500">Delete</a>
                </td>
            </tr>
            <?php }?>

        </tbody>
    </table>
</div>
<?php 
require_once __DIR__.'/../partials/footerAdmin.php';
?>