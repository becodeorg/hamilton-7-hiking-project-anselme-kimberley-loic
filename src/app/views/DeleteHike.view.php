<p class="text-xl text-center font-extrabold">Do you really want to delete :  </p>

<p class="text-xl text-center font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-brown-hike to-green-hike p-10"><?= $hike['name']?></p>

<div>
    <a href="/singlehike?code=<?= $hike['hid']; ?>">Cancel</a>
    <a href="/deletinghike?code=<?= $hike['hid']; ?>">Yes, delete this hike</a>
</div>
