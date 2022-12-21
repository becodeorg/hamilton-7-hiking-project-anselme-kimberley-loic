<form class="flex flex-col w-6/12 content-center justify-center m" method="post" action="">
    <div class="mb-6">
        <label for="nameHike" class="block mb-2 text-sm font-medium text-gray-900">Hike's name :</label>
        <input type="text" id="nameHike" name="nameHike" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"required>
    </div>
    <div class="mb-6">
        <label for="distance" class="block mb-2 text-sm font-medium text-gray-900 ">Hike's distance :</label>
        <input type="number" id="distance" name="distance" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"required>
    </div>
    <div class="mb-6">
        <label for="duration" class="block mb-2 text-sm font-medium text-gray-900 ">Hike's duration :</label>
        <input type="number" id="duration" name="duration" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
    </div>
    <div class="mb-6">
        <label for="elevationGain" class="block mb-2 text-sm font-medium text-gray-900 ">Hike's elevation :</label>
        <input type="number" id="elevationGain" name="elevationGain" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
    </div>
    <div class="mb-6">
        <label for="description" class="block mb-2 text-sm font-medium text-gray-900 ">Hike's description :</label>
        <input type="text" id="description" name="description" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
    </div>
    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
</form>