<?php
require_once __DIR__ . '/../partials/navbarAdmin.php';


?>
<div class="p-4 mt-10 mx-auto sm:ml-64">
   <div class="p-4 mx-auto rounded-lg dark:border-gray-700 mt-14">

<div class="mx-auto w-full max-w-sm p-4 border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
    <form class="space-y-6 " method="post" action="../update/property">
        <div>
            <input type="hidden" name="id" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  value="<?= $pro['id']?>" >
        </div>
    <div class="grid gap-6 mb-6 md:grid-cols-2">
    <input type="hidden" name="seller_id" id="seller" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  value="<?= $pro['seller_id']?>" >
        <!-- <div>
            <label for="first_name" class="block mb-2 text-sm font-medium text-white dark:text-white">Owner</label>
            <select name="owner"  id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected><?= $pro['firstName']?></option>
                    <?php foreach($cats as $cat){?>
                    <option ><?= $cat->name?></option>
                    <?php }?>  
            </select> 
        </div> -->
        <div>
       
            <label for="last_name" class="block mb-2 text-sm font-medium text-white dark:text-white">City</label>
            <select name="city_id"   id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="<?= $pro['city_id'] ?>" selected><?= $pro['city_name']?></option>
                    <?php foreach($cities as $city){?>
                    <option value="<?= $city->id ?>" ><?= $city->name?></option>
                    <?php }?>  
            </select> 
              
        </div>
        <div>
            <label for="company" class="block mb-2 text-sm font-medium text-white dark:text-white">Category</label>
            <select name="category_id"  id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="<?= $pro['category_id'] ?>" selected><?= $pro['category_name']?></option>
                    <?php foreach($cats as $cat){?>
                    <option value="<?= $cat->id ?>" ><?= $cat->name?></option>
                    <?php }?>  
            </select> 
        </div>  
        <div>
            <label for="phone" class="block mb-2 text-sm font-medium text-white dark:text-white">Rooms</label>
            <input type="number" name="room"  id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="<?= $pro['room']?>" >
        </div>
        <div>
            <label for="phone" class="block mb-2 text-sm font-medium text-white dark:text-white">Bathrooms</label>
            <input type="number" name="bathroom"  id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  value="<?= $pro['bathroom']?>">
        </div> 
        <div>
            <label for="phone" class="block mb-2 text-sm font-medium text-white dark:text-white">Garages</label>
            <input type="number" name="garage"  id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="<?= $pro['garage']?>" >
        </div> 
        <div>
            <label for="phone" class="block mb-2 text-sm font-medium text-white dark:text-white">Size</label>
            <input type="number" name="size"  id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="<?= $pro['size']?>" >
        </div>
    </div>
    <div class="mb-6">
        <label for="email" class="block mb-2 text-sm font-medium text-white dark:text-white">Address</label>
        <input type="text" name="address"  id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  value="<?= $pro['address']?>">
    </div> 

    <div class="mb-6">
        <label for="message" class="block mb-2 text-sm font-medium text-white dark:text-white">description</label>
        <textarea id="message" name="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your thoughts here..."><?= $pro['description']?></textarea>
    </div> 
  
    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">save</button>
    </form>
</div>


</div>
</div>
<?php
require_once __DIR__ . '/../partials/footerAdmin.php';
?>