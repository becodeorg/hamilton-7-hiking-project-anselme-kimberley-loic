
<form class="flex flex-col w-6/12 mr-auto ml-auto content-center justify-center m" method="post" action="updatehike?code=<?= $hike['hid']?>">
    <div class="mb-6">
        <label for="name" class="block mb-2 text-sm font-medium text-gray-900"></label>
        <input type="text" id="name" name="name" value="<?= $hike['name'];?>" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
    </div>
    <div class="mb-6">
        <label for="distance" class="block mb-2 text-sm font-medium text-gray-900 ">Hike's distance :</label>
        <input type="number" step="1" id="distance" name="distance" value="<?= (int)$hike['distance'];?>" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
    </div>
    <div class="mb-6">
        <label for="duration" class="block mb-2 text-sm font-medium text-gray-900 ">Hike's duration :</label>
        <input type="number" id="duration" name="duration" value="<?= (int)$hike['duration'];?>" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
    </div>
    <div class="mb-6">
        <label for="elevationGain" class="block mb-2 text-sm font-medium text-gray-900 ">Hike's elevation :</label>
        <input type="number" id="elevationGain" name="elevationGain" value="<?= (int)$hike['elevationGain'];?>" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
    </div>
    <div class="mb-6">
        <label for="description" class="block mb-2 text-sm font-medium text-gray-900 ">Hike's description :</label>
        <textarea id="description" rows="6" name="description" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required><?= $hike['description'];?></textarea>
    </div>
    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
</form>