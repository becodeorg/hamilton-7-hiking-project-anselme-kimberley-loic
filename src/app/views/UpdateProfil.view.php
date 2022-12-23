<h1 class="text-center text-2xl text-brown-hike font-semibold underline underline-offset-4 mb-6">My profil</h1>
<div class="flex justify-center">
    <form class="flex flex-col w-6/12 content-center justify-center" method="post" action="updateprofil">
        <div class="mb-6">
            <label for="nickname" class="block mb-2 text-sm font-medium text-gray-900 ">Your Nickname</label>
            <input type="text" id="nickname" name="nickname" value="<?= $user['nickname'];?>" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Nickname" required>
        </div>
        <div class="mb-6">
            <label for="firstname" class="block mb-2 text-sm font-medium text-gray-900 ">Your Firstname</label>
            <input type="text" id="firstname" name="firstname" value="<?= $user['firstName'];?>" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Firstname" required>
        </div>
        <div class="mb-6">
            <label for="lastname" class="block mb-2 text-sm font-medium text-gray-900 ">Your Lastname</label>
            <input type="text" id="lastname" name="lastname" value="<?= $user['lastName'];?>" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Lastname" required>
        </div>
        <div class="mb-6">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Your Email</label>
            <input type="email" id="email" name="email" value="<?= $user['email'];?>" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="email@example.com" required>
        </div>
        <div class="mb-6">
            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 ">Your New Password <p class="text-xs text-gray-500">(must contain 6 or more characters with at least one number)</p></label>
            <input type="password" id="password" name="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Password" required pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,}$">
        </div>
        <div class="mb-6">
            <label for="password_confirm" class="block mb-2 text-sm font-medium text-gray-900 ">Password confirmation</label>
            <input type="password" id="password_confirm" name="password_confirm" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Password confirmation" required minlength="6">
        </div>
        <div class="flex flex-col md:flex-row gap-5">
            <button onclick="location.href='/profil'" type="button" class="text-white bg-red-600 hover:bg-red-700 font-medium rounded-lg text-sm w-full sm:w-[200px] sm:mx-auto px-5 py-2.5 text-center">Cancel</button>
            <button type="submit" class="text-white bg-brown-hike hover:bg-[#663c29] font-medium rounded-lg text-sm w-full sm:w-[200px] sm:mx-auto px-5 py-2.5 text-center">Update Profil</button>
        </div>
    </form>
</div>