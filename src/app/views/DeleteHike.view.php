<p class="text-xl text-center font-extrabold underline underline-offset-4">Do you really want to delete :  </p>

<p class="text-xl text-center font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-brown-hike to-green-hike p-10"><?= $hike['name']?></p>

<div class="flex justify-center gap-10">
    <a href="/singlehike?code=<?= $hike['hid']; ?>" class="bg-brown-hike px-4 py-2 rounded-full text-white">Cancel</a>
    <a href="/deletinghike?code=<?= $hike['hid']; ?>" class="bg-brown-hike px-4 py-2 rounded-full text-white">Yes, delete this hike</a>
</div>
