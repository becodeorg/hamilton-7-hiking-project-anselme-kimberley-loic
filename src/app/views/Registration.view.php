<div class="lottie-mountain mb-4">
    <lottie-player class="justify-center" src="./assets/images/lf30_editor_dp7uqidq.json"  background="transparent"  speed="1"  loop  autoplay></lottie-player>
</div>
<h3 class="text-4xl text-center font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-green-hike to-blue-900">Registration :</h3>
<div class="flex justify-center">
<form class="flex flex-col w-6/12 content-center justify-center" method="post" action="registration">
    <div class="mb-6">
        <label for="nickname" class="block mb-2 text-sm font-medium text-gray-900 ">Your Nickname</label>
        <input type="text" id="nickname" name="nickname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Nickname" required>
    </div>
    <div class="mb-6">
        <label for="firstname" class="block mb-2 text-sm font-medium text-gray-900 ">Your Firstname</label>
        <input type="text" id="firstname" name="firstname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Firstname" required>
    </div>
    <div class="mb-6">
        <label for="lastname" class="block mb-2 text-sm font-medium text-gray-900 ">Your Lastname</label>
        <input type="text" id="lastname" name="lastname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Lastname" required>
    </div>
    <div class="mb-6">
        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Your Email</label>
        <input type="email" id="email" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="email@example.com" required>
    </div>
    <div class="mb-6">
        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 ">Your Password <p class="text-xs text-gray-500">(must contain 6 or more characters with at least one number)</p></label>
        <input type="password" id="password" name="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Password" required pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,}$" />
    </div>
    <div class="mb-6">
        <label for="password_confirm" class="block mb-2 text-sm font-medium text-gray-900 ">Password confirmation</label>
        <input type="password" id="password_confirm" name="password_confirm" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Password confirmation" required minlength="6">
    </div>
    <button type="submit" class="text-white bg-brown-hike hover:bg-[#663c29] font-medium rounded-lg text-sm w-full sm:w-[200px] sm:mx-auto px-5 py-2.5 text-center">Register</button>
</form>
</div>