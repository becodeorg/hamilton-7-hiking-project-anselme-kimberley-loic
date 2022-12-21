<?php if (!empty($_SESSION['user'])): ?>
    <h2 class="text-center">Hello, <?= $_SESSION['user']['nickname'] ?> !</h2>
<?php endif; ?>
<div class="lottie-mountain mb-6">
    <lottie-player class="justify-center" src="./assets/images/lf30_editor_xbszatmf.json"  background="transparent"  speed="1"  loop  autoplay></lottie-player>
</div>
<h3 class="text-4xl text-center font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-blue-800 to-brown-hike">The last hike added :</h3>
<li>
    <div class="hike relative font-medium flex items-center content-center">
        <div class="mr-auto ml-auto w-full px-6 py-8">
            <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl hover:scale-105 hover:shadow-2xl transition-all">
                <a href="/singlehike?code=<?= $productLast['hid']; ?>">
                <div class="md:flex">
                    <div class="top md:flex-shrink-0">
                        <img class="image" />
                    </div>
                    <div class="p-8">
                        <h5 class="uppercase tracking-wide text-brown-hike text-sm font-semibold">Hike</h5>
                        <p class="block mt-1 text-lg leading-tight font-medium text-black"><?php echo $productLast['name'] . ' / '. $productLast['distance'] .'km' ?></p>
                        <p class="hike_preview-description mt-2 text-gray-500"><?= $productLast['description'] ?></p>
                    </div>
                </div>
                </a>
            </div>
        </div>
    </div>
</li>

<h3 class="text-4xl text-center font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-brown-hike to-blue-800">The 4 longest hikes :</h3>
<ul class="md:grid grid-cols-2 w-4/5 ml-auto mr-auto">
    <?php foreach ($products as $product) : ?>
        <li class="justify-items-center">
            <div class="hike relative font-medium flex items-center content-center">
                <div class="mr-auto ml-auto w-full px-6 py-8">
                    <div class="md:max-w-2xl mx-auto bg-white rounded-xl shadow-md overflow-hidden hover:scale-105 hover:shadow-2xl transition-all">
                        <a href="/singlehike?code=<?= $product['hid']; ?>"
                            <div class="md:flex">
                                <div class="top md:flex-shrink-0">
                                    <img class="image" />
                                </div>
                                <div class="p-8">
                                    <h5 class="uppercase tracking-wide text-brown-hike text-sm font-semibold">Hike</h5>
                                    <p href="/singlehike?code=<?= $product['hid']; ?>" class="block mt-2 text-lg leading-tight font-medium text-black"><?php echo $product['name'] . ' / '. $product['distance'] .'km' ?></p>
                                    <p class="hike_preview-description mt-2 text-gray-500"><?= $product['description'] ?></p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </li>

    <?php endforeach; ?>
</ul>

<script src="scripts/arrayImage.js" defer></script>

