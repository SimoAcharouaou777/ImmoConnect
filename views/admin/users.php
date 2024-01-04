<?php 
require_once __DIR__.'/../partials/navbarAdmin.php';

// var_dump($users);
?>
<div class="relative overflow-x-auto shadow-md sm:rounded-lg p-16 mt-16 sm:ml-64">
<!-- <a href="add/city" class="px-5 p-2  bg-blue-600">add</a> -->

    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 p-16">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Id
                </th>
                <th scope="col" class="px-6 py-3">
                    FirstName
                </th>
                <th scope="col" class="px-6 py-3">
                    LastName
                </th>
                <th scope="col" class="px-6 py-3">
                    Role
                </th>
                <th scope="col" class="px-6 py-3">
                    Email
                </th>
                <th scope="col" class="px-6 py-3">
                    Phone
                </th>
                <th scope="col" class="px-6 py-3">
                    Photo
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($users as $user){?>
            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium  whitespace-nowrap dark:text-white">
                    <?=$user->id?>
                </th>
                <td class="px-6 py-4">
                <?=$user->firstname?>
                </td>
                <td class="px-6 py-4">
                <?=$user->lastname?>
                </td>
                <td class="px-6 py-4">
                <?= ($user->rolename == 'admin') ? '<span class="bg-yellow-100 text-yellow-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-yellow-900 dark:text-yellow-300">Admin</span>' : (($user->rolename == 'user') ? '<span class="bg-purple-100 text-purple-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-purple-900 dark:text-purple-300">User</span>' : '<span class="bg-gray-100 text-gray-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-gray-300">Seller</span>') ?>
                </td>
                <td class="px-6 py-4">
                <?=$user->email?>
                </td>
                <td class="px-6 py-4">
                <?=$user->phone?>
                </td>
                <td class="px-6 py-4">
                <?=$user->profile?>
                </td>
                <td class="px-6 py-4">
                    <a href="delete/user?id=<?=$user->id?>" class="p-2 px-4 bg-red-500">Delete</a>
                </td>
            </tr>
            <?php }?>

        </tbody>
    </table>
</div>
<?php 
require_once __DIR__.'/../partials/footerAdmin.php';
?>