<body>
<div class="lottie-mountain">
    <lottie-player class="justify-center" src="./assets/images/lf30_editor_rm4y2yra.json"  background="transparent"  speed="1"  loop  autoplay></lottie-player>
</div>
<div class="flex-col items-center justify-center">
<?php foreach ($hikes as $hike) : ?>
<div class="hike relative font-medium flex items-center content-center">
    <div class="mr-auto ml-auto w-full px-6 py-8">
        <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl">
            <div class="md:flex">
                <div class="top md:flex-shrink-0">
                    <img class="image" />
                </div>
                <div class="p-8">
                    <h5 class="uppercase tracking-wide text-brown-hike text-sm font-semibold">Hike</h5>
                    <a href="/hikes?code=<?= $hike['hid']; ?>" class="block mt-1 text-lg leading-tight font-medium text-black hover:underline"><?php echo $hike['name'] ?></a>
                    <p class="hike_preview-description mt-2 text-gray-500"><?= $hike['description'] ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>
</div>
<script src="scripts/arrayImage.js" defer></script>
