<div class="flex justify-center">
<form class="flex flex-col md:w-6/12 content-center justify-center" method="post" action="addhike">
    <div class="mb-6">
        <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Hike's name :</label>
        <input type="text" id="name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" required>
    </div>
    <div class="mb-6">
        <label for="distance" class="block mb-2 text-sm font-medium text-gray-900 ">Hike's distance :</label>
        <input type="number" step="1" id="distance" name="distance" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" required>
    </div>
    <div class="mb-6">
        <label for="duration" class="block mb-2 text-sm font-medium text-gray-900 ">Hike's duration :</label>
        <input type="number" id="duration" name="duration" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" required>
    </div>
    <div class="mb-6">
        <label for="elevationGain" class="block mb-2 text-sm font-medium text-gray-900 ">Hike's elevation :</label>
        <input type="number" id="elevationGain" name="elevationGain" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" required>
    </div>
    <div class="mb-6">
        <label for="description" class="block mb-2 text-sm font-medium text-gray-900 ">Hike's description :</label>
        <input type="text" id="description" name="description" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" required>
    </div>
    <button type="submit" class="text-white bg-brown-hike hover:bg-[#663c29] font-medium rounded-lg text-sm w-full sm:w-[200px] sm:mx-auto px-5 py-2.5 text-center">Add my hike</button>
</form>
</div>