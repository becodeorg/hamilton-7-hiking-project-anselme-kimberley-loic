<h1 class="text-center text-2xl text-brown-hike font-semibold underline underline-offset-4 mb-6">My profil</h1>
<div class="flex flex-col justify-center items-center mb-6">
    <ul >
        <li class="mb-6">Email : <span><?= $user['email'] ?></span></li>
        <li class="mb-6">Nickname : <span><?= $user['nickname'] ?></span></li>
        <li class="mb-6">Firstname : <span><?= $user['firstName'] ?></span></li>
        <li class="mb-6">Lastname : <span><?= $user['lastName'] ?></span></li>
    </ul>
    <a href="/updateprofil" class="px-4 py-2.5 bg-brown-hike rounded-lg text-white hover:bg-[#663c29]">Edit your profil</a>
</div>



