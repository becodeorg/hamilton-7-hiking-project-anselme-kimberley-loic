<div class="flex justify-center">
    <form class="flex flex-col w-6/12" method="post" action="login" >
    <div class="mb-6">
        <label for="nickname" class="block mb-2 text-sm font-medium text-gray-900">Your Nickname</label>
        <input type="text" id="nickname" name="nickname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Awesome Username" required>
    </div>
    <div class="mb-6">
        <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Your Password</label>
        <input type="password" id="password" name="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
    </div>
    <button type="submit" class="text-white bg-brown-hike hover:bg-[#663c29] font-medium rounded-lg text-sm w-full sm:w-[200px] sm:mx-auto px-5 py-2.5 text-center">LogIn</button>
    <div class="mt-5 flex justify-center items-center">
        <a href="/registration" class="text-center underline underline-offset-4 text-lg hover:text-[#663c29]">Don't have an account ?</a>
    </div>
    </form>
</div>

