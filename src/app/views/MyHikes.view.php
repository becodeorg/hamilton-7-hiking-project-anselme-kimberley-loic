<?php if (sizeof($hikes) < 1):?>
<div class="flex justify-center p-10">
    <a href="/addhike" class="text-2xl text-brown-hike font-semibold">Click here to add a hike</a>
</div>

<?php else: ?>
<?php endif ?>
<div class="flex-col items-center justify-center">
    <?php foreach ($hikes as $hike) : ?>
        <div class="hike relative font-medium flex items-center content-center">
            <div class="mr-auto ml-auto w-full px-6 py-8">
                <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl lg:max-w-5xl hover:scale-105 hover:shadow-2xl transition-all">
                    <a href="/singlehike?code=<?= $hike['hid']; ?>">
                        <div class="md:flex">
                            <div class="top md:flex-shrink-0">
                                <img class="image" />
                            </div>
                            <div class="p-8">
                                <h5 class="uppercase tracking-wide text-brown-hike text-sm font-semibold">Hike</h5>
                                <p class="block mt-1 text-lg leading-tight font-medium text-black"><?php echo $hike['name'] . ' / '. $hike['distance'] .'km' ?></p>
                                <p class="hike_preview-description mt-2 text-gray-500"><?= $hike['description'] ?></p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
<script src="scripts/arrayImage.js" defer></script>