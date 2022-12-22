<div class="lottie-mountain mb-4">
    <lottie-player class="justify-center" src="./assets/images/lf30_editor_dp7uqidq.json"  background="transparent"  speed="1"  loop  autoplay></lottie-player>
</div>
<h3 class="text-4xl text-center font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-green-hike to-blue-900">Login :</h3>
<div class="flex justify-center">
    <form class="flex flex-col w-6/12" method="post" action="login" >
    <div class="mb-6">
        <label for="nickname" class="block mb-2 text-sm font-medium text-gray-900">Your Nickname</label>
        <input type="text" id="nickname" name="nickname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Awesome Nickname" required>
    </div>
    <div class="mb-6">
        <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Your Password</label>
        <input type="password" id="password" name="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Awesome Password" required>
    </div>
    <button type="submit" class="text-white bg-brown-hike hover:bg-[#663c29] font-medium rounded-lg text-sm w-full sm:w-[200px] sm:mx-auto px-5 py-2.5 text-center">LogIn</button>
    <div class="my-5 flex justify-center items-center">
        <a href="/registration" class="text-center underline underline-offset-4 text-lg hover:text-[#663c29]">Don't have an account ?</a>
    </div>
    </form>
</div>

