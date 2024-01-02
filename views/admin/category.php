<?php 
require_once __DIR__.'/../partials/navbarAdmin.php';

// var_dump($cities);
?>
<div class="relative overflow-x-auto shadow-md sm:rounded-lg p-16 mt-16 sm:ml-64">
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
            <?php foreach($cities as $city){?>
            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <?=$city->id?>
                </th>
                <td class="px-6 py-4">
                <?=$city->name?>
                </td>
                <td class="px-6 py-4">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Delete</a>
                </td>
            </tr>
            <?php }?>

        </tbody>
    </table>
</div>
<?php 
require_once __DIR__.'/../partials/footerAdmin.php';
?>